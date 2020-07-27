@extends('layouts.dashboard')

@section('content')

    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">

                    <div>Welcome {{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}

                    </div>
                </div>

            </div>
        </div>

    </div>



@endsection
