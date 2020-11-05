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
        <form class="text-center border border-light p-5" action="{{ route('update', $review->id) }}" method="POST">
            {{ csrf_field() }}

            <p class="h4 mb-4">Edit Review</p>

            <div class="form-row mb-4">
                <div class="col">
                    <!-- Name -->
                    <input type="text" id="name" class="form-control" value="{{ $review->name }}" name="name" placeholder="Name" readonly>
                </div>
                <div class="col">
                    <!-- Email -->
                    <input type="text" id="email" class="form-control" value="{{ $review->email }}" name="email" placeholder="Email" readonly>
                </div>
            </div>

            <!-- Desctiption -->
            <input type="description" id="description" class="form-control mb-4" value="{{ $review->description }}" name="description" placeholder="Description">

           
            <!-- Update button -->
            <button class="btn btn-info my-4 btn-block" type="submit">Update</button>
        </form>
        <!-- Default form register -->
    </div>
@endsection

