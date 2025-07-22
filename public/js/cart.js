document.addEventListener("DOMContentLoaded", function () {
    let currentItem = {};

    const plusBtn = document.querySelector('.quantity-increase');
    const minusBtn = document.querySelector('.quantity-decrease');
    const confirmBtn = document.querySelector('.confirm_add_to_cart');

    function updateModalTotal() {
        const input = document.getElementById('modalQuantity');
        const quantity = parseInt(input.value) || 1;
        const price = parseFloat(currentItem.price);
        const total = quantity * price;
        const totalText = document.querySelector('.details_quentity h3');
        if (totalText) {
            totalText.textContent = `$${total.toFixed(2)}`;
        }
    }

    if (plusBtn) {
        plusBtn.addEventListener('click', function () {
            const input = document.getElementById('modalQuantity');
            input.value = parseInt(input.value) + 1;
            updateModalTotal();
        });
    }

    if (minusBtn) {
        minusBtn.addEventListener('click', function () {
            const input = document.getElementById('modalQuantity');
            input.value = Math.max(1, parseInt(input.value) - 1);
            updateModalTotal();
        });
    }

    document.querySelectorAll('.add_to_cart').forEach(button => {
        button.addEventListener('click', function (e) {
            e.preventDefault();

            const name = this.dataset.name;
            const price = this.dataset.price;
            const image = this.dataset.image;
            const id = this.dataset.id ?? name;

            currentItem = { id, name, price, image };

            const modal = document.getElementById('cartModal');
            modal.querySelector('.cart_popup_img img').src = image;
            modal.querySelector('.cart_popup_text .title').textContent = name;
            modal.querySelector('.cart_popup_text .price').innerHTML = `$${price}`;
            modal.querySelector('#modalQuantity').value = 1;
            updateModalTotal();
        });
    });

    if (confirmBtn) {
        confirmBtn.addEventListener('click', function (e) {
            e.preventDefault();

            const quantity = parseInt(document.getElementById('modalQuantity').value);

            fetch('/add-to-cart', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    item_id: currentItem.id,
                    name: currentItem.name,
                    price: currentItem.price,
                    image: currentItem.image,
                    quantity: quantity
                })
            })
            .then(res => res.json())
            .then(data => {
                if (data.status === 'success') {
                    const countBadge = document.getElementById('cart-count');
                    if (countBadge) {
                        countBadge.textContent = data.cart_count;
                    }
                }
            });
        });
    }

    // 🟡 Quantity change inside cart_view page
    const priceElements = document.querySelectorAll('.price');
    const qtyInputs = document.querySelectorAll('.qty-input');
    const totalCells = document.querySelectorAll('.item-total');
    const hiddenTotalInputs = document.querySelectorAll('.hidden-totals');

    function calculateTotals() {
        let subtotal = 0;

        priceElements.forEach((priceCell, index) => {
            const price = parseFloat(priceCell.dataset.price);
            const qtyInput = qtyInputs[index];

            if (!qtyInput) return;

            const qty = parseInt(qtyInput.value);
            const itemTotal = price * qty;

            totalCells[index].querySelector('h6').textContent = `$${itemTotal.toFixed(2)}`;
            hiddenTotalInputs[index].value = itemTotal.toFixed(2);
            subtotal += itemTotal;
        });

        document.querySelector('.subtotal').textContent = `$${subtotal.toFixed(2)}`;
        document.querySelector('.final-total').textContent = `$${subtotal.toFixed(2)}`;
    }

    calculateTotals();

    document.querySelectorAll('.qty-plus').forEach((btn, index) => {
        btn.addEventListener('click', function () {
            qtyInputs[index].value = parseInt(qtyInputs[index].value) + 1;
            calculateTotals();
        });
    });

    document.querySelectorAll('.qty-minus').forEach((btn, index) => {
        btn.addEventListener('click', function () {
            qtyInputs[index].value = Math.max(1, parseInt(qtyInputs[index].value) - 1);
            calculateTotals();
        });
    });

    // 🟢 Clear all cart
  window.clearCartItems = function (e) {
    e.preventDefault();

    const items = document.querySelectorAll('.cart-item');

    let totalQtyRemoved = 0;

    items.forEach(row => {
        const itemName = row.querySelector('input[name="items[]"]').value;
        const qty = parseInt(row.querySelector('.qty-input').value);

        // Remove DOM
        row.remove();
        totalQtyRemoved += qty;

        // AJAX remove each from session
        fetch('/remove-item', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({ name: itemName })
        });
    });

    // Update cart count in menu
    const countBadge = document.getElementById('cart-count');
    if (countBadge) {
        let currentCount = parseInt(countBadge.textContent);
        countBadge.textContent = Math.max(0, currentCount - totalQtyRemoved);
    }

    updateCartTotals(); // Update subtotal/total
};


    // 🔴 Remove one item
    window.removeCartItem = function (e, el) {
        e.preventDefault();

        const row = el.closest('.cart-item');
        if (!row) return;

        const itemName = row.querySelector('input[name="items[]"]').value;
        const qty = parseInt(row.querySelector('.qty-input').value);

        row.remove();
        updateCartTotals();

        const countBadge = document.getElementById('cart-count');
        if (countBadge && !isNaN(qty)) {
            let currentCount = parseInt(countBadge.textContent);
            countBadge.textContent = Math.max(0, currentCount - qty);
        }

        fetch('/remove-item', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({ name: itemName })
        });
    }

    // 🟢 Common total updater
    window.updateCartTotals = function () {
        let subtotal = 0;

        document.querySelectorAll('.cart-item').forEach(row => {
            const price = parseFloat(row.querySelector('.price').dataset.price);
            const qty = parseInt(row.querySelector('.qty-input').value);

            if (!isNaN(price) && !isNaN(qty)) {
                const itemTotal = price * qty;
                subtotal += itemTotal;

                const totalCell = row.querySelector('.item-total h6');
                if (totalCell) {
                    totalCell.textContent = `$${itemTotal.toFixed(2)}`;
                }
            }
        });

        const subtotalElem = document.querySelector('.subtotal');
        const totalElem = document.querySelector('.final-total');

        if (subtotalElem) subtotalElem.textContent = `$${subtotal.toFixed(2)}`;
        if (totalElem) totalElem.textContent = `$${subtotal.toFixed(2)}`;
    }
});
