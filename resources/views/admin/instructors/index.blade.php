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
                    <li class="breadcrumb-item active" aria-current="page">All instructors</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <a type="button" href="{{ route('admin.categories.create') }}" class="btn btn-primary px-5">Add Instructor</a>
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
                            <th>Email</th>
                            <th>Image</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($instructors as $key => $instructor) :
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td><img src="{{ asset( 'uploads/images/instructor/' . $instructor->photo) }}" alt="image" width="50" height="50"></td>
                                <td>{{ $instructor->name }}</td>
                                <td>{{ $instructor->email }}</td>
                                <td>{{ $instructor->phone }}</td>
                                <td>{{ $instructor->address }}</td>
                                <td>@if($instructor->status == 1)
                                    <span class="badge rounded-pill bg-success">Active</span>
                                @else
                                    <span class="badge rounded-pill bg-danger">Inactive</span>
                                    
                                @endif</td>
                                <td>
                                    <div class="form-check-danger form-check form-switch ml-1">
                                        <input 
                                        class="form-check-input status-toggle" 
                                        type="checkbox" 
                                        id="flexSwitchCheckCheckedDanger"  
                                        style="transform: scale(1.5);"
                                        data-user-id = "{{ $instructor->id }}"
                                        {{ $instructor->status ? 'checked' : '' }}>
                                    </div>
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

@push('scripts')

<script>
    $(document).ready(function(){
        $('.status-toggle').change(function(){
            var status = $(this).prop('checked') == true ? 1 : 0;
            var user_id = $(this).data('user-id');
            $.ajax({
                method: "POST",
                url: "{{ route('admin.update.user.status') }}",
                data: {'status': status,
                 'user_id': user_id,
                 _token: '{{ csrf_token() }}'},
                success: function(response){
                    toastr.success(response.message);
                },
                error: function(err){
                    
                }
            });
        });
    });

</script>
    
@endpush