@extends('layouts.custome_app')
@section('content')
    <div class="container">
        @include('components.breadcomes')
    </div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a onclick="location.href='{{ route($route.".create") }}'" class="btn btn-primary btn-sml">Add New</a>
            </div>
            <div class="card-body">
                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        @yield('table_head')
                    </thead>
                    <tbody>
                       @yield('table_body')
                    </tbody>

                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection
