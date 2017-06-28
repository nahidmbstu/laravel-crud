@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                
 
                
                <a href="{{url('/make_list')}}"><h2>Create a to do list</h2></a>
                <a href="{{url('/show_list')}}"><h2>Task list</h2></a>

                
                            </div>
        </div>
    </div>
</div>
@endsection
