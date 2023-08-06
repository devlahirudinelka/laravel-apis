@extends('layouts.app')
@section('pageContent')
    <div class="page-content" align="center">
        <a href="/student"><button class="btn btn-success mt-5">Manage Student</button></a>
    </div>
@endsection

@push('homecss')
    <style>
        .page-content {
            min-height: 75vh;
        }
    </style>
@endpush
