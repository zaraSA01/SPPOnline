@extends(layouts.admin)

@section('judul')
Data Siswa
@endsection

@section('tabel')

<div class="p-3">
<a href="/tambahsiswa" class="btn btn-primary my-3">Tambah Data siswa</a>
        <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">NIS</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
                <th scope="col">Angkatan</th>
                <th scope="col">Total Biaya</th>
                <th scope="col">Wali Murid</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($siswa as $key => $value )
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{ $value->nama }}</td>
                <td>{{ $value->nis }}</td>
                <td>{{ $value->kelas }}</td>
                <td>{{ $value->angkatan }}</td>
                <td>{{ $value->totalbiaya }}</td>
                <td>{{ $value->walimurid }}</td>
                <td class="mr-3">
                    <a href="/siswa/{{ $value->id}}" class="btn btn-info"> Show</a>
                    <a href="/siswa/{{ $value->id}}/edit" class="btn btn-primary"> Edit</a>
                    <a href="/siswa/{{ $value->id}}" class="btn btn-denger" data-comfirm-delete="true"> Delete</a>
                </td>
            </tr>
        </tbody>
        @empty
        <tr aria-colspan="6">
            <td>No data</td>
        </tr>
        @endforelse
        </table>
</div>
@endsection

<link rel="stylesheet" href="text/css"
href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css">
