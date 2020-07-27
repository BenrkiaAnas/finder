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
                    <div>Facebook Interest

                    </div>
                </div>
            </div>
        </div>

        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Search Interest</h5>
                <form method="GET" action="{{ url('facebook/interest') }}">
                    <div class="form-row">
                        <div class="col-md-10">
                            <div class="position-relative form-group">
                                <input name="q" id="q" placeholder="Search Interest" type="text" class="form-control"
                                    value="{{ $search }}" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="position-relative form-group">
                                <button class="mt-2 btn btn-primary custom-btn">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
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
                                        <th>Interest</th>
                                        <th>Audience</th>
                                        <th>Topic</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($data as $interest)


                                        <tr>
                                            <td>{{ $interest->name }}</td>
                                            <td>{{ $interest->audience_size }}</td>
                                            @if(isset($interest->topic) && !empty($interest->topic))
                                                <td>{{ $interest->topic }}</td>
                                            @else
                                                <td></td>
                                            @endif

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
