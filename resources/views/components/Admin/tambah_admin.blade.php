
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Mahasiswa</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ route('tambah_mhs') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="modal-body">
            <div class="mb-3">
              <label for="formFile" class="form-label">Foto Profil</label>
              <input class="form-control @error('foto_profil') is-invalid @enderror" name="foto_profil" type="file" id="formFile">
            </div>
  
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">NIM Mahasiswa</label>
              <input type="text" name="nim_mhs" class="form-control" id="exampleFormControlInput1" placeholder="Nomor Induk Mahasiswa">
            </div>
  
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
              <input type="text" name="nama_mhs" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lengkap">
            </div>
  
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Jurusan</label>
              <select name="jurusan" class="form-select" aria-label="Default select example">
                <option selected>Pilih Jurusan</option>
                <option value="TI">Teknik Informatika</option>
                <option value="TM">Teknik Mesin</option>
                <option value="TPTU">Teknik Pendingin dan Tata Udara</option>
                <option value="KP">Keperawatan</option>
              </select>
            </div>
  
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
  
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Kata Sandi</label>
              <input type="password" name="katasandi" class="form-control" id="exampleFormControlInput1" placeholder="Kata Sandi">
            </div>
  
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nomor Telepon</label>
              <input type="text" name="telp" class="form-control" id="exampleFormControlInput1" placeholder="Nomor Telepon">
            </div>
  
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Alamat Lengkap</label>
              <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
  
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">batal</button>
            {{-- <button type="button" class="btn btn-primary">Understood</button> --}}
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
          
          
        </form>


      </div>
    </div>
  </div>