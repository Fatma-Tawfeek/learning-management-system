@extends('frontend.dashboard.master')

@section('content')

<div class="tab-pane fade show active" id="edit-profile" role="tabpanel" aria-labelledby="edit-profile-tab">
    <div class="setting-body">
        <h3 class="fs-17 font-weight-semi-bold pb-4">Edit Profile</h3>
        <div class="media media-card align-items-center">
            <div class="media-img media-img-lg mr-4 bg-gray">
                <img class="mr-3" src="{{ Auth::user()->photo ? asset('uploads/images/user/' . Auth::user()->photo) : asset('uploads/images/user/no_image.png') }}" alt="avatar image">
            </div>
            <div class="media-body">
                <div class="file-upload-wrap file-upload-wrap-2">
                    <input type="file" name="image" class="multi file-upload-input with-preview">
                    <span class="file-upload-text"><i class="la la-photo mr-2"></i>Upload a Photo</span>
                </div><!-- file-upload-wrap -->
                <p class="fs-14">Max file size is 2MB, Minimum dimension: 200x200 And Suitable files are .jpg & .png</p>
            </div>
        </div><!-- end media -->
        <form method="post" action="{{ route('user.profile.update') }}" enctype="multipart/form-data" class="row pt-40px">
            @csrf
            @method('PUT')
            <div class="input-box col-lg-6">
                <label class="label-text">Name</label>
                <div class="form-group">
                    <input class="form-control form--control" type="text" name="name" value="{{ $userData->name }}">
                    <span class="la la-user input-icon"></span>
                </div>
            </div><!-- end input-box -->
            <div class="input-box col-lg-6">
                <label class="label-text">Username</label>
                <div class="form-group">
                    <input class="form-control form--control" type="text" name="username" value="{{ $userData->username }}">
                    <span class="la la-user input-icon"></span>
                </div>
            </div><!-- end input-box -->
            <div class="input-box col-lg-6">
                <label class="label-text">Email</label>
                <div class="form-group">
                    <input class="form-control form--control" type="email" name="email" value="{{ $userData->email }}">
                    <span class="la la-envelope input-icon"></span>
                </div>
            </div><!-- end input-box -->
            <div class="input-box col-lg-12">
                <label class="label-text">Phone</label>
                <div class="form-group">
                    <input class="form-control form--control" type="text" name="phone" value="{{ $userData->phone }}">
                    <span class="la la-phone input-icon"></span>
                </div>
            </div><!-- end input-box -->
            <div class="input-box col-lg-12">
                <label class="label-text">Address</label>
                <div class="form-group">
                    <textarea class="form-control form--control user-text-editor pl-3" name="address">{{ $userData->address }}</textarea>
                </div>
            </div><!-- end input-box -->
            <div class="input-box col-lg-12 py-2">
                <button class="btn theme-btn" type="submit">Save Changes</button>
            </div><!-- end input-box -->
        </form>
    </div><!-- end setting-body -->
</div><!-- end tab-pane -->

@endsection