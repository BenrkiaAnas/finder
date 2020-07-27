@extends('layouts.dashboard')

@section('content')

    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <!--<div class="page-title-icon">
                                                                                                        <i class="pe-7s-graph text-success">
                                                                                                            </i>
                                                                                                    </div>-->
                        <div>Create User

                        </div>
                    </div>
                </div>
            </div>

            <div class="main-card mb-3 card">
                <div class="card-body">
                    <!--<h5 class="card-title"></h5>-->
                    <form class="">
                        <div class="position-relative row form-group">
                            <label for="firstname" class="col-sm-2 col-form-label">First Name</label>
                            <div class="col-sm-10">
                                <input name="text" id="firstname" placeholder="" type="texr"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="lastname" class="col-sm-2 col-form-label">Last Name</label>
                            <div class="col-sm-10">
                                <input name="text" id="lastname" placeholder="" type="texr"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="exampleEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input name="email" id="exampleEmail" placeholder="" type="email"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="examplePassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input name="password" id="examplePassword" placeholder=""
                                    type="password" class="form-control">
                            </div>
                        </div>
                        <div class="position-relative row form-group">
                            <label for="password_confirmation" class="col-sm-2 col-form-label">Confirme Password</label>
                            <div class="col-sm-10">
                                <input name="password_confirmation" id="password_confirmation" placeholder=""
                                    type="password" class="form-control">
                            </div>
                        </div>
                      
                        <div class="position-relative row form-check">
                            <div class="col-sm-10 offset-sm-2 btn-form-custom">
                                <button class="btn btn-secondary">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="app-wrapper-footer">
            <div class="app-footer">
                <div class="app-footer__inner">
                    <div class="app-footer-left">
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    Footer Link 1
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    Footer Link 2
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="app-footer-right">
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    Footer Link 3
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    <div class="badge badge-success mr-1 ml-0">
                                        <small>NEW</small>
                                    </div>
                                    Footer Link 4
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
