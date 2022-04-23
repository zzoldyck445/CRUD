@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>{{ __('Show details') }}</strong></div>
                <div class="card-body">

                            <span><b>Name</b></span>
                            <span>{{$post ->name}}</span><br>
                            <span><b>Course</b></span>
                            <span>{{$post->course}}</span><br>
                            <span><b>Age</b></span>
                            <span>{{$post->age}}</span>
                            <br><br>
                    
                        <a class="btn btn-cancel" href="{{ route ('home') }}">Back</a>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection