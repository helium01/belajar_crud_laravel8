@extends('layout.master')


@section('content')
@if(session('sukses'))
<div class="alert alert-success" role="alert">
 data tersimpan 
@endif
</div>
    <div class="pow">
    <div class="col-6">
    <h1>DATA SISWA</h1>
    </div>
    <div class="col-6">
    <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        masukan data
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="/siswa/create" method="POST">
            {{csrf_field()}}
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input name="nama" type="text" class="form-control" >
            </div>
            <div class="mb-3">
                <label class="form-label">Tempat Tanggal Lahir</label>
                <input name="TTL" type="text" class="form-control" >
            </div>
            <div class="mb-3">
            <label class="form-label">Agama</label>
            <select name="Agama"class="form-select" aria-label="Disabled select example" >
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            <option value="Konghucu">Konghucu</option>
            </select>
            </div>
            <label class="form-label">Alamat</label>
            <div class="form-floating">
            <textarea name="Alamat" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            </div>
            <br><br><br>           
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">keluar</button>
                <button type="submit" class="btn btn-primary">Simpan Pembaruan</button>
            </div>
            </form>
            </div>
            </div>
        </div>
        </div>
    
    </div>
    <table class="table">
    <tr>
        <td>ID</td>
        <td>Nama</td>
        <td>TTL</td>
        <td>Agama</td>
        <td>Alamat</td>
        <td>Edit</td>
    </tr>

    @foreach ($tabel_siswa as $siswa)
    <tr>
        <td>{{$siswa->id}}</td>
        <td>{{$siswa->nama}}</td>
        <td>{{$siswa->TTL}}</td>
        <td>{{$siswa->Agama}}</td>
        <td>{{$siswa->Alamat}}</td>
        <td>
            <a class="btn btn-warning" href="/siswa/{{$siswa->id}}/edit">edit</a>
            <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger" onclick="return confirm('yakin mau hapus datanya ')">delete</a>
        </td>
    </tr>
    @endforeach
</table>
    </div>
@endsection



