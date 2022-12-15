@extends('base')

@include('navbar')



@section('content')
<div class="container m-3">
    <div class="card">
        <div class="card-header">
            <h1><b><i>Activity Log</i></b></h1>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead class="table table-striped bg-primary">
                    <tr>
                        <th>Timestamps</th>
                        <th>Log Entry</th>
                    </tr>
                </thead>
                <tbody class="bg-light">
                    @foreach($logs as $log)
                    <tr>
                        <td>{{$log->created_at}}</td>
                        <td>{{$log->log_entry}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

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