@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">List Reservation</h1>
    </div>

    <div class="container py-3">
        <div class="row">
            <h2 class="pb-3">Reservations List</h2>
            <div class="col-md-4 mx-1">
                <div class="card" style="width: 18rem;">
                    <img src="/img/room.jpg" class="card-img-top" height="300" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the
                            card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mx-1">
                <div class="card" style="width: 18rem;">
                    <img src="/img/room.jpg" class="card-img-top" height="300" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk
                            of
                            the
                            card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
