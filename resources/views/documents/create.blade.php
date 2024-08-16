<x-admin-layout>
    <div class="row align-items-center my-4">
        <div class="col">
          <h2 class="page-title">Create Document</h2>
        </div>
      </div>

    <div class="card shadow mb-4">
        <div class="card-header">
          <strong class="card-title">Create Document</strong>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('createDoc') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
              <label for="inputTitle" class="col-sm-3 col-form-label">Title</label>
              <div class="col-sm-9">
                <input type="text" name="title" class="form-control" id="inputtitle" required>
                <x-input-error :messages="$errors->get('title')"
                  class="mt-2 text-danger" />
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPrice" class="col-sm-3 col-form-label">Created Date</label>
              <div class="col-sm-9">
                <input type="date" min="{{date('Y-m-d')}}" name="date" class="form-control" id="date" required>
                <x-input-error :messages="$errors->get('date')"
                  class="mt-2 text-danger" />
              </div>
            </div>
            
            <div class="form-group row">
              <label for="features" class="col-sm-3 col-form-label">Upload Document</label>
              <div class="col-sm-9">
                <input class="form-control" name="doc"  id="doc" type="file" required>
                <x-input-error :messages="$errors->get('doc')"
                    class="mt-2 text-danger" />
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3" for="exampleFormControlTextarea1">Description</label>
              <div class="col-sm-9">
                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                <x-input-error :messages="$errors->get('description')"
                  class="mt-2 text-danger" />
              </div>
            </div>
            <div class="form-group mb-2">
              <button type="submit" class="btn btn-primary">Upload Document</button>
            </div>
          </form>
        </div>
      </div>

      
</x-admin-layout>