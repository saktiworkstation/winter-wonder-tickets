@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
    </div>

    {{-- Ticket --}}
    <div class="row pt-4 mt-3">
        <h2 class="pb-3">My Tickets</h2>
        @foreach ($userTickets as $ticket)
            <div class="col-md-4 py-3">
                <div class="card">
                    <h5 class="card-header">{{ $ticket->ticketType->type_name }}</h5>
                    <div class="card-body">
                        <h5 class="card-title">In the name : {{ $ticket->user->name }}</h5>
                        <h5 class="card-title">Amount : {{ $ticket->quantity }}</h5>
                        <h5 class="card-title">Total Price. {{ $ticket->total_price }}</h5>
                        <p class="card-text">{!! $ticket->ticketType->descriptions !!}</p>
                        <a href="/" class="btn btn-primary">Use</a>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="d-flex justify-content-center">
            {{ $userTickets->links() }}
        </div>
    </div>
@endsection
