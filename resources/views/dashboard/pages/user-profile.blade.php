@extends('dashboard.default')

@section('title', 'Saicel dashboard')

@section('dashboardContent')
    <!-- Navbar -->

    @php
        $currentUser = $currentUserData;
    @endphp

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-danger">
                            <div class="float-left">
                                <a><span class="mr-2 custom-material-icon" style="line-height: 4">
                                        <img src="./img/Group 1380.png" /> </span><span>Edit Profile</span></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">First Name</label>
                                            <input type="text" class="form-control"
                                                value="{{ $currentUser->first_name }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Last Name</label>
                                            <input type="text" class="form-control"
                                                value="{{ $currentUser->last_name }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Email address</label>
                                            <input type="email" class="form-control" value="{{ $currentUser->email }}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Phone</label>
                                            <input type="text" class="form-control" value="{{ $currentUser->phone }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-6">
                                        <div class="form-group profile-upload">
                                            <div class="file-field">
                                                <div class="mb-4">
                                                    <img src="{{ $currentUser->avatar }}"
                                                        class="rounded-circle z-depth-1-half avatar-pic"
                                                        alt="example placeholder avatar" />
                                                </div>
                                                <div class="d-flex justify-content-left">
                                                    <div class="btn-mdb-color btn-rounded float-left">
                                                        <span class="ml-3">Add photo</span>
                                                        <input type="file" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 profile-save-btn">
                                        <button type="submit" class="btn btn-primary">
                                            Save
                                        </button>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-profile">
                        <div class="card-avatar">
                            <a href="javascript:;">
                                <img class="img" src="{{ $currentUser->avatar }}" />
                            </a>
                        </div>
                        <div class="card-body">
                            <h6 class="card-category text-gray">
                                {{ $currentUser->name }}
                            </h6>
                            <h4 class="card-title">Admin</h4>
                            <span class="card-description pt-3">
                                <p>{{ $currentUser->email }}</p>
                                <p>{{ $currentUser->phone }}</p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <div class="float-left">
                                <a><span class="mr-2 custom-material-icon" style="line-height: 4">
                                        <img src="./img/Group 1380.png" /> </span><span>Edit Profile</span></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Current Password</label>
                                            <input type="password" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">New Password</label>
                                            <input type="password" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">New Password</label>
                                            <input type="password" class="form-control" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-5">
                                    <div class="col-md-12 profile-save-btn">
                                        <button type="submit" class="btn btn-primary">
                                            Save
                                        </button>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
