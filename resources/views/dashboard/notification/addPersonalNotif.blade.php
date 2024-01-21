@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create new Personal Notif</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/tickets" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="user_id" class="form-label">Message To : </label>
                <select class="form-select" name="user_id" id="user">
                    @foreach ($users as $user)
                        @if (old('user_id') == $user->id)
                            <option value="{{ $user->id }}" selected>{{ $user->name }}</option>
                        @else
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endif
                    @endforeach
                </select>
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
