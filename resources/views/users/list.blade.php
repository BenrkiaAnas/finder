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
                        <div>Users List

                        </div>
                    </div>
                </div>
            </div>

            <div class="main-card mb-3 card">
                <div class="card-body">
                    <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4">

                        <div class="row">
                            <div class="col-sm-12">
                                <table style="width: 100%;" id="example"
                                    class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>

                                </table>
                            </div>
                        </div>

                    </div>
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
