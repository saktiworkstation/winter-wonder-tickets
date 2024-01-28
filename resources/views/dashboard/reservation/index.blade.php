@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">List Reservation</h1>
    </div>

    <div class="container py-3">
        <div class="row">
            <h2 class="pb-3">Reservations List</h2>
            @foreach ($reservations as $reservation)
                <div class="col-md-4 my-3">
                    <div class="card" style="width: 18rem;">
                        <img src="/img/room.jpg" class="card-img-top" height="300" alt="...">
                        <div class="card-body">
                            <h3>{{ $reservation->name }}</h3>
                            <p class="card-text">{{ $reservation->include }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
