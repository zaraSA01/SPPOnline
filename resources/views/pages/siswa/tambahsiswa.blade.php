@extends('layouts.admin')

@section('judul', 'Tambah Profil Siswa')

@section('content')
<form action="/siswa" method="POST">
    @csrf
    <div class="form-group p-3">
        <label>Nama Lengkap</label>
        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap">
        @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group p-3">
        <label>NIS</label>
        <input type="text" name="nis" class="form-control" placeholder="Masukkan NIS">
        @error('nis')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group p-3">
        <label>Kelas</label>
        <input type="text" name="kelas" class="form-control" placeholder="Masukkan kelas">
        @error('kelas')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group p-3">
        <label>Angkatan</label>
        <input type="text" name="angkatan" class="form-control" placeholder="Masukkan angkatan">
        @error('angkatan')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group p-3">
        <label>Total biaya</label>
        <input type="text" name="totalbiaya" class="form-control" placeholder="Masukkan total biaya">
        @error('totalbiaya')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group p-3">
        <label>Wali murid</label>
        <input type="text" name="walimurid" class="form-control" placeholder="Masukkan wali murid">
        @error('walimurid')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group p-3">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection
