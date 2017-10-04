@extends('layouts.app')

@section('content')
<div class="container" style="height: 100vh; padding-top: 10%;">
    <div class="card card-default mx-auto" style="width: 60%;">
        <div class="card-header text-dark">Admin Dashboard</div>

        <div class="card-body">
            @component('components.who')
            @endcomponent
        </div>
    </div>
</div>
@endsection
