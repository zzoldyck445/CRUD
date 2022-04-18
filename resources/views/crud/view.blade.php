@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Show details') }}</div>
                <div class="class-body">
                    <!-- <form method="POST" action="/home/{{ $post->id }}" > -->
                        <!-- @csrf -->

                    
                            <span><b>Name</b></span>
                            <span>{{$post ->name}}</span>
                            <span><b>Course</b></span>
                            <span>{{$post->course}}</span>
                            <span><b>Age</b></span>
                            <span>{{$post->age}}</span>
                            <br>
                    
                    
                        <a href="{{ route ('home') }}">Back</a>
                    <!-- </form> -->
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection