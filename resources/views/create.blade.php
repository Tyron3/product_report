@extends('layouts.main')
@section('content')

<div class="container">

    @if($errors->any())
    @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error  }}
            </div>
    @endforeach
    @endif

<!-- Default form -->
<form class="text-center border border-light p-5" action="{{ route('store') }}" method="POST">
    {{ csrf_field() }}

    <p class="h4 mb-4">Add Review</p>

    <!-- Name -->
    <input type="text" id="name" class="form-control mb-4" name="name" placeholder="Name">

    <!-- E-mail -->
    <input type="email" id="email" class="form-control mb-4" name="email" placeholder="E-mail">

    <!-- Product -->
    <select class="form-control mb-4" name="product">
    @foreach($products as $product)
        <option value="{{ $product->id }}">{{ $product->name }}</option>
    @endforeach
    </select>

    <!-- Descripption -->
    <textarea id="description" class="form-control" name="description" placeholder="Description"></textarea>

    <input type="text" class="rating rating-loading mb-4" name="rating" value="4" data-size="sm" title="">

    <!-- Save button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Add Review</button>
</form>
<!-- Default form register -->
</div>
@endsection

