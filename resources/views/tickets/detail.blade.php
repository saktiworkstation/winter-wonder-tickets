@extends('layouts.main')

@section('container')
    <div class="container pt-4">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-4">
                        <img src="/img/room.jpg" class="border rounded" width="240px" height="85%">
                    </div>
                    <div class="col-8">
                        <h3>{{ $ticket->type_name }}</h3>
                        <p>Price : {{ $ticket->price }}</p>
                        <h4>{!! $ticket->descriptions !!}</h4>
                        <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            Booking Now
                        </button>
                    </div>
                </div>
                <hr>
                {{-- <div class="row pb-4">
                </div> --}}
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post">
                        <div class="mb-3">
                            <label for="basic-url" class="form-label">How much do you want to order?</label>
                            <div class="input-group">
                                <input type="hidden" name="ticket_type_id" value="{{ $ticket->id }}">
                                <span class="input-group-text" id="basic-addon3">IDR. {{ $ticket->price }} / Ticket</span>
                                <input type="text" class="form-control" id="basic-url"
                                    aria-describedby="basic-addon3 basic-addon4">
                            </div>
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
@endsection
