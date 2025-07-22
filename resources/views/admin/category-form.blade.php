@extends('layouts.adminlte')

@section('content')
    {{-- Ab yahan wahi content likho jo aapne <x-app-layout> ke andar likha tha --}}

    {{-- Category form --}}
    <form method="POST" action="{{ route('category-submit.store') }}">
        @csrf
        <div class="mb-3">
            <h1>Category FORM</h1>
            <label for="name" class="form-label">Category Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Category</button>
    </form>

    {{-- Rest of dashboard content --}}
    {{-- Paste your small boxes, charts, chats, etc. here --}}
@endsection
