@extends('admin.layout.v_tem')

@section('content')
    <div class="card-header ">
        <h3 class="card-title ">@yield('title','Create Portofolio')</h3>
    </div>
    <br />

    <div class="container card card-secondary " style="max-width: 1000px !important;">

        <div class="card card-secondary">
            <div class="card-header">
                <a href="{{ route('about.index') }}" class="btn "><i class="fas fa-arrow-left"></i></a>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body ">
                <form action="{{ route('portofolio.update', $portofolio->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Name App</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control @error('name_app') is-invalid @enderror"
                                        name="name_app" value="{{ old('name_app', $portofolio->name_app) }}" placeholder="Input Name App">
                                    @error('name_app')
                                        <span class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">City Clint</label>
                                <div class="col-sm-5">
                                    <textarea class="form-control @error('city_clint') is-invalid @enderror" rows="3" name="city_clint"
                                         placeholder="Enter city client ...">{{ old('city_clint', $portofolio->city_clint) }}</textarea>
                                    <!-- error message untuk title -->
                                    @error('city_clint')
                                        <span class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Category</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control @error('categoty') is-invalid @enderror"
                                        name="categoty" value="{{ old('categoty', $portofolio->categoty) }}" placeholder="Input Category">
                                    @error('categoty')
                                        <span class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Project Date</label>
                                <div class="col-sm-5">
                                    <input type="date" class="form-control @error('project_date') is-invalid @enderror"
                                        name="project_date" value="{{ old('project_date', $portofolio->project_date) }}" placeholder="Input Project Date">
                                    <!-- error message untuk title -->
                                    @error('project_date')
                                        <span class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Project URL</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control @error('project_url') is-invalid @enderror"
                                        name="project_url" value="{{ old('project_url', $portofolio->project_url) }}" placeholder="Input Project URL">
                                    <!-- error message untuk title -->
                                    @error('project_url')
                                        <span class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Image Project</label>
                                <div class="col-sm-5">
                                    <input type="file" class="form-control @error('image_project') is-invalid @enderror"
                                        name="image_project"  placeholder="Input Image Project">
                                    <!-- error message untuk title -->
                                    @error('image_project')
                                        <span class="error invalid-feedback"
                                            style="display: inline;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>



                        </div>
                    </div>
                    <br />
                    <button type="submit" class="btn btn-md btn-success">SAVE</button>
                    <button type="reset" class="btn btn-md btn-danger">RESET</button>

                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
