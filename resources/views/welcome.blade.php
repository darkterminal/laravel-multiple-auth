@extends('layouts.app')

@section('content')
    
    <div class="container" style="height: 100vh; padding-top: 20%;">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <h2>Laravel 5.5 with Bootstrap 4 Beta | Multiple Auth</h2>
                <p>Created By: fscodexxx and trojan302</p>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <h4><i class="fa fa-wifi" aria-hidden="true"></i> User Status</h4>
                @component('components.who')
                @endcomponent
            </div>
        </div>

    </div>

@endsection