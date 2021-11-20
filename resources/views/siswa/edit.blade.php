
@extends('layout.master')


@section('content')

@if(session('sukses'))
<div class="alert alert-success" role="alert">
 sukses ya
@endif
</div>
    <div class="pow">
    <div class="col-6">
    <h1> EDIT DATA SISWA</h1>
    </div>
    <div class="col-6">
    <!-- Button trigger modal -->
        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
        masukan data edit
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">edit data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="/siswa/{{$siswa->id}}/update" method="POST">
            {{csrf_field()}}
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input name="nama" type="text" class="form-control" value="{{$siswa->id}}" >
            </div>
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input name="nama" type="text" class="form-control" value="{{$siswa->nama}}" >
            </div>
            <div class="mb-3">
                <label class="form-label">Tempat Tanggal Lahir</label>
                <input name="TTL" type="text" class="form-control" value="{{$siswa->TTL}}" >
            </div>
            <div class="mb-3">
            <label class="form-label">Agama</label>
            <select name="Agama"class="form-select" aria-label="Disabled select example"  >
            <option value="Islam" @if($siswa->Agama=="Islam") selected @endif>Islam</option>
            <option value="Kristen" @if($siswa->Agama=="Kristen") selected @endif>Kristen</option>
            <option value="Hindu" @if($siswa->Agama=="Hindu") selected @endif>Hindu</option>
            <option value="Budha" @if($siswa->Agama=="Budha") selected @endif>Budha</option>
            <option value="Konghucu" @if($siswa->Agama=="Konghucu") selected @endif>Konghucu</option>
            </select>
            </div>
            <label class="form-label">Alamat</label>
            <div class="form-floating">
            <textarea  name="Alamat" class="form-control" placeholder="Leave a comment here" id="floatingTextarea" >{{$siswa->Alamat}}</textarea>
            </div>
            <br><br><br>           
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">keluar</button>
                <button type="submit" class="btn btn-warning">Simpan Pembaruan</button>
            </div>
            </form>
            </div>
            </div>
        </div>
        </div>
    
    </div>
   
    </div>

@endsection