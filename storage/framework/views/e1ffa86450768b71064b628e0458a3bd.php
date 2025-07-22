<!--=============================
        TOPBAR START
    ==============================-->
<section class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-sm-6 col-md-8">
                <ul class="topbar_info d-flex flex-wrap d-none d-sm-flex">
                    <li><a href="mailto:example@gmail.com"><i class="fas fa-envelope"></i> examplemail@gmail.com</a>
                    </li>
                    <li class="d-none d-md-block"><a href="callto:123456789"><i class="fas fa-phone-alt"></i>
                            +96487452145214</a></li>
                </ul>
            </div>
            <div class="col-xl-6 col-sm-6 col-md-4">
                <ul class="topbar_icon d-flex flex-wrap">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a> </li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a> </li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a> </li>
                    <li><a href="#"><i class="fab fa-behance"></i></a> </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--=============================
        TOPBAR END
    ==============================-->


<nav class="navbar navbar-expand-lg main_menu">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="<?php echo e(asset('images/logo.png')); ?>" alt="RegFood" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="far fa-bars menu_icon_bar"></i>
            <i class="far fa-times close_icon_close"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo e(route('home')); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('about')); ?>">about</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('menu')); ?>">menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('chefs')); ?>">chefs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">pages <i class="far fa-angle-down"></i></a>
                    <ul class="droap_menu">
                        <li><a href="<?php echo e(route('menu_details')); ?>">menu details</a></li>
                        <li><a href="<?php echo e(route('blog_page_show')); ?>">blog details</a></li>
                        <li><a href="<?php echo e(route('cart_view')); ?>">cart view</a></li>
                        <li><a href="<?php echo e(route('check_out_page')); ?>">checkout</a></li>
                        <li><a href="<?php echo e(route('payment')); ?>">payment</a></li>
                        <li><a href="<?php echo e(route('testimonial_page')); ?>">testimonial</a></li>
                        <li><a href="<?php echo e(route('404')); ?>">404/Error</a></li>
                        <li><a href="<?php echo e(route('faq')); ?>">FAQs</a></li>
                        <?php if(auth()->guard()->guest()): ?>
                            <li><a href="<?php echo e(route('auth.login')); ?>">sign in</a></li>
                            <li><a href="<?php echo e(route('auth.register')); ?>">sign up</a></li>
                        <?php endif; ?>


                        <li><a href="#">forgot password</a></li>
                        <li><a href="<?php echo e(route('privacy_policy')); ?>">privacy policy</a></li>
                        <li><a href="<?php echo e(route('terms_condition')); ?>">terms and condition</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('blog_page_show')); ?>">blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('contact')); ?>">contact</a>
                </li>
                <?php if(auth()->guard()->check()): ?>
                    <?php if(Auth::user()->role_id == 2): ?>
                        <li class="nav-item mt-4">
                            <form method="POST" action="<?php echo e(route('logout')); ?>">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="nav-link btn btn-link text-danger"
                                    style="text-decoration: none;">
                                    Logout
                                </button>
                            </form>
                        </li>
                    <?php endif; ?>
                <?php endif; ?>
            </ul>
            <ul class="menu_icon d-flex flex-wrap">
                <li>
                    <a class="cart_icon" href="<?php echo e(route('cart_view')); ?>"><i class="fas fa-shopping-basket"></i>
                        
                        <span class="cart_count" id="cart-count">
                            <?php echo e(session('cart') ? array_sum(array_column(session('cart'), 'quantity')) : 0); ?>

                        </span>

                </li>
                <li>
                    <a class="active" href="<?php echo e(route('dashboards')); ?>"><i class="fas fa-user"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\laravel\resturant\resources\views/layouts/menu.blade.php ENDPATH**/ ?>