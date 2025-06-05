@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row m-3">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/bg.jpg') }}" class="card-img-top" alt="background-image">
                    <div class="card-body">
                        <h5 class="card-title">card1</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('Images/bg.jpg') }}" class="card-img-top" alt="flower-img">
                    <div class="card-body">
                        <h5 class="card-title">Card2</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('Images/bg.jpg') }}" class="card-img-top" alt="card-image">
                    <div class="card-body">
                        <h5 class="card-title">card3</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
