@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                </div>
            </div>
            <br>
                <div class="card-header"> Student List <a class="btn btn-submit d-inline-block" href="{{ url ('home/create') }}"><span class="iconify" data-icon="carbon:add-filled"></span> Add Student</a> </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>Name</th>
                            <th>Course</th>
                            <th>Age</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->name}}</td>
                                <td>{{$post->course}}</td>
                                <td>{{$post->age}}</td>
                                <td>
                                    
                                    <a class="btn btn-show d-inline-block" href="/home/{{$post->id}}/view"><span class="iconify" data-icon="carbon:view-filled"></span>View</a>
                                    <a class="btn btn-edit d-inline-block" href="/home/{{$post->id}}/edit"><span class="iconify" data-icon="akar-icons:edit"></span>Edit</a>
                                    <form class="d-inline-block" action="/home/{{$post->id}}" method="POST">
                                        @csrf

                                        @method('DELETE')

                                        <button class="btn btn-delete" ><span class="iconify" data-icon="fluent:delete-20-filled"></span>Delete</button>
                                        
                                    </form>
                                    
                                </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
        </div>
    </div>
</div>
@endsection
