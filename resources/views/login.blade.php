@extends('main')
{{--@section('title','Login')--}}


@section('content')

    <div class="container-fluid">
<div class="row">
    <div class="col-md-8">
        @include('home')
    </div></br></br>
    <div class="col-md-4">
        <div class="panel panel-success">
            <div class="panel-heading"> Login<span class="glyphicon glyphicon-user"></span> </div>
            <div class="panel-body ">
                <h1 style=font-size:150%;>Enter your Username and Password</h1></br>
                {!! form($form) !!}
            </div>
        </div>
    </div>
</div>
    </div>
 @endsection
