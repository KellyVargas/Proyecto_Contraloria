@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('includes.table')
        </div>

        <div class="col-md-4">
            @include('includes.form')
        </div>
    </div>
@endsection