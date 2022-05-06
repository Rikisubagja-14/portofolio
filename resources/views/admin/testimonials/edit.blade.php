@extends('admin.layout.v_tem')

@section('content')
    <div class="card-header ">
        <h3 class="card-title ">@section('title','Edit Testimonials')</h3>
    </div>
    <br />

    <div class="container card card-secondary " style="max-width: 1000px !important;">

        <div class="card card-secondary">
            <div class="card-header">
                <a href="{{ route('testimonials.index') }}" class="btn "><i class="fas fa-arrow-left"></i></a>
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
                <form action="{{ route('testimonials.update', $testimonial->id ) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Name Client</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control @error('name_client') is-invalid @enderror"
                                        name="name_client" value="{{ old('name_client', $testimonial->name_client) }}" placeholder="Input name client">
                                    @error('name_client')
                                        <span class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Title Position</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control @error('title_position') is-invalid @enderror"
                                        name="title_position" value="{{ old('title_position', $testimonial->title_position) }}" placeholder="Input title position">
                                    @error('title_position')
                                        <span class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Title Testimonials</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control @error('title_testimonials') is-invalid @enderror"
                                        name="title_testimonials" value="{{ old('title_testimonials', $testimonial->title_testimonials) }}" placeholder="Input title testimonials">
                                    @error('title_testimonials')
                                        <span class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>
                    <br />
                    <button type="submit" class="btn btn-md btn-success">UPDATE</button>
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
    {{-- <script>
        //Date picker
        $('#reservationdate').datetimepicker({
            format: 'L'
        });
    </script> --}}
@endsection
