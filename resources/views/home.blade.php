@extends('layouts.app')

@section('content')
<div class="container pt-5">
    <div class="card card-default mx-auto" style="width: 60%;">
        <div class="card-header">User Dashboard</div>

        <div class="card-body">
            @component('components.who')
            @endcomponent
        </div>
    </div>
</div>
@endsection
