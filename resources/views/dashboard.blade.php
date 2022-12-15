@extends('base')

@extends('navbar')

@section('title', 'Dashboard')

@section('content')
    <div class="container m-3">
        <h1 class="text-info"><b><i>Dashboard</i></b></h1>
        <div class="card col-sm-7 offset-sm-3 border border-light mt-5">
            <div class="card-header">
                <h1 class="text-center">Idols</h1>

                <p>An idol is a famous person who is greatly admired or loved.</p>
            </div>
        </div>
    </div>

@endsection

<style>
    img {
        width: 85%;
    }

    body{
        background-image: url('images/cover.jpg');
        background-repeat: repeat;
        bacground-size: cover;
        background-position: cover;
        height: 100%;
    }
</style>
