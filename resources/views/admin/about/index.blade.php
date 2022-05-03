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
            <div class="card-body ">
                <table id="table_data" class="table-responsive table-bordered table-striped scroll">
                    <thead>
                        <tr>
                            <th>No</th>
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
                            <th style="width: 200px;">Action</th>
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
                {{ $about->links() }}
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#table_data').DataTable({});
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
