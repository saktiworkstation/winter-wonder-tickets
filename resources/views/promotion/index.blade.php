@extends('layouts.main')

@section('container')
    <div class="container pt-4">
        <div class="row">
            <div class="col-md-8">
                <h3>All Promotions</h3>
                <form action="#" method="get">
                    <div class="col-md-5">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search promo" aria-label="Search promo"
                                aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                        </div>
                    </div>
                </form>
                <hr>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/img/room.jpg" class="img-fluid rounded-start" width="200px">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                <a href="#" class="btn btn-primary">Claim Promo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
