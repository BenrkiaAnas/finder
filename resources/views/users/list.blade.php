@extends('layouts.dashboard')

@section('content')

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
                            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)

                                        <tr>
                                            <td>{{ $user->firstname }}</td>
                                            <td>{{ $user->lastname }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td class="text-center"><a href="{{ url('/user/edit/' . $user->user_id) }}"><i
                                                        class="metismenu-icon pe-7s-pen icon-action" title="Edit"></i></a>
                                            </td>
                                        </tr>

                                    @endforeach

                                </tbody>

                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
