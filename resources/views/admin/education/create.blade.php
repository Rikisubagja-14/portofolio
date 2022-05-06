@extends('admin.layout.v_tem')

@section('content')
    <div class="card-header ">
        <h3 class="card-title ">@section('title','Create Education')</h3>
    </div>
    <br />

    <div class="container card card-secondary " style="max-width: 1000px !important;">

        <div class="card card-secondary">
            <div class="card-header">
                <a href="{{ route('education.index') }}" class="btn "><i class="fas fa-arrow-left"></i></a>
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
                <form action="{{ route('education.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Name University</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control @error('name_university') is-invalid @enderror"
                                        name="name_university" value="{{ old('name_university') }}" placeholder="Input Name App">
                                    @error('name_university')
                                        <span class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Major</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control @error('major') is-invalid @enderror"
                                        name="major" value="{{ old('major') }}" placeholder="Input Category">
                                    @error('major')
                                        <span class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date_of_entry</label>
                                <div class="col-sm-5">
                                    <input type="date" class="form-control @error('date_of_entry') is-invalid @enderror"
                                        name="date_of_entry" value="{{ old('date_of_entry') }}"
                                        placeholder="Input Project Date">
                                    <!-- error message untuk title -->
                                    @error('date_of_entry')
                                        <span class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Out_date</label>
                                <div class="col-sm-5">
                                    <input type="date" class="form-control @error('out_date') is-invalid @enderror"
                                        name="out_date" value="{{ old('out_date') }}"
                                        placeholder="Input Project Date">
                                    <!-- error message untuk title -->
                                    @error('out_date')
                                        <span class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        name="title" value="{{ old('title') }}"
                                        placeholder="Input Project URL">
                                    <!-- error message untuk title -->
                                    @error('title')
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
    {{-- <script>
        //Date picker
        $('#reservationdate').datetimepicker({
            format: 'L'
        });
    </script> --}}
@endsection
