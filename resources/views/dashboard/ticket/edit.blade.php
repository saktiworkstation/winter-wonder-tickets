@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Ticket Type</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/tickets/edit/{{ $ticket->id }}" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf
            <h1>Ini {{ $ticket->type_name }}</h1>
            <div class="mb-3">
                <label for="type_name" class="form-label">Type Name</label>
                <input type="text" class="form-control @error('type_name') is-invalid @enderror" id="type_name"
                    name="type_name" required autofocus value="{{ old('type_name', $ticket->type_name) }}">
                @error('type_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Ticket Price</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                    name="price" required value="{{ old('price', $ticket->price) }}">
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="descriptions" class="form-label">Ticket Descriptions</label>
                @error('descriptions')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="descriptions" type="hidden" name="descriptions"
                    value="{{ old('descriptions', $ticket->descriptions) }}">
                <trix-editor input="descriptions"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary">Submit Edit Ticket Type</button>
        </form>
    </div>
@endsection
