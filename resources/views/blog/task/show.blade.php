@extends('template.master')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Detail Task</h3>
                        <h6 class="font-weight-normal mb-0">Detail task data
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin strecth-card">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <h5>ID:</h5>
                            <p>{{ $task->id }}</p>
                        </div>
                        <div class="form-group">
                            <h5>Name:</h5>
                            <p>{{ $task->name }}</p>
                        </div>
                        <div class="form-group">
                            <h5>Assigned to:</h5>
                            <p>{{ $task->assigned_to }}</p>
                        </div>
                        <div class="form-group">
                            <h5>Due Date:</h5>
                            <p>{{ $task->due_date }}</p>
                        </div>
                        <div class="form-group">
                            <h5>Description:</h5>
                            <p>{{ $task->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
