@extends('layouts.app')
@section('content')
    <div>
        <div class="card" style="width: 18rem;">
            <img src="./Images/card.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>

    <marquee behavior="scroll" direction="left" scrollamount="5">
        Welcome to My Laravel Website! 🚀
    </marquee>

@endsection
