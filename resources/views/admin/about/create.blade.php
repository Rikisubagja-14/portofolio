@extends('admin.layout.v_tem')

@section('content')
    <div class="card-header ">
        <h3 class="card-title ">@section('title','Create About')</h3>
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
                <form action="{{ route('about.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Name About</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control @error('name_about') is-invalid @enderror"
                                        name="name_about" value="{{ old('name_about') }}" placeholder="Input Name About">
                                    @error('name_about')
                                        <span class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Desc About</label>
                                <div class="col-sm-8">
                                    <textarea type="textarea"  class="form-control @error('desc_about') is-invalid @enderror"
                                        name="desc_about" value="{{ old('desc_about') }}" placeholder="Input Desc About"></textarea>
                                    <!-- error message untuk title -->
                                    @error('desc_about')
                                        <span class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Brithday</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control @error('birthday') is-invalid @enderror"
                                        name="birthday" value="{{ old('birthday') }}" placeholder="Input Birthday">
                                    <!-- error message untuk title -->
                                    @error('birthday')
                                        <span class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Website</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control @error('website') is-invalid @enderror"
                                        name="website" value="{{ old('website') }}" placeholder="Input Website">
                                    <!-- error message untuk title -->
                                    @error('website')
                                        <span class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Phone</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                        name="phone" value="{{ old('phone') }}" placeholder="Input Phone">
                                    <!-- error message untuk title -->
                                    @error('phone')
                                        <span class="error invalid-feedback"
                                            style="display: inline;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">City</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control @error('city') is-invalid @enderror" name="city"
                                        value="{{ old('city') }}" placeholder="Input city">
                                    <!-- error message untuk title -->
                                    @error('city')
                                        <span class="error invalid-feedback"
                                            style="display: inline;">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>

                        </div>


                        <div class="col">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Age</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control @error('age') is-invalid @enderror" name="age"
                                        value="{{ old('age') }}" placeholder="Input age">
                                    <!-- error message untuk title -->
                                    @error('age')
                                        <span class="error invalid-feedback"
                                            style="display: inline;">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Deagree</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control @error('deagree') is-invalid @enderror"
                                        name="deagree" value="{{ old('deagree') }}" placeholder="Input deagree">
                                    @error('deagree')
                                        <span class="error invalid-feedback"
                                            style="display: inline;">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" placeholder="Input Email">
                                    @error('email')
                                        <span class="error invalid-feedback"
                                            style="display: inline;">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Caregory_freelance</label>
                                <div class="col-sm-8">
                                    <input type="text"
                                        class="form-control @error('caregory_freelance') is-invalid @enderror"
                                        name="caregory_freelance" value="{{ old('caregory_freelance') }}"
                                        placeholder="Input Caregory_freelance">
                                    @error('caregory_freelance')
                                        <span class="error invalid-feedback"
                                            style="display: inline;">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Title</label>
                                <div class="col-sm-8">
                                    <textarea type="textarea" class="form-control @error('title') is-invalid @enderror"
                                        name="title" value="{{ old('title') }}" placeholder="Input title"></textarea>
                                    @error('title')
                                        <span class="error invalid-feedback"
                                            style="display: inline;">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Skill</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control @error('skill') is-invalid @enderror"
                                        name="skill" value="{{ old('skill') }}" placeholder="Input skill">
                                    @error('skill')
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
