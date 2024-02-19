@extends('admin.master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All SubCategories</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <a type="button" href="{{ route('admin.subcategories.create') }}" class="btn btn-primary px-5">Add SubCategory</a>
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
                            <th>Name</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subcategories as $key => $subcategory) :
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $subcategory->category->name }}</td>
                                <td>{{ $subcategory->name }}</td>
                                <td>
                                    <a href="{{ route('admin.subcategories.edit', $subcategory) }}" class="btn btn-success px-5">Edit</a>
                                    <a href="{{ route('admin.subcategories.destroy', $subcategory) }}" class="btn btn-danger px-5" id="delete">Delete</a>
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