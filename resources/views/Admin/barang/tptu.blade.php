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
                            <h3 class="mb-0  text-white">LAB TEKNIK PENDINGIN DAN TATA UDARA</h3>
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
                        <h4 class="mb-0">Data Barang</h4>
                    </div>
                    <!-- table  -->
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>ID Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Penanggung Jawab</th>
                                    <th>Jenis Barang</th>
                                    <th>Kondisi</th>
                                    <th>Jumlah</th>
                                    <th>Edit/Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">1</td>
                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="icon-shape icon-md border p-4 rounded-1">
                                                    <img src="assets/images/brand/dropbox-logo.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1">Proyektor</h5></div></div></td>
                                    <td class="align-middle"><h5 class=" mb-1">KA LAB TPTU</h5></td>
                                    <td class="align-middle"><h5 class=" mb-1">elektronik</h5></td>
                                    <td class="align-middle"><h5 class=" mb-1">Bagus</h5></td>
                                    <td class="align-middle"><h5 class=" mb-1">10</h5></td>
                                    <td><div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <button type="button" class="btn btn-primary">Edit</button>
                                        <button type="button" class="btn btn-danger">Hapus</button>
                                      </div></td>
                                </tr>

                                <tr>
                                    <td class="align-middle">1</td>
                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="icon-shape icon-md border p-4 rounded-1">
                                                    <img src="assets/images/brand/dropbox-logo.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1">Proyektor</h5></div></div></td>
                                    <td class="align-middle"><h5 class=" mb-1">KA LAB TPTU</h5></td>
                                    <td class="align-middle"><h5 class=" mb-1">elektronik</h5></td>
                                    <td class="align-middle"><h5 class=" mb-1">Bagus</h5></td>
                                    <td class="align-middle"><h5 class=" mb-1">10</h5></td>
                                    <td><div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <button type="button" class="btn btn-primary">Edit</button>
                                        <button type="button" class="btn btn-danger">Hapus</button>
                                      </div></td>
                                </tr>

                                <tr>
                                    <td class="align-middle">1</td>
                                    <td class="align-middle">
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="icon-shape icon-md border p-4 rounded-1">
                                                    <img src="assets/images/brand/dropbox-logo.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class=" mb-1">Proyektor</h5></div></div></td>
                                    <td class="align-middle"><h5 class=" mb-1">KA LAB TPTU</h5></td>
                                    <td class="align-middle"><h5 class=" mb-1">elektronik</h5></td>
                                    <td class="align-middle"><h5 class=" mb-1">Bagus</h5></td>
                                    <td class="align-middle"><h5 class=" mb-1">10</h5></td>
                                    <td><div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <button type="button" class="btn btn-primary">Edit</button>
                                        <button type="button" class="btn btn-danger">Hapus</button>
                                      </div></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- card footer  -->
                    <div class="card-footer bg-white text-center">
                        <a href="#" class="link-primary">Lihat Semua</a>

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
