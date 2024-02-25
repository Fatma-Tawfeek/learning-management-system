@extends('instructor.master')

@section('content')

<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Course</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-primary">Settings</button>
                <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	
                    <a class="dropdown-item" href="javascript:;">Action</a>
                    <a class="dropdown-item" href="javascript:;">Another action</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                </div>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="mb-4">Edit Course</h5>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form class="row g-3" id="myForm" action="{{ route('instructor.courses.update', $course->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3 col-sm-6">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $course->name }}">
                        </div>
                        <div class="mb-3 col-sm-6">
                            <label for="name" class="col-form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $course->title }}">
                        </div>
                        <div class="mb-3 col-sm-6">
                            <label for="image" class="col-form-label">Category</label>
                            <select class="form-select mb-3" aria-label="Default select example" name="category_id">
                                <option selected="">Select Category</option>
                                @foreach ($categories as $category )
                                    <option value="{{ $category->id }}" {{ $course->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-sm-6">
                            <label for="image" class="col-form-label">Subcategory</label>
                            <select class="form-select mb-3" aria-label="Default select example" name="subcategory_id">
                                <option selected="">Select Subcategory</option>
                                @foreach ($subcategories as $subcategory )
                                    <option value="{{ $subcategory->id }}" {{ $course->subcategory_id == $subcategory->id ? 'selected' : '' }}>{{ $subcategory->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-sm-4">
                            <label for="selling_price" class="col-form-label">Selling Price</label>
                            <input type="text" class="form-control" id="selling_price" name="selling_price" value="{{ $course->selling_price }}">
                        </div>
                        <div class="mb-3 col-sm-4">
                            <label for="dicount_price" class="col-form-label">Discount Price</label>
                            <input type="text" class="form-control" id="discount_price" name="discount_price" value="{{ $course->discount_price }}">
                        </div>
                        <div class="mb-3 col-sm-4">
                            <label for="duration" class="col-form-label">Duration</label>
                            <input type="text" class="form-control" id="duration" name="duration" value="{{ $course->duration }}">
                        </div>
                        <div class="mb-3 col-sm-6">
                            <label for="label" class="col-form-label">Label</label>
                            <select class="form-select mb-3" aria-label="Default select example" name="label" >
                                <option selected="" value="">Select label</option>
                                <option value="begninner" {{ $course->label == 'begninner' ? 'selected' : '' }}>Begninner</option>
                                <option value="intermediate" {{ $course->label == 'intermediate' ? 'selected' : '' }}>Intermediate</option>
                                <option value="advance" {{ $course->label == 'advance' ? 'selected' : '' }}>Advance</option>
                            </select>
                        </div>
                        <div class="mb-3 col-sm-6">
                            <label for="resources" class="col-form-label">Resources</label>
                            <input type="text" class="form-control" id="resources" name="resources" value="{{ $course->resources }}">
                        </div>
                        <div class="row mb-3">
                            <div class="form-group col-sm-12">
                                <label for="prerequisites" class="col-form-label">Prerequisites</label>
                                <textarea class="form-control" id="prerequisites" name="prerequisites" rows="3">{{ $course->prerequisites }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-group col-sm-12">
                                <label for="description" class="col-form-label">Description</label>
                                <textarea class="form-control" id="myeditorinstance" name="description" rows="3">{!! $course->description !!}</textarea>
                            </div>
                        </div>
                        <p>Course Goals</p> 
                        <!--   //////////// Goal Option /////////////// -->

                        <div class="row add_item">
                        
                        <div class="col-md-6">
                            <div class="mb-3">
                                    <label for="goals" class="form-label"> Goals </label>
                                    <input type="text" name="course_goals[]" id="goals" class="form-control" placeholder="Goals ">
                            </div>
                        </div>
                        <div class="form-group col-md-6" style="padding-top: 30px;">
                            <a class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> Add More..</a>
                        </div>
                        </div> <!---end row-->

                        <div style="visibility: hidden">
                            <div class="whole_extra_item_add" id="whole_extra_item_add">
                               <div class="whole_extra_item_delete" id="whole_extra_item_delete">
                                  <div class="container mt-2">
                                     <div class="row">
                                       
                                        
                                        <div class="form-group col-md-6">
                                           <label for="goals">Goals</label>
                                           <input type="text" name="course_goals[]" id="goals" class="form-control" placeholder="Goals  ">
                                        </div>
                                        <div class="form-group col-md-6" style="padding-top: 20px">
                                           <span class="btn btn-success btn-sm addeventmore"><i class="fa fa-plus-circle">Add</i></span>
                                           <span class="btn btn-danger btn-sm removeeventmore"><i class="fa fa-minus-circle">Remove</i></span>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>   
                        <div class="col-sm-6">
                            <div class="form-check-primary form-check form-switch">
                                <input 
                                class="form-check-input mt-2 mr-1" 
                                type="checkbox" 
                                value="1"
                                name="certification"
                                id="have_certification"  
                                style="transform: scale(1.5);"
                                {{ $course->certification == 1 ? 'checked' : '' }}
                              >
                              <label for="certification" class="col-form-label text-lg">Have Certification</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check-primary form-check form-switch">
                                <input 
                                class="form-check-input mt-2 mr-1" 
                                type="checkbox" 
                                value="1"
                                name="bestseller"
                                id="bestseller"  
                                style="transform: scale(1.5);"
                                {{ $course->bestseller == 1 ? 'checked' : '' }}
                              >
                              <label for="bestseller" class="col-form-label text-lg">Bestseller</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check-primary form-check form-switch">
                                <input 
                                class="form-check-input mt-2 mr-1" 
                                type="checkbox" 
                                value="1"
                                name="featured"
                                id="featured"  
                                style="transform: scale(1.5);"
                                {{ $course->featured == 1 ? 'checked' : '' }}
                              >
                              <label for="featured" class="col-form-label text-lg">Featured</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check-primary form-check form-switch">
                                <input 
                                class="form-check-input mt-2 mr-1" 
                                type="checkbox" 
                                value="1"
                                name="highestrated"
                                id="highestrated"  
                                style="transform: scale(1.5);"
                                {{ $course->highestrated == 1 ? 'checked' : '' }}
                              >
                              <label for="highestrated" class="col-form-label text-lg">Highestrated</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!--end row-->
</div>

<div class="page-content">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('instructor.courses.update.image', $course->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="form-group col-md-6">
                        <label for="image" class="col-form-label">Image</label>
                        <input class="form-control" name="image" type="file" id="image">
                    </div>
                    <div class="form-group col-md-6">
                        <img src="{{ asset($course->image)}}" name="image" id="showImage" alt="course" class="rounded-circle p-1 bg-primary mt-2" width="80" height="80">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-9">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('instructor.courses.update.video', $course->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="form-group col-md-6">
                        <label for="image" class="col-form-label">Intro Video</label>
                        <input class="form-control" name="video" type="file" id="video" accept="video/mp4, video/webm">
                    </div>
                    <div class="form-group col-md-6">
                        <video width="300" height="130" controls>
                        <source src="{{ asset($course->video)}}" type="video/mp4">
                        </video>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-9">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="page-content">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('instructor.courses.update.goal', $course->id) }}" method="post">
                @csrf
                @method('PUT')
                <p>Course Goals</p> 
                <!--   //////////// Goal Option /////////////// -->
                @foreach ($course->goals as $key => $goal)
                    
                <div class="row add_item">
                    <div class="whole_extra_item_delete" id="whole_extra_item_delete">
                            <div class="container mt-2">
                               <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="goals" class="col-form-label"> Goals </label>
                                    <input type="text" name="course_goals[]" id="goals" class="form-control" value="{{ $goal->goal }}">
                                </div>
                                <div class="form-group col-md-6" style="padding-top: 30px;">
                                    <a class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> Add More..</a>
                                    <span class="btn btn-danger btn-sm removeeventmore"><i class="fa fa-minus-circle">Remove</i></span>
                                </div>
                        </div>
                      </div>
                     </div>
                    </div>
                    
                @endforeach
                <div class="row">
                    <div class="col-sm-9">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@push('scripts')
    <script>
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });

    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                name: {
                    required : true,
                }, 
                image: {
                    required : true,
                }, 
                
            },
            messages :{
                name: {
                    required : 'Please Enter Category Name',
                }, 
                image: {
                    required : 'Please Upload Category Image',
                },                  

            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>

<script type="text/javascript">
        
    $(document).ready(function(){
        $('select[name="category_id"]').on('change', function(){
            var category_id = $(this).val();
            if (category_id) {
                $.ajax({
                    url: "{{ url('instructor/subcategory/ajax') }}/"+category_id,
                    type: "GET",
                    dataType:"json",
                    success:function(data){
                        $('select[name="subcategory_id"]').html('');
                        var d =$('select[name="subcategory_id"]').empty();
                        $.each(data, function(key, value){
                            $('select[name="subcategory_id"]').append('<option value="'+ value.id + '">' + value.name + '</option>');
                        });
                    },

                });
            } else {
                alert('danger');
            }
        });
    });

</script>

<script type="text/javascript">
    $(document).ready(function(){
       var counter = 0;
       $(document).on("click",".addeventmore",function(){
             var whole_extra_item_add = $("#whole_extra_item_add").html();
             $(this).closest(".add_item").append(whole_extra_item_add);
             counter++;
       });
       $(document).on("click",".removeeventmore",function(event){
             $(this).closest("#whole_extra_item_delete").remove();
             counter -= 1
       });
    });
 </script>

@endpush