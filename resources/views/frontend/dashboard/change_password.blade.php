@extends('frontend.dashboard.master')

@section('content')

<div class="tab-pane fade show active" id="edit-profile" role="tabpanel" aria-labelledby="edit-profile-tab">
    <div class="setting-body">
        <h3 class="fs-17 font-weight-semi-bold pb-4">Change Password</h3>

        <form method="post" action="{{ route('user.password.update') }}" class="row pt-40px">
            @csrf
            @method('PUT')

            <div class="input-box col-lg-12">
                <label class="label-text">Old Password</label>
                <div class="form-group">
                    <input class="form-control form--control @error('old_password') is-invalid @enderror" type="password" name="old_password">
                    <span class="la la-user input-icon"></span>
                    @error('old_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div><!-- end input-box -->

            <div class="input-box col-lg-12">
                <label class="label-text">New Password</label>
                <div class="form-group">
                    <input class="form-control form--control @error('new_password') is-invalid @enderror" type="password" name="new_password">
                    <span class="la la-user input-icon"></span>
                    @error('new_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div><!-- end input-box -->

            <div class="input-box col-lg-12">
                <label class="label-text">Confirm New Password</label>
                <div class="form-group">
                    <input class="form-control form--control @error('new_password_confirmation') is-invalid @enderror" type="password" name="new_password_confirmation" >
                    <span class="la la-user input-icon"></span>
                    @error('new_password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div><!-- end input-box -->

            <div class="input-box col-lg-12 py-2">
                <button class="btn theme-btn" type="submit">Save Changes</button>
            </div><!-- end input-box -->
        </form>
    </div><!-- end setting-body -->
</div><!-- end tab-pane -->

@endsection