@extends('layouts.crud')

@section('title', __('app.titles.' . $data['crud']))

@section('table')
    @component('components.table', [
        'fields' => $data['table'],
        'entities' => $data['entities'],
    ])@endcomponent
@endsection

@section('form')
    @component('components.form', [
        'fields' => $data['form'],
    ])@endcomponent
@endsection
