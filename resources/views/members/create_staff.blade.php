<x-admin-layout>
    <div class="row align-items-center my-4">
        <div class="col">
          <h2 class="page-title">Create Staff</h2>
        </div>
      </div>

    <div class="card shadow mb-4">
        <div class="card-header">
          <strong class="card-title">Create Staff</strong>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('createStaff') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
              <label for="inputTitle" class="col-sm-3 col-form-label">Firstname</label>
              <div class="col-sm-9">
                <input type="text" name="firstname" class="form-control" id="inputName" required>
                <x-input-error :messages="$errors->get('firstname')"
                  class="mt-2 text-danger" />
              </div>
            </div>
            <div class="form-group row">
              <label for="inputTitle" class="col-sm-3 col-form-label">Lastname</label>
              <div class="col-sm-9">
                <input type="text" name="lastname" class="form-control" id="inputName" required>
                <x-input-error :messages="$errors->get('lastname')"
                  class="mt-2 text-danger" />
              </div>
            </div>
            <div class="form-group row">
              <label for="inputTitle" class="col-sm-3 col-form-label">Role</label>
              <div class="col-sm-9">
                <select class="form-control" name="type">
                  <option value="">Select Role</option>
                  <option value="admin">Admin</option>
                  <option value="staff">Staff</option>
                  <option value="trustee">Trustee</option>
                </select>
                <x-input-error :messages="$errors->get('type')"
                  class="mt-2 text-danger" />
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPrice" class="col-sm-3 col-form-label">Email</label>
              <div class="col-sm-9">
                <input type="email" name="email" class="form-control" required>
                <x-input-error :messages="$errors->get('email')"
                  class="mt-2 text-danger" />
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPrice" class="col-sm-3 col-form-label">Password</label>
              <div class="col-sm-9">
                <input type="password" name="password" class="form-control" required>
                <x-input-error :messages="$errors->get('password')"
                  class="mt-2 text-danger" />
              </div>
            </div>
            
            <div class="form-group row">
              <label for="features" class="col-sm-3 col-form-label">Profile Image</label>
              <div class="col-sm-9">
                <input class="form-control" name="avatar"  id="avatar" type="file">
              </div>
            </div>
            <div class="form-group row">
              <label for="features" class="col-sm-3 col-form-label">Phone</label>
              <div class="col-sm-9">
                <input class="form-control" name="phone"  id="phone" type="text" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3" for="exampleFormControlTextarea1">Address</label>
              <div class="col-sm-9">
                <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="2" required></textarea>
                <x-input-error :messages="$errors->get('address')"
                  class="mt-2 text-danger" />
              </div>
            </div>
            <div class="form-group mb-2">
              <button type="submit" class="btn btn-primary">Create Staff</button>
            </div>
          </form>
        </div>
      </div>

      
</x-admin-layout>