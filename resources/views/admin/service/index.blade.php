@extends('admin.layouts.app')

@section('contents')
    <div class="container">
        <div class="card border-top-dark border-top-3 mb-3">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div> <b>All Services</b></div>
                <div class="card-header-actions">
                    <a class="btn btn-primary" href="{{ route('service-section.create') }}">Create</a>
                </div>
            </div>

            <div class="card-body text-dark">
               
            </div>
        </div>
    </div>
@endsection
