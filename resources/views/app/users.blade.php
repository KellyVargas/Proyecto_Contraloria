@extends('layouts.crud')

@section('title', __('app.titles.' . $data['crud']))

@section('tools')
    @component('components.tools', [
        'create' => false,
    ])@endcomponent
@endsection

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
