@extends('admin.layouts.app')

@section('contents')
    <div class="container">
        <div class="card border-top-dark border-top-3 mb-3">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div> <b>Create Services</b></div>
                <div class="card-header-actions">
                    <a class="btn btn-primary" href="">Back</a>
                </div>
            </div>

            <div class="card-body text-dark">
                <form action="" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-md-4 d-flex">
                            <div role="iconpicker"></div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="form-label mb-2">Title</label>
                                <input type="text" class="form-control mb-2" name="title" value="">
                                @if ($errors->has('title'))
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="form-label mb-2">Description</label>
                                <textarea name="description" id="" class="form-control"></textarea>
                                @if ($errors->has('description'))
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                        </div>
                        
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary ">Create</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
