@extends('layouts.main')
@section('content')

    <div class="container">
<h1>Admin Report</h1>

    <table class="table">
        <thead class="black white-text">
        <tr>
            <th scope="col">Product</th>
            <th scope="col">Number of Reviews</th>
            <th scope="col">Highest Review</th>
            <th scope="col">Lowest Review</th>
            <th scope="col">Average Rating</th>
        </tr>
        </thead>
        <tbody>
            @foreach($report_data as $data)
                <tr>
                    <td>{{ $data->product }}</td>
                    <td>{{ $data->count_rating }}</td>
                    <td>{{ $data->max_rating }}</td>
                    <td>{{ $data->min_rating }}</td>
                    <td>{{ $data->avg_rating }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection

