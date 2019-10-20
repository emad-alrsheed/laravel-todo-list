@extends('layouts.layout')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Create Task</h1>
        <form method="post">
            @csrf
            <div class="form-group">
                <label for="name">Task</label>
                <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter a task...">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
