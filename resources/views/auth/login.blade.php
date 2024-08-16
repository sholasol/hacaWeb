<x-front-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <section class="vh-120" style="background-color: #0d9db5;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="{{asset('images/auth.jpg')}}"
                      alt="login form" class="img-fluid h-100" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
      
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <img src="{{asset('images/logo.jpg')}}" alt="hull afrocarrebean">
                          <span class="h1 fw-bold mb-0">HACA</span>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Membership Sign In</h5>
      
                        <div data-mdb-input-init class="form-outline mb-4">
                          <input type="email" name="email"  required id="form2Example17" class="form-control form-control-lg" />
                          <label class="form-label" for="form2Example17">Email address</label>
                          <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                        </div>
      
                        <div data-mdb-input-init class="form-outline mb-4">
                          <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" />
                          <label class="form-label" for="form2Example27">Password</label>
                          <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                        </div>
      
                        <div class="pt-1 mb-4">
                          <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="submit">Sign In</button>
                        </div>
      
                        <a class="small text-muted" href="#!">Forgot password?</a>
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="/register"
                            style="color: #393f81;">Register here</a></p>
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

</x-front-layout>
