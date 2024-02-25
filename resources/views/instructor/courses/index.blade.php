@extends('instructor.master')

@section('content')

<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Courses</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <a type="button" href="{{ route('instructor.courses.create') }}" class="btn btn-primary px-5">Add Course</a>
        </div>
    </div>
    <!--end breadcrumb-->
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $key => $course) :
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td><img src="{{ asset( $course->image) }}" alt="image" width="70" height="40"></td>
                                <td>{{ $course->name }}</td>
                                <td>{{ $course->category->name }}</td>
                                <td>{{ $course->selling_price }}</td>
                                <td>{{ $course->discount_price }}</td>
                                <td>
                                    <a href="{{ route('instructor.courses.edit', $course) }}" class="btn btn-success px-5">Edit</a>
                                    <a href="{{ route('instructor.courses.destroy', $course) }}" class="btn btn-danger px-5" id="delete">Delete</a>
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