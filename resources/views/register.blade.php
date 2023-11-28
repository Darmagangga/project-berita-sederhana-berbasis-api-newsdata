@extends('navbar')
@section('isi')
<section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
  
              <h3 class="mb-5">Register</h3>
              <form action="/register" method="post">
                @csrf
                <div class="form-outline mb-4">
                    <label class="form-label" for="typeEmailX-2">Username</label>
                  <input type="name" id="name" name="name" class="form-control form-control-lg" />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="typeEmailX-2">Email</label>
                  <input type="email" id="email" name="email" class="form-control form-control-lg" />
                </div>

    
                <div class="form-outline mb-4">
                    <label class="form-label" for="typePasswordX-2">Password</label>
                  <input type="password" id="password" name="password" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                    <button class="btn btn-primary btn-lg btn-block" style="width: 430px;" type="submit">Daftar</button>
                </div>
              </form>
              <p>Sudah Punya Akun ? <a href="">Login</a></p>
  
              <hr class="my-4">
  
              <button class="btn btn-lg btn-block btn-primary mb-3" style="background-color: #dd4b39;width: 430px;"
                type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
              <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;width: 430px;"
                type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
@endsection