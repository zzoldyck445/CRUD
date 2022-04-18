@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit') }}</div>
                <div class="card-body">
                    <form method="POST" action="/home/{{ $post->id }}" >
                        @method('PUT')

                        @csrf
                        <div class="row">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$post->name}}" >
                            </div>
                            <div class="mb-3">
                                <label for="course" class="form-label">Course</label>
                                <input type="text" class="form-control" id="course" name="course" value="{{$post->course}}">
                            </div>
                            <div class="mb-3">
                                <label for="age" class="form-label">Age
                                <input type="number" class="form-control" id="age" min="0" name="age" value="{{$post->age}}">
                                </label>
                                <!-- <input type="number" class="form-control" id="age" min="0" value="{{$post->age}}"> -->
                            </div>
                            <!-- <div class="mb-3">
                                <label for="male" class="radio-inline"><input type="radio" name="sex" value="Male">Male</label>
                                <label for="female"class="radio-inline"><input type="radio" name="sex" value="Female">Female</label>
                            </div> -->
                            <div class="mb-3">
                            <button  class="btn btn-submit">Update</button>
                            <a class="btn btn-cancel" href="{{ route ('home') }}">Cancel</a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
