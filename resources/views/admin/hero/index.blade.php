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
                <form action="{{ route('hero-section.update', 1) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="form-label mb-2">Image</label>
                                <input type="file" class="form-control mb-2" name="image" id="image">
                                @if($errors->has('image'))
                                    <span class="text-danger">{{ $errors->first('image') }}</span>
                                @endif
                            </div>
                        </div>
                         <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="form-label mb-2">Title</label>
                                <input type="text" class="form-control mb-2" name="title" value="{{ $hero->title }}" >
                                 @if($errors->has('title'))
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                        </div>

                         <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="form-label mb-2">Subtitle</label>
                                <input type="text" class="form-control mb-2" name="subtitle" value="{{ $hero->subtitle }}" >
                                 @if($errors->has('subtitle'))
                                    <span class="text-danger">{{ $errors->first('subtitle') }}</span>
                                @endif
                            </div>
                        </div>


                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label mb-2">Counter one</label>
                                <input type="text" class="form-control mb-2" name="counter_one" value="{{ $hero->counter_one }}" >
                                 @if($errors->has('counter_one'))
                                    <span class="text-danger">{{ $errors->first('counter_one') }}</span>
                                @endif
                            </div>
                        </div>

                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label mb-2">Counter Title One</label>
                                <input type="text" class="form-control mb-2" name="counter_title_one" value="{{ $hero->counter_title_one }}" >
                                 @if($errors->has('counter_title_one'))
                                    <span class="text-danger">{{ $errors->first('counter_title_one') }}</span>
                                @endif
                            </div>
                        </div>

                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label mb-2">Counter Two</label>
                                <input type="text" class="form-control mb-2" name="counter_two" value="{{ $hero->counter_two }}" >
                                 @if($errors->has('counter_two'))
                                    <span class="text-danger">{{ $errors->first('counter_two') }}</span>
                                @endif
                            </div>
                        </div>

                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label mb-2">Counter Title Two</label>
                                <input type="text" class="form-control mb-2" name="counter_title_two" value="{{ $hero->counter_title_two }}" >
                                 @if($errors->has('counter_title_two'))
                                    <span class="text-danger">{{ $errors->first('counter_title_two') }}</span>
                                @endif
                            </div>
                        </div>

                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label mb-2">Counter Three</label>
                                <input type="text" class="form-control mb-2" name="counter_three" value="{{ $hero->counter_three }}" >
                                 @if($errors->has('counter_three'))
                                    <span class="text-danger">{{ $errors->first('counter_three') }}</span>
                                @endif
                            </div>
                        </div>

                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label mb-2">Counter Title Three</label>
                                <input type="text" class="form-control mb-2" name="counter_title_three" value="{{ $hero->counter_title_three }}" >
                                 @if($errors->has('counter_title_three'))
                                    <span class="text-danger">{{ $errors->first('counter_title_three') }}</span>
                                @endif
                            </div>
                        </div>

                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label mb-2">Counter Four</label>
                                <input type="text" class="form-control mb-2" name="counter_four" value="{{ $hero->counter_four }}" >
                                 @if($errors->has('counter_four'))
                                    <span class="text-danger">{{ $errors->first('counter_four') }}</span>
                                @endif
                            </div>
                        </div>

                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="form-label mb-2">Counter Title Four</label>
                                <input type="text" class="form-control mb-2" name="counter_title_four" value="{{ $hero->counter_title_four }}" >
                                 @if($errors->has('counter_title_four'))
                                    <span class="text-danger">{{ $errors->first('counter_title_four') }}</span>
                                @endif
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
