@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Notifications</h1>
    </div>

    {{-- Ticket --}}
    <div class="row pt-4 mt-3">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @foreach ($notifications as $notif)
            @if ($notif->user_id == auth()->user()->id)
                <div class="col-md-4 py-3">
                    <div class="card">
                        <h5 class="card-header">From : {{ $notif->user->username }}</h5>
                        <div class="card-body">
                            <p>Send Date: {{ $notif->send_date }}</p>
                            <h5 class="card-title">Message : {!! $notif->message !!}</h5>
                        </div>
                    </div>
                </div>
            @elseif ($notif->status == '1')
                <div class="col-md-4 py-3">
                    <div class="card">
                        <h5 class="card-header">From : {{ $notif->user->username }}</h5>
                        <div class="card-body">
                            <p>Send Date: {{ $notif->send_date }}</p>
                            <h5 class="card-title">Message : {!! $notif->message !!}</h5>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach

        <div class="d-flex justify-content-center">
            {{ $notifications->links() }}
        </div>
    </div>
@endsection
