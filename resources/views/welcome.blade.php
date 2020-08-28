@extends('layouts.app')
@section('content')

<style>
    .row {
        margin-bottom: 20px;
    }

    .welcome {
        margin-top: 100px;
    }

    .getstarted {
        width: 100%;
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

    button {}
</style>

<div class="container">
    <div class="welcome">
        <div class="row">
            <div class="col-lg-12"data-aos="fade-right">
                <div class="text-center">
                    <h1 class="title">
                        Online Reservations
                    </h1>
                    <h2 class="subtitle">
                        Secure reservations for everything for everyone
                    </h2>
                </div>
                <h3>
                    About us
                </h3>
                <p>
                    Eating out without sharing personal information on unsecured connections with
                    untrusted third party partners. Software is a big expense for small business
                    owners but has became very important in this day and age. The pandemic required
                    restaurants and bars to open up a reservation system online. Often this was done
                    the quick and easy way opening up many vulnerabilities. We are here to resolve that
                    with a free secure way of sending in reservations.
                </p>
                <h3>
                    Secure
                </h3>
                <p>
                    Instead of sending data unencrypted to a third party that isn't responsible with
                    personal data, we send the data encrypted to our secure atlas database in the cloud.
                    only accessable by the people who should have access to it. You and the restaurant.
                    This way we keep your data safe and you don't have to worry about anything other
                    then what to order!
                </p>
            </div>
        </div>
    </div>
    <div class="getstarted">
        <div class="row">
            <div class="col-lg-12" data-aos="fade-right">
                <h3>Let's get started!</h3>
                <input class="form-control" type="text" placeholder="Find Restaurant" aria-label="Find Restaurant">
            </div>
        </div>
    </div>

    <div class="restaurants">
        <div class="row">

            @foreach ($restaurants as $restaurant)
            <div class="col-lg-4" data-aos="fade-right">
                <div class="card restaurant">
                    <img class="card-img-top" src="{{ $restaurant->imagesource }}" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $restaurant->name }}</h5>
                        <p class="card-text">{{ $restaurant->description }}</p>
                        <a href="#" class="btn btn-success">Book a table</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    <div class="row">
        <div class="col-lg-12" data-aos="fade-right">
            <h3>Business owner?</h3>
            <p>
                Sign up for free and receive e-mails when user reserve a table. There you
                can accept or deny the reservation.
            </p>
            <div class="text-center">

                <button type="button" class="btn btn-secondary ">I am a Business owner</button>
            </div>
        </div>
    </div>
</div>