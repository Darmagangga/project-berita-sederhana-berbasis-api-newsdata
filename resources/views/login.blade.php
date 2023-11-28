@extends('navbar')
@section('isi')
<section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
  
              <h3 class="mb-5">Sign in</h3>
              <form action="/login" method="post">
                @csrf
                <div class="form-outline mb-4">
                    <label class="email" for="typeEmailX-2">Email</label>
                  <input type="email" id="email" name="email" class="form-control form-control-lg" />
                </div>
    
                <div class="form-outline mb-4">
                    <label class="password" for="typePasswordX-2">Password</label>
                  <input type="password" id="password" name="password" class="form-control form-control-lg" />
                </div>
    
                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-start mb-4">
                  <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                  <label class="form-check-label" style="margin-left: 10px;" for="form1Example3"> Remember password </label>
                </div>

                <div class="form-outline mb-4">
                    <button class="btn btn-primary btn-lg btn-block" style="width: 430px;" type="submit">Login</button>
                </div>
              </form>

              <p>Belum Punya Akun ? <a href="/register">Daftar</a></p>
  
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