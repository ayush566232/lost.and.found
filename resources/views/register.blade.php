@extends('main')
@section('title','Register')

@section('content')

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-success">
                    <div class="panel-heading">Register<span class="glyphicon glyphicon-user"></span> </div>
                    <div class="panel-body">
                        {!! form($form) !!}
                    </div>
                </div>
            </div>




        </div>
    </div>
@endsection