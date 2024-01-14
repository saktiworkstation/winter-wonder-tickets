@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Tickets Report</h1>
    </div>

    {{-- Ticket --}}
    <div class="row pt-4 mt-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ticket Name</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Purchase Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($userTickets as $ticket)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $ticket->ticketType->type_name }}</td>
                        <td>{{ $ticket->quantity }}</td>
                        <td>{{ $ticket->total_price }}</td>
                        @if ($ticket->status == 0)
                            <td class="text-primary">Queue</td>
                        @elseif($ticket->status == 1)
                            <td class="text-success">Success</td>
                        @else
                            <td class="text-danger">Canceled</td>
                        @endif
                        <td>{{ $ticket->purchase_date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
