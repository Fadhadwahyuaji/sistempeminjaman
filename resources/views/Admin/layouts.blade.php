@extends('layouts.admin')

@section('content')
    <!-- Container fluid -->
    <div class="container-fluid px-6 py-4">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <!-- text -->
                <div class="text-center mb-7">
                    <h1 class="display-4">Layouts</h1>
                    <p>Customize your overview page layout. Choose the one that best fits your needs.</p>
                </div>
                <span class="divider fw-bold my-3">Demo layouts</span>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6 col-lg-3 my-4 ">
                <!-- Card -->
                <a class="card" href="../index.html">
                    <img class="card-img-top" src="../assets/images/layouts/default-classic.svg" alt="Image Description">
                    <div class="card-body text-center">
                        <h5 class="mb-0">Classic</h5>
                    </div>
                </a>
                <!-- End Card -->
            </div>
        </div>
    </div>

    </div>
    </div>
@endsection
