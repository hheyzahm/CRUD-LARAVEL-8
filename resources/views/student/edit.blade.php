
@extends('student.layout')
@section('content')

<div class="container">
    <div class="pull-right" style="margin: 12px; ">
            <a href="{{url('students')}}" class="btn btn-primary">Back</a>
    </div>
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit & Update Student
                        
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-student/'.$student->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Student Name</label>
                            <input type="text" name="name" value="{{$student->name}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Email</label>
                            <input type="text" name="email" value="{{$student->email}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Course</label>
                            <input type="text" name="course" value="{{$student->course}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Section</label>
                            <input type="text" name="section" value="{{$student->section}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Student</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection