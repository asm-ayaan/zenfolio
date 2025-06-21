@extends('admin.layouts.app')

@section('contents')
    <div class="container">
        <div class="card border-top-dark border-top-3 mb-3">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div> <b>Hero Section</b></div>
                {{-- <div class="card-header-actions">
                    <a class="btn btn-primary" href="">Create</a>
                </div> --}}
            </div>


            <div class="card-body text-dark">
                <form action="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="form-label mb-2">Image</label>
                                <input type="file" class="form-control mb-2" name="image" id="image">
                            </div>
                        </div>
                         <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="form-label mb-2">Title</label>
                                <input type="text" class="form-control mb-2" name="title" >
                            </div>
                        </div>

                         <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="form-label mb-2">Subtitle</label>
                                <input type="text" class="form-control mb-2" name="subtitle" >
                            </div>
                        </div>


                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label mb-2">Counter one</label>
                                <input type="text" class="form-control mb-2" name="counter_one" >
                            </div>
                        </div>

                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label mb-2">Counter Title One</label>
                                <input type="text" class="form-control mb-2" name="counter_title_one" >
                            </div>
                        </div>

                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label mb-2">Counter one</label>
                                <input type="text" class="form-control mb-2" name="counter_one" >
                            </div>
                        </div>

                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label mb-2">Counter Title One</label>
                                <input type="text" class="form-control mb-2" name="counter_title_one" >
                            </div>
                        </div>

                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label mb-2">Counter one</label>
                                <input type="text" class="form-control mb-2" name="counter_one" >
                            </div>
                        </div>

                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label mb-2">Counter Title One</label>
                                <input type="text" class="form-control mb-2" name="counter_title_one" >
                            </div>
                        </div>

                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label mb-2">Counter one</label>
                                <input type="text" class="form-control mb-2" name="counter_one" >
                            </div>
                        </div>

                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label mb-2">Counter Title One</label>
                                <input type="text" class="form-control mb-2" name="counter_title_one" >
                            </div>
                        </div>
                    </div>

                    <div class="mt-3">

                    <button type="submit" class="btn btn-primary ">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
