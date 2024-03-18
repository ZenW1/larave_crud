@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ session('success') }}</h1>
        <h1>{{ session('validate') }}</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Priority</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($task as $tasks)
                    <tr>
                        <th scope="row">{{ $tasks->id }}</th>
                        <td>{{ $tasks->title }}</td>
                        <td>{{ $tasks->description }}</td>
                        <td>{{ $tasks->priority }}</td>
                        <td>{{ $tasks->status }}</td>
                        <td>
                                <form action="{{ route('task.delete', $tasks->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                        </td>
                        <td>

                            <a href="{{ route('task.update', $tasks->id) }}" class="btn btn-primary">Edit</a>

                        </td>

                    </tr>
                @endforeach


            </tbody>
        </table>
        <a href="{{ url('/task/create') }}">Add more</a>

    </div>
@endsection
