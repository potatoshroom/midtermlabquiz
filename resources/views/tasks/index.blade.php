@extends('layouts.app')

@section('content')
@csrf   
    <div class="container p-5 shadow" style="border-radius: 20px">
        <div class="row mb-3">
            <div class="col">
                <h1>Task List</h1>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th colspan="2">Actions</th>
                        </tr>
                    </thead>
            </div>
        </div>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td style="word-wrap: break-word; word-break: break-all">

                        {{ $task->description }}

                    </td>
                    <td>
                        <a href="{{ route('tasks.edit', $task->id) }}">
                            <button class="btn btn-primary">Edit</button>
                        </a>

                    </td>
                    <td>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
        
            <a href="{{ route('tasks.create') }}"><button type="button" class="btn btn-success">Create New Task</button></a>
        
    </div>
    
@endsection
