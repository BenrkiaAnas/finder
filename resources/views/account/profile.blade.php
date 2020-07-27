@extends('layouts.dashboard')

@section('content')

    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <!--<div class="page-title-icon">
                        <i class="pe-7s-graph text-success"></i>
                    </div>-->
                    <div>Profile

                    </div>
                </div>
            </div>
        </div>

        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">User name</h5>
                <form class="" method="POST" action="{{ url('/profile/update') }}">
                    @csrf
                    <div class="position-relative row form-group">
                        <label for="firstname" class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-10">
                            <input name="firstname" id="firstname" placeholder="" type="text" class="form-control"
                                value="{{ Auth::user()->firstname }}" autocomplete="off">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="lastname" class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-10">
                            <input name="lastname" id="lastname" placeholder="" type="text" class="form-control"
                                value="{{ Auth::user()->lastname }}" autocomplete="off">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="exampleEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input name="email" id="exampleEmail" placeholder="" type="email" class="form-control"
                                value="{{ Auth::user()->email }}" autocomplete="off">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="examplePassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input name="password" id="examplePassword" placeholder="" type="password" class="form-control"
                                autocomplete="off">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="password_confirmation" class="col-sm-2 col-form-label">Confirme Password</label>
                        <div class="col-sm-10">
                            <input name="password_confirmation" id="password_confirmation" placeholder="" type="password"
                                class="form-control" autocomplete="off">
                        </div>
                    </div>

                    <div class="position-relative row form-check">
                        <div class="col-sm-10 offset-sm-2 btn-form-custom">
                            <button type="submit" class="btn btn-secondary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection
