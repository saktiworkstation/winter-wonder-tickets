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
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Launch demo modal
                        </button>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="#" method="post">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Number of tickets</span>
                                    <input type="text" class="form-control" aria-label="Sizing example input"
                                        aria-describedby="inputGroup-sizing-default">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
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

    {{-- Features --}}
    <div class="container px-4 py-5">
        <h2 class="pb-2 border-bottom">Our Features</h2>

        <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
            <div class="col d-flex flex-column align-items-start gap-2">
                <h2 class="fw-bold text-body-emphasis">Say goodbye to the hassle of manual ticket booking, let our system
                    handle it for you!</h2>
                <p class="text-body-secondary">Experience the convenience of reserving tickets effortlessly for your
                    favorite attractions, whether it's physical tickets or e-tickets. Your gateway to seamless adventures
                    begins here!.</p>
                <a href="#" class="btn btn-primary btn-lg">Primary button</a>
            </div>

            <div class="col">
                <div class="row row-cols-1 row-cols-sm-2 g-4">
                    <div class="col d-flex flex-column gap-2">
                        <div
                            class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#collection" />
                            </svg>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Online ticket booking</h4>
                        <p class="text-body-secondary">Online ticket booking service, anywhere, anytime, without the need
                            to
                            queue.</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <div
                            class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#gear-fill" />
                            </svg>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Book tickets and places</h4>
                        <p class="text-body-secondary">Ordering tickets and places online is easy, you just need to choose
                            an available place.</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <div
                            class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#speedometer" />
                            </svg>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Payment system</h4>
                        <p class="text-body-secondary">Easy, safe and flexible payment system.</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <div
                            class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#table" />
                            </svg>
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Member bonuses</h4>
                        <p class="text-body-secondary">Get a series of discounts and prizes as a member.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
    </script>
@endsection
