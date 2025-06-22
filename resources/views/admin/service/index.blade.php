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
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Title</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($services as $service)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td><i class="{{ $service->icon }}"></i></td>
                            <td>{{ $service->title }}</td>
                            <td>
                                <a href="{{ route('service-section.edit', $service->id) }}" class=""><i class="fas fa-edit"></i></a> | 
                                <a href="" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>

                        @endforeach
                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
