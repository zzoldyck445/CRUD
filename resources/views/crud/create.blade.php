@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Student Record') }}</div>
                <div class="card-body">
                    <form method="POST" action="/home">

                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="course" class="form-label">Course</label>
                        <input type="text" class="form-control" id="course" name="course">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" id="age" name="age" min="0">
                    </div>
                    <!-- <div class="mb-3">
                        <label class="radio-inline"><input type="radio" name="sex" value="Male">Male</label>
                        <label class="radio-inline"><input type="radio" name="sex" value="Female">Female</label>
                    </div> -->
                    <div class="mb-3">
                        <button type="submit" class="btn btn-submit" >Add</button>
                        <a href="{{route ('home') }}" class="btn btn-cancel" >Cancel</a>
                    </div>
                    
                    
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
