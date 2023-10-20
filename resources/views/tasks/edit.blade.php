@extends('layouts.app')

@section('content')
    <div class="container p-5 shadow" style="border-radius: 20px">
        <div class="row mb-3">
            <div class="col">
                <h1>Edit Task</h1>
            </div>
        </div>

        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <div class="col">
                    <label for="title" class="form-label">
                        <h5>Title</h5>
                    </label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $task->title }}"
                        required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="title" class="form-label">
                        <h5>Description</h5>
                    </label>
                    <textarea name="description" class="form-control" id="description" rows="3" required>{{ $task->description }}</textarea>

                </div>
            </div>
            <div class="row mb-3">
                <div class="col d-flex justify-content-between align-items-center">
                    <button type="submit" class="btn btn-success">Update Task</button>
                    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back To Task List</a>
                </div>
            </div>
        </form>
        

    </div>
@endsection
