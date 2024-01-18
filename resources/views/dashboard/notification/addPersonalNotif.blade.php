@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create new Personal Notif</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/tickets" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="type_name" class="form-label">Type Name</label>
                <input type="text" class="form-control @error('type_name') is-invalid @enderror" id="type_name"
                    name="type_name" required autofocus value="{{ old('type_name') }}">
                @error('type_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Ticket Price</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                    name="price" required value="{{ old('price') }}">
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
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
