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
                    <div>Facebook Token

                    </div>
                </div>
            </div>
        </div>

        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Facebook Token</h5>
                <form method="POST" action="{{ url('/facebook/token/update') }}">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-10">
                            <div class="position-relative form-group">
                                <input name="token" id="token" placeholder="Enter Token" type="text" class="form-control"
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="position-relative form-group">
                                <button type="submit" class="mt-2 btn btn-primary custom-btn">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection
