<x-admin-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10 col-xl-8">
            <h2 class="h3 mb-4 page-title">Settings</h2>
            <div class="my-4">
              <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile</a>
                </li>
              </ul>
             
                <div class="row mt-5 align-items-center">
                  <div class="col-md-3 text-center mb-5">
                    <div class="avatar avatar-xl">
                      <img src="{{asset('asset/image/'.auth()->user()->avatar)}}" alt="..." class="avatar-img rounded-circle">
                    </div>
                  </div>
                  <div class="col">
                    <div class="row align-items-center">
                      <div class="col-md-7">
                        <h4 class="mb-1">{{auth()->user()->firstname}}, {{auth()->user()->lastname}}</h4>
                        <p class="small mb-3"><span class="badge badge-dark">{{auth()->user()->phone}}/span></p>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="firstname">Firstname</label>
                    <input type="text" id="firstname" class="form-control" value="{{auth()->user()->firstname}}" readonly>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="lastname">Lastname</label>
                    <input type="text" id="lastname" class="form-control" value="{{auth()->user()->lastname}}" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail4">Email</label>
                  <input type="email" class="form-control" id="inputEmail4" value="{{auth()->user()->phone}}" readonly>
                </div>
                <div class="form-group">
                  <label for="inputAddress5">Address</label>
                  <input type="text" class="form-control" id="inputAddress5" value="{{auth()->user()->address}}" readonly>
                </div>
                <hr class="my-4">
                <form method="post" action="{{ route('password.update') }}">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Email</label>
                            <input type="email" value="{{auth()->user()->email}}"
                                class="form-control" readonly>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Current Password</label>
                            <input name="current_password" type="password"
                                placeholder="Password" class="form-control">
                            <x-input-error
                                :messages="$errors->updatePassword->get('current_password')"
                                class="mt-2 text-danger" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">New Password</label>
                            <input type="password" name="password"
                                placeholder="Password" class="form-control">
                            <x-input-error
                                :messages="$errors->updatePassword->get('password')"
                                class="mt-2 text-danger" />
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" name="password_confirmation"
                                placeholder="Password" class="form-control">
                            <x-input-error
                                :messages="$errors->updatePassword->get('password_confirmation')"
                                class="mt-2 text-danger" />
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">Change
                        Password</button>
                </form>

                
            </div> <!-- /.card-body -->
          </div> <!-- /.col-12 -->
        </div> <!-- .row -->
      </div>
</x-admin-layout>