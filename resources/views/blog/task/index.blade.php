@extends('template.master')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Task List</h3>
                        <h6 class="font-weight-normal mb-0">All task data are here!</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin strecth-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <div class="d-flex justify-content-between align-items-center">
                                Tasks
                                <a href="{{ route('blog.task.create') }}" class="btn btn-primary">Create +</a>
                            </div>
                        </h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Assigned to</th>
                                        <th>Due Date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tasks as $key => $task)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td><a href="{{ route('blog.task.show', [$task->id]) }}">{{ $task->name }}</a></td>
                                            <td>{{ $task->assigned_to }}</td>
                                            <td>{{ $task->due_date }}</td>
                                            <td>
                                                <a href="{{ route('blog.task.show', [$task->id]) }}">Detail</a>
                                                <a href="{{ route('blog.task.edit', [$task->id]) }}">Edit</a>
                                                <a href="{{ route('blog.task.delete', [$task->id]) }}">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
