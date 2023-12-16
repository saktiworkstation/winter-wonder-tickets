@extends('layouts.main')

@section('container')
    <div class="container my-3">
        <div class="row d-flex align-content-end">
            <div class="col-md-7 mx-auto">
                <h1 class="d-flex align-self-center text-center">Say goodbye to the hassle of manual ticket booking, let our
                    system handle it
                    for
                    you!</h1>
                <h4 class="d-flex align-self-center text-center">Experience the convenience of reserving tickets effortlessly
                    for
                    your
                    favorite
                    attractions, whether it's
                    physical tickets or e-tickets. Your gateway to seamless adventures begins here!</h4>
            </div>
        </div>

        {{-- Ticket --}}
        <div class="row pt-4 mt-3">
            <h2 class="pb-3">Booking tickets now</h2>
            <div class="col-md-4 py-3">
                <div class="card" style="width: 18rem;">
                    <img src="/img/room.jpg" class="card-img-top" height="300">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 py-3">
                <div class="card" style="width: 18rem;">
                    <img src="/img/room.jpg" class="card-img-top" height="300">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 py-3">
                <div class="card" style="width: 18rem;">
                    <img src="/img/room.jpg" class="card-img-top" height="300">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's
                            content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Promotion --}}
    <div class="container-fluid bg-body-tertiary mt-3">
        <div class="container py-3">
            <div class="row">
                <h2 class="pb-3">New Promotions</h2>
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
    </div>
@endsection
