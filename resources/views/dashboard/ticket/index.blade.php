@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tickets Management</h1>
    </div>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Descriptions</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tickets as $ticket)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $ticket->type_name }}</td>
                        <td>{{ $ticket->descriptions }}</td>
                        <td>{{ $ticket->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
