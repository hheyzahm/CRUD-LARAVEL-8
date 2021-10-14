
@extends('student.layout')
@section('content')

<div class="container">
    <div class="col-lg-12 margin-tob-12" style="margin: 12px; ">
       
            <a href="{{url('add-student')}}" class="btn btn-success">Create New Student</a>
       
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Fetch data </h4>
                </div>
                
                <div class="row">
  
                <div class="card-body">

                <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Course</th>
                                <th>Section</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($student as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->course }}</td>
                                <td>{{ $item->course }}</td>
                                <td>
                                    <a href="{{ url('edit-student/'.$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    
                                    <form action="{{route('student.destroy',$item->id) }}" method="post">

                                        
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
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
</div>

@endsection