@extends('layouts.app')

@section('content')

<style>
    .row {
        margin-bottom: 15px;
    }

    .restaurants {
        width: 100%;
        display: table;
    }

    .restaurant {
        text-align: center;
        margin-bottom: 15px;
        display: table-cell;
    }

    .card-img-top {
        height: 250px;
        object-fit: cover;
        transition: transform .2s;
    }

    .login {
        text-align: right;
    }

    .addbusinessbutton {
        width: 100%;
    }
</style>


<div class="container">
<div class="login">
        <div class="row">
            <div class="col-lg-12" data-aos="fade-right">
                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <a href="{{ url('/') }}">Back to Front Page</a>
                    @endauth
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="heading">
        <div class="row">
            <div class="col-lg-12" data-aos="fade-right">
                <div class="text-center">
                    <h1 class="title">
                        Online Reservations
                    </h1>
                    <h2 class="subtitle">
                        Your businesses
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="addobject">
        <div class="row justify-content-center">
            <div class="col-lg-3" data-aos="fade-right">
                <a href="{{ url('/addbusiness')}}" class="btn btn-success addbusinessbutton">Add business</a>
            </div>
        </div>
    </div>
    <div class="restaurants">
        <div class="row justify-content-center">
            @foreach ($restaurants as $restaurant)
            <div class="col-lg-4" data-aos="fade-right">
                <div class="card restaurant">
                    <img class="card-img-top" src="{{ $restaurant->imagesource }}" alt="Image" onerror='if (this.src != "https://healthyfoodiemanon.com/wp-content/themes/nucleare-pro/images/no-image-box.png") this.src = "https://healthyfoodiemanon.com/wp-content/themes/nucleare-pro/images/no-image-box.png";'>
                    <div class="card-body">
                        <h5 class="card-title">{{ $restaurant->name }}</h5>
                        <p class="card-text">{{ $restaurant->description }}</p>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

</div>