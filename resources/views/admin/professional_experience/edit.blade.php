@extends('admin.layout.v_tem')

@section('content')
    <div class="card-header ">
        <h3 class="card-title ">@section('title','Edit Professional_experience')</h3>
    </div>
    <br />

    <div class="container card card-secondary " style="max-width: 1000px !important;">

        <div class="card card-secondary">
            <div class="card-header">
                <a href="{{ route('professional_experiences.index') }}" class="btn "><i class="fas fa-arrow-left"></i></a>
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
                <form action="{{ route('professional_experiences.update', $professional_experience->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Name Position</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control @error('name_position') is-invalid @enderror"
                                        name="name_position" value="{{ old('name_position', $professional_experience->name_position) }}" placeholder="Input Name App">
                                    @error('name_position')
                                        <span class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Company</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control @error('company') is-invalid @enderror"
                                        name="company" value="{{ old('company', $professional_experience->company) }}" placeholder="Input Category">
                                    @error('company')
                                        <span class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date_of_entry</label>
                                <div class="col-sm-5">
                                    <input type="date" class="form-control @error('date_of_entry') is-invalid @enderror"
                                        name="date_of_entry" value="{{ old('date_of_entry', $professional_experience->date_of_entry) }}"
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
                                        name="out_date" value="{{ old('out_date', $professional_experience->out_date) }}"
                                        placeholder="Input Project Date">
                                    <!-- error message untuk title -->
                                    @error('out_date')
                                        <span class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            {{-- start title --}}
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Title 1</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control @error('title_1') is-invalid @enderror"
                                        name="title_1" value="{{ old('title_1', $professional_experience->title_1) }}"
                                        placeholder="Input Project URL">
                                    <!-- error message untuk title_1 -->
                                    @error('title_1')
                                        <span class="error invalid-feedback"
                                            style="display: inline;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Title 1</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control @error('title_2') is-invalid @enderror"
                                        name="title_2" value="{{ old('title_2', $professional_experience->title_2) }}"
                                        placeholder="Input Project URL">
                                    <!-- error message untuk title_2 -->
                                    @error('title_2')
                                        <span class="error invalid-feedback"
                                            style="display: inline;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Title 3</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control @error('title_3') is-invalid @enderror"
                                        name="title_3" value="{{ old('title_3', $professional_experience->title_3) }}"
                                        placeholder="Input Project URL">
                                    <!-- error message untuk title_3 -->
                                    @error('title_3')
                                        <span class="error invalid-feedback"
                                            style="display: inline;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Title 4</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control @error('title_4') is-invalid @enderror"
                                        name="title_4" value="{{ old('title_4', $professional_experience->title_4) }}"
                                        placeholder="Input Project URL">
                                    <!-- error message untuk title_4 -->
                                    @error('title_4')
                                        <span class="error invalid-feedback"
                                            style="display: inline;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Title 5</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control @error('title_5') is-invalid @enderror"
                                        name="title_5" value="{{ old('title_5', $professional_experience->title_5) }}"
                                        placeholder="Input Project URL">
                                    <!-- error message untuk title_1 -->
                                    @error('title_5')
                                        <span class="error invalid-feedback"
                                            style="display: inline;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            {{-- end title --}}
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
