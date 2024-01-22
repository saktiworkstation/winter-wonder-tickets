@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create new General Notif</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/notifications/store-general-notif" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                @error('message')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="message" type="hidden" name="message" value="{{ old('message') }}">
                <trix-editor input="message"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary">Create Ticket Type</button>
        </form>
    </div>
@endsection
