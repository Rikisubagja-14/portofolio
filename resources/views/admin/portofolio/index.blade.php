@extends('admin.layout.v_tem')

@section('content')
    <div class="card-header ">
        <h3 class="card-title ">
        @section('title', 'Portofolio')
    </h3>
</div>
<br />
<div class="container card card-secondary ">
    <div class="card card-secondary">
        <div class="card-header">
            <a href="{{ route('portofolio.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> CREATE</a>
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

        <div class="card-body table-responsive p-0" style="height: 300px; ">
            <table id="table_data" class="table table-head-fixed text-nowrap">
                <thead>
                    <tr>
                        <th>No</th>
                        <th style="width: 100px">Name App</th>
                        <th>City Clint</th>
                        <th>Category</th>
                        <th>Project Date</th>
                        <th style="width: 100px">Project URL</th>
                        <th style="width: 200px">Image Project</th>
                        <th style="width: 100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @forelse ($portofolio as $porto)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $porto->name_app }}</td>
                            <td>{{ $porto->city_clint }}</td>
                            <td>{{ $porto->categoty }}</td>
                            <td>{{ $porto->project_date }}</td>
                            <td>{{ $porto->project_url }}</td>
                            <td class="text-center">
                                <img src="{{ Storage::url('portofolio/') . $porto->image_project }}" class="rounded"
                                    style="width: 100px">
                            </td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                    action="{{ route('portofolio.destroy', $porto->id) }}" method="POST">
                                    <a href="{{ route('portofolio.edit', $porto->id) }}"
                                        class="btn btn-sm btn-primary">EDIT</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <div class="alert alert-success">
                            Data Portofolio belum Tersedia.
                        </div>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="card-tools">
                {{ $portofolio->links('vendor.pagination.bootstrap-4') }}
            </div>
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
    @else
        (session() - > has('error'))
        toastr.error('{{ session('error') }}', 'GAGAL!');
    @endif
</script>
@endsection
