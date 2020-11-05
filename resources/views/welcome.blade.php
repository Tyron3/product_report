@extends('layouts.main')
@section('content')

<div class="container">
<h1>Reviews</h1>

    @if(session('successMsg'))
        <div class="alert alert-success" role="alert">
            {{ session('successMsg')  }}
        </div>
    @endif

    <table class="table">
        <thead class="black white-text">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Description</th>
            <th scope="col">Rating</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($reviews as $review)
                <tr>
                    <th scope="row">{{ $review->id }}</th>
                    <td>{{ $review->description }}</td>
                    <td>{{ $review->rating }}</td>
                    <td>{{ $review->name }}</td>
                    <td>{{ $review->email }}</td>
                    <td>
                        <a class="btn btn-raised btn-primary btn-sm" href="{{ route('edit', $review->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

        {{ $reviews->links() }}
</div>
@endsection

