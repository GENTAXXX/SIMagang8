@extends('layout')

@section('title')
Tambah Lowongan
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Lowongan</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('lowongan.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('lowongan.index') }}">List Lowongan</a></li>
                        <li class="breadcrumb-item active">Tambah Lowongan</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Main content -->

    <!-- TABLE: PROPOSAL -->
    <section>
        <div class="card card-primary">
            <div class="card-header">
                <div class="float-right">
                    <a class="btn btn-secondary" href="{{ route('lowongan.index') }}"> Back</a>
                </div>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('lowongan.store')}}" method="POST">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lowongan</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama Lowongan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Deskripsi Lowongan</label>
                        <textarea class="form-control" name="deskripsi" placeholder="Deskripsi Lowongan"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tanggal mulai</label>
                        <input type="date" class="form-control" name="tgl_mulai">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tanggal Selesai</label>
                        <input type="date" class="form-control" name="tgl_selesai">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Jumlah Mahasiswa</label>
                        <input type="number" class="form-control" name="jumlah_mhs" placeholder="Jumlah Mahasiswa">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Lokasi</label>
                        <input type="text" class="form-control" name="lokasi" placeholder="Lokasi">
                    </div>
                    <!-- <div class="form-group">
                        <label for="exampleInputPassword1">Skill</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="1 Skill">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Provinsi</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Lokasi">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Kabupaten</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Lokasi">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mitra</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Lokasi">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Kategori</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Lokasi">
                    </div> -->
                    <div class="form-group">
                        <label for="exampleInputPassword1">Telepon</label>
                        <input type="number" class="form-control" name="telepon" placeholder="Telepon">
                    </div>
                    <!-- <div class="form-group">
                        <label for="exampleInputFile">Gambar</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div> -->
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection