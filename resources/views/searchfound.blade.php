@extends('main')
@section('title','searchfound')
@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-7 col-md-offset-3">
                <div class="panel panel-success">
                    <div class="panel-heading">{{--<span class="glyphicon glyphicon-search"> --}} Search Found Item</span></div>

                    <div class="panel-body">
                        {!!form($form)!!}



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection