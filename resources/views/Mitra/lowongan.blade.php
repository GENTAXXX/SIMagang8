@extends('layout')

@section('title')
Daftar Lowongan
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">List Lowongan</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">List Lowongan</li>
                    </ol>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary" href="{{ route('lowongan.create') }}" role="button">Tambah Lowongan</a>
                </div>
                <!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <!-- Main content -->

    <!-- TABLE: PROPOSAL -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header border-transparent">
                    <h3 class="card-title">List Lowongan</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table m-0">
                            <thead>
                                <tr>
                                    <th class="text-center">Nomor</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Deskripsi</th>
                                    <th class="text-center">Lokasi</th>
                                    <th class="text-center">Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lowongan as $low)
                                <tr>
                                    <td class="text-center">{{ ++$i }}</a></td>
                                    <td class="text-center">{{ $low->nama }}</td>
                                    <td class="text-center">{{ $low->deskripsi }}</td>
                                    <td class="text-center">{{ $low->lokasi }}</td>
                                    <td class="text-center">
                                        <form action="{{ route('lowongan.destroy', $low->id) }}" method="POST">
                                            <a class="btn btn-info btn-sm" href="{{ route('lowongan.show', $low->id) }}"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-primary btn-sm" href="{{ route('lowongan.edit', $low->id) }}"><i class="fa fa-pen"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->

                <!-- /.card-footer -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
{!! $lowongan->links() !!}
<!-- /.content-wrapper -->
@endsection