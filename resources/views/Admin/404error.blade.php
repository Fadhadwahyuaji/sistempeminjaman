@extends('auth.theme')

@section('content')

    <!-- Error page -->
    <div class="container min-vh-100 d-flex justify-content-center
      align-items-center">
      <!-- row -->
      <div class="row">
        <!-- col -->
        <div class="col-12">
          <!-- content -->
          <div class="text-center">
            <div class="mb-3">
              <!-- img -->
              <img src="../assets/images/error/404-error-img.png" alt=""
                class="img-fluid">
            </div>
            <!-- text -->
            <h1 class="display-4 fw-bold">Oops! Halaman Belum Tersedia.</h1>
            <p class="mb-4">sabar ya agi di bikin hehe.</p>
              <!-- button -->
            <a href="{{ route('dashboard') }}" class="btn btn-primary">Go Home</a>
          </div>
        </div>
      </div>
    </div>
 
@endsection
