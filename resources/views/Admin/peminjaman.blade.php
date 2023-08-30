@extends('layouts.admin')

@section('content')
    <!-- Container fluid -->
    <div class="bg-primary pt-10 pb-21"></div>
    <div class="container-fluid mt-n22 px-6">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mb-2 mb-lg-0">
                            <h3 class="mb-0  text-white">PEMINJAMAN BARANG</h3>
                        </div>
                        <div>
                            <a href="#" class="btn btn-white">Tambah</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row  -->
        <div class="row mt-6">
            <div class="col-md-12 col-12">
                <!-- card  -->
                <div class="card">
                    <!-- card header  -->
                    <div class="card-header bg-white  py-4">
                        <h4 class="mb-0">Permintaan Peminjaman</h4>
                    </div>
                    <!-- table  -->
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>ID Pinjam</th>
                                    <th>Nama Pemimjam</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah Pinjam</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Status</th>
                                    <th>Detail Pinjaman</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">34</td>
                                    <td class="align-middle"><span class="badgebg-warning">Fadhad</span></td>
                                    <td class="align-middle"><h5 class=" mb-1"> <a href="#" class="text-inherit">Proyekor</a></h5></td>
                                    <td class="align-middle">5</td>
                                    <td class="align-middle">05-09-2023</td>
                                    <td class="align-middle"><select class="form-select" aria-label="Default select example">
                                        <option selected>Pilih</option>
                                        <option value="1">Setuju</option>
                                        <option value="2">Tolak</option>
                                      </select></td>
                                    <td class="align-middle"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        Detail</button>
                                        @component('components.detail_pinjaman')
                                        <!-- Anda dapat menambahkan konten khusus untuk modal di sini -->
                                    @endcomponent</td>
                                </tr>

                                <tr>
                                    <td class="align-middle">34</td>
                                    <td class="align-middle"><span class="badgebg-warning">Fadhad</span></td>
                                    <td class="align-middle"><h5 class=" mb-1"> <a href="#" class="text-inherit">Proyekor</a></h5></td>
                                    <td class="align-middle">5</td>
                                    <td class="align-middle">05-09-2023</td>
                                    <td class="align-middle"><select class="form-select" aria-label="Default select example">
                                        <option selected>Pilih</option>
                                        <option value="1">Setuju</option>
                                        <option value="2">Tolak</option>
                                      </select></td>
                                    <td class="align-middle"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        Detail</button>
                                        @component('components.detail_pinjaman')
                                        <!-- Anda dapat menambahkan konten khusus untuk modal di sini -->
                                    @endcomponent</td>
                                </tr>

                                <tr>
                                    <td class="align-middle">34</td>
                                    <td class="align-middle"><span class="badgebg-warning">Fadhad</span></td>
                                    <td class="align-middle"><h5 class=" mb-1"> <a href="#" class="text-inherit">Proyekor</a></h5></td>
                                    <td class="align-middle">5</td>
                                    <td class="align-middle">05-09-2023</td>
                                    <td class="align-middle"><select class="form-select" aria-label="Default select example">
                                        <option selected>Pilih</option>
                                        <option value="1">Setuju</option>
                                        <option value="2">Tolak</option>
                                      </select></td>
                                    <td class="align-middle"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        Detail</button>
                                        @component('components.detail_pinjaman')
                                        <!-- Anda dapat menambahkan konten khusus untuk modal di sini -->
                                    @endcomponent</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- card footer  -->
                    <div class="card-footer bg-white text-center">
                        <a href="#" class="link-primary">Lihat Semuanya</a>

                    </div>
                </div>

            </div>
        </div>
                <!-- End Card -->
            </div>
        </div>
    </div>

    </div>
    </div>
@endsection
