@extends('layouts.home')

@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Application</div>

                <div class="panel-body">
                    You are logged out please <a href="{{ url('login') }}">login</a> !
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
