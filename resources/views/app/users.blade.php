@extends('layouts.crud')

@section('title', __('app.titles.' . $data['crud']))

@section('table')
    @component('components.table', [
    'fields' => ['name', 'email'],
    'entities' => $data['entities'],
    ])@endcomponent
@endsection

