@extends('layouts.admin')

@section('content')

<div class="container">
  <form action="/update-mhs/{{ $data->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
      <div class="mb-3">
        <label for="formFile" class="form-label">Foto Profil</label>
        <input value="{{ $data->foto_profil }}" class="form-control @error('foto_profil') is-invalid @enderror" name="foto_profil" type="file" id="formFile">
      </div>
  
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">NIM Mahasiswa</label>
        <input value="{{ $data->nim_mhs }}" type="text" name="nim_mhs" class="form-control" id="exampleFormControlInput1" placeholder="Nomor Induk Mahasiswa">
      </div>
  
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
        <input value="{{ $data->nama_mhs }}" type="text" name="nama_mhs" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lengkap">
      </div>
  
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Jurusan</label>
        <select name="jurusan" class="form-select" aria-label="Default select example">
          <option selected>{{ $data->jurusan }}</option>
          <option value="TI">Teknik Informatika</option>
          <option value="TM">Teknik Mesin</option>
          <option value="TPTU">Teknik Pendingin dan Tata Udara</option>
          <option value="KP">Keperawatan</option>
        </select>
      </div>
  
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input value="{{ $data->email }}" type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
  
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Kata Sandi</label>
        <input value="{{ $data->katasandi }}" type="password" name="katasandi" class="form-control" id="exampleFormControlInput1" placeholder="Kata Sandi">
      </div>
  
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nomor Telepon</label>
        <input value="{{ $data->telp }}" type="text" name="telp" class="form-control" id="exampleFormControlInput1" placeholder="Nomor Telepon">
      </div>
  
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Alamat Lengkap</label>
        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1">{{ $data->alamat }}</textarea>
      </div>
  
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">batal</button>
      {{-- <button type="button" class="btn btn-primary">Understood</button> --}}
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
    
    
  </form>
      
  @endsection
</div>

