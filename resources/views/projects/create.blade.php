@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create a project</h1>
        <form method="post" action="/projects">
            @csrf
            <p>title: <input class="form-control" type="text" name="title"></p>
            Description:
            <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
            <button class="btn btn-outline-primary btn-block mt-1" type="submit">Create project</button>
        </form>
    </div>
@endsection
