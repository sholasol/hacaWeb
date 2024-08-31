<x-admin-layout>
    <div class="row align-items-center my-4">
        <div class="col">
          <h2 class="page-title">Update Staff</h2>
        </div>
      </div>

    <div class="card shadow mb-4">
        <div class="card-header">
          <strong class="card-title">Update Staff</strong>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ url('updateStaff/'.$staff->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
              <label for="inputTitle" class="col-sm-3 col-form-label">Firstname</label>
              <div class="col-sm-9">
                <input type="text" name="firstname" class="form-control" value="{{$staff->firstname}}" id="inputName" required>
                <x-input-error :messages="$errors->get('firstname')"
                  class="mt-2 text-danger" />
              </div>
            </div>
            <div class="form-group row">
              <label for="inputTitle" class="col-sm-3 col-form-label">Lastname</label>
              <div class="col-sm-9">
                <input type="text" name="lastname" class="form-control" value="{{$staff->lastname}}" id="inputName" required>
                <x-input-error :messages="$errors->get('lastname')"
                  class="mt-2 text-danger" />
              </div>
            </div>
            <div class="form-group row">
              <label for="inputTitle" class="col-sm-3 col-form-label">Role</label>
              <div class="col-sm-9">
                <select class="form-control" name="type">
                  <option value="{{$staff->type}}">{{$staff->type}}</option>
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
                <input type="email" name="email" class="form-control" value="{{$staff->email}}" required>
                <x-input-error :messages="$errors->get('email')"
                  class="mt-2 text-danger" />
              </div>
            </div>
            
            <div class="form-group row">
              <label for="features" class="col-sm-3 col-form-label">Profile Image</label>
              <div class="col-sm-9">
                <input class="form-control" name="avatar"  id="avatar" type="file">
                @if($staff->avatar)
                <div class="mt-2">
                    <img src="{{ asset('asset/image/' . $staff->avatar) }}" alt="Cover Image"
                        style="width: 200px;">
                </div>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <label for="features" class="col-sm-3 col-form-label">Phone</label>
              <div class="col-sm-9">
                <input class="form-control" name="phone" value="{{$staff->phone}}"  id="phone" type="text" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3" for="exampleFormControlTextarea1">Address</label>
              <div class="col-sm-9">
                <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="2" required>
                   {{$staff->address}}
                </textarea>
                <x-input-error :messages="$errors->get('address')"
                  class="mt-2 text-danger" />
              </div>
            </div>
            <div class="form-group mb-2">
              <button type="submit" class="btn btn-primary">Update Staff</button>
            </div>
          </form>
        </div>
      </div>

      
</x-admin-layout>