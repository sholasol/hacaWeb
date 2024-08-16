<x-front-layout>

   <!-- Header Start -->
   <div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">About Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<div class="container-xxl py-5">
  <div class="container">

    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <h6 class="section-title bg-white text-center text-primary px-3">Join Our Business Partners</h6>
      <h1 class="mb-5">Together, we create ripples of positive change</h1>
  </div>

  <div class="row">
    <div class="col-md-4">
      <img src="{{asset('images/auth.jpg')}}"
      alt="login form" class="img-fluid h-100" style="border-radius: 1rem 0 0 1rem;" />
    </div>
    <div class="col-md-8">
      <div class="card shadow mb-4">
        <div class="card-header">
          <strong class="card-title">Basic form</strong>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('regBiz') }}">
            @csrf
            <div class="row mb-2">
              <div class="form-group col-md-6">
                <label for="inputName">Main Contact</label>
                <input type="text" name="contact" class="form-control" id="inputName" >
                <x-input-error :messages="$errors->get('contact')" class="mt-2 text-danger" />
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Business Title</label>
                <input type="text" name="title" class="form-control" id="inputPassword4">
                <x-input-error :messages="$errors->get('title')" class="mt-2 text-danger" />
              </div>
            </div>
            <div class="row mb-2">
              <div class="form-group col-md-6">
                <label for="inputCommunity">Community Name</label>
                <input type="text" name="community" class="form-control" id="inputCommunity" >
                <x-input-error :messages="$errors->get('community')" class="mt-2 text-danger" />
              </div>
              <div class="form-group col-md-6">
                <label for="inputZip">Fee (£35)</label>
                <input type="number" name="fee" value="35" class="form-control" id="inputZip" readonly>
              </div>
            </div>
            <div class="row mb-2">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail4">
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" name="password" class="form-control" id="inputPassword4">
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
              </div>
            </div>
            <div class="form-group mb-2">
              <label for="inputAddress">Address 1</label>
              <input type="text" name="address" class="form-control" id="inputAddress">
              <x-input-error :messages="$errors->get('address')" class="mt-2 text-danger" />
            </div>
            <div class="form-group mb-2">
              <label for="inputAddress2">Address 2</label>
              <input type="text" name="addres" class="form-control" id="inputAddress2">
            </div>
            <div class="row mb-2">
              <div class="form-group col-md-6">
                <label for="inputPhone">Tel/Mobile</label>
                <input type="text" name="phone" class="form-control" id="inputPhone">
                <x-input-error :messages="$errors->get('phone')" class="mt-2 text-danger" />
              </div>
              <div class="form-group col-md-6">
                <label for="inputWebsite">Website</label>
                <input type="text" name="website" class="form-control" id="inputWebsite">
              </div>
            </div>
            <div class="row mb-4">
              <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" name="city" class="form-control" id="inputCity">
              </div>
              <div class="form-group col-md-6">
                <label for="inputZip">Postcode</label>
                <input type="text" name="postcode" class="form-control" id="inputZip">
                <x-input-error :messages="$errors->get('postcode')" class="mt-2 text-danger" />
              </div>
              
            </div>
            <button type="submit" class="btn btn-primary">Register Membership</button>
          </form>
        </div>
      </div>
    </div>
  </div>

    
  </div>
</div>

   </x-front-layout>
