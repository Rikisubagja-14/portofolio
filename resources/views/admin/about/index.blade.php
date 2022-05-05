@extends('admin.layout.v_tem')

@section('content')
    <div class="card-header ">
        <h3 class="card-title ">@yield('title','About')</h3>
    </div>
    <br />
    <div class="container card card-secondary ">
        <div class="card card-secondary">
            <div class="card-header">
                <a href="{{ route('about.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> CREATE</a>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        {{-- serach bar --}}
                        <form>
                            <div class="card-header">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#import">
                                    IMPORT
                                </button>
                                <a href="" class="btn btn-primary btn-md">EXPORT</a>
                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="search" class="form-control float-right"
                                            placeholder="Search">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card-body table-responsive p-0" style="height: 300px;">
                <table id="table_data" class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th style="width:100px">No</th>
                            <th>Name About</th>
                            <th>Desc About</th>
                            <th>birthday</th>
                            <th>website</th>
                            <th>phone</th>
                            <th>city</th>
                            <th>age</th>
                            <th>deagree</th>
                            <th>email</th>
                            <th>caregory_freelance</th>
                            <th>title</th>
                            <th>skill</th>
                            <th style="width:100%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @forelse ($about as $ab)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $ab->name_about }}</td>
                                <td>{{ $ab->desc_about }}</td>
                                <td>{{ $ab->birthday }}</td>
                                <td>{{ $ab->website }}</td>
                                <td>{{ $ab->phone }}</td>
                                <td>{{ $ab->city }}</td>
                                <td>{{ $ab->age }}</td>
                                <td>{{ $ab->deagree }}</td>
                                <td>{{ $ab->email }}</td>
                                <td>{{ $ab->caregory_freelance }}</td>
                                <td>{{ $ab->title }}</td>
                                <td>{{ $ab->skill }}</td>

                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                        action="{{ route('about.destroy', $ab->id) }}" method="POST">
                                        <a href="{{ route('about.edit', $ab->id) }}"
                                            class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-success">
                                Data About belum Tersedia.
                            </div>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <div class="card-tools">
                    {{ $about->links('vendor.pagination.bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>


    <!-- modal -->
<div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">IMPORT DATA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>PILIH FILE</label>
                        <input type="file" name="file" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                    <button type="submit" class="btn btn-success">IMPORT</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            // $('#table_data').DataTable({});
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        //message with toastr
        @if (session()->has('success'))
            toastr.success('{{ session('success') }}', 'BERHASIL!');
        @elseif(session()->has('error'))
            toastr.error('{{ session('error') }}', 'GAGAL!');
        @endif
    </script>
@endsection
