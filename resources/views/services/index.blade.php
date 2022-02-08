@extends('components.datatable_top_buttons')
@section('table_head')
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Designation</th>
        <th style="width: 100px">Actions</th>
    </tr>
@endsection
@section('table_body')
    @include($route.'._form_rows')
@endsection
