@extends('auth.theme')

@section('content')
<div class="container d-flex flex-column">
  <div class="row align-items-center justify-content-center g-0
      min-vh-100">
    <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
      <!-- Card -->
      <div class="card smooth-shadow-md">
        <!-- Card body -->
        <div class="card-body p-6">
          <div class="mb-4">
            {{-- <a href="{{ route('dashboard') }}"><img src="../assets/images/brand/logo/logo-primary.svg" class="mb-2" alt=""></a> --}}
            <h2 style="color: cornflowerblue">SISLAB</h2>
            <p class="mb-6">Don't worry, we'll send you an email to reset your password.
            </p>
          </div>
          <!-- Form -->
          <form>
            <!-- Email -->
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" id="email" class="form-control" name="email" placeholder="Enter Your Email" required="">
            </div>
            <!-- Button -->
            <div class="mb-3 d-grid">
              <button type="submit" class="btn btn-primary">
                  Reset Password
                </button>
            </div>
            <span>Don't have an account? <a href="{{ route('register') }}">register</a></span>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection