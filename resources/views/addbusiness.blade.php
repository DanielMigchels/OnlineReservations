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

    .card-img-top:hover {
        transform: scale(1.25);
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
                        Create a new business
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="addbusinessform">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>