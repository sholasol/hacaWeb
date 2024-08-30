<x-admin-layout>
    <div class="row align-items-center my-4">
        <div class="col">
          <h2 class="page-title">Create Gallery Item</h2>
        </div>
      </div>

    <div class="card shadow mb-4">
        <div class="card-header">
          <strong class="card-title">Create Gallery Item</strong>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('createGallery') }}" enctype="multipart/form-data">
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
                <input type="date" name="created" class="form-control" id="created">
                <x-input-error :messages="$errors->get('created')"
                  class="mt-2 text-danger" />
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPrice" class="col-sm-3 col-form-label">Published Date</label>
              <div class="col-sm-9">
                <input type="date" name="publish" class="form-control" id="publish">
                <x-input-error :messages="$errors->get('publish')"
                  class="mt-2 text-danger" />
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPrice" class="col-sm-3 col-form-label">Length</label>
              <div class="col-sm-9">
                <input type="text" name="length" class="form-control" id="length">
                <x-input-error :messages="$errors->get('length')"
                  class="mt-2 text-danger" />
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPrice" class="col-sm-3 col-form-label">Price</label>
              <div class="col-sm-9">
                <input type="number" name="price" class="form-control" id="price">
                <x-input-error :messages="$errors->get('price')"
                  class="mt-2 text-danger" />
              </div>
            </div>

            <div class="form-group row">
              <label for="inputPrice" class="col-sm-3 col-form-label">File Type</label>
              <div class="col-sm-9">
                <select name="type" class="form-control" required>
                  <option value="">Select Type</option>
                  <option>Audio</option>
                  <option>Video</option>
                </select>
                <x-input-error :messages="$errors->get('type')"
                  class="mt-2 text-danger" />
              </div>
            </div>

            <div class="form-group row">
              <label for="inputPrice" class="col-sm-3 col-form-label">File Format</label>
              <div class="col-sm-9">
                <select name="format" class="form-control" >
                  <option value="">Select Format</option>
                  <option>MP3</option>
                  <option>WMA</option>
                  <option>MP4</option>
                  <option>MPG</option>
                  <option>MPEG</option>
                  <option>MPV</option>
                  <option>AMV</option>
                  <option>AVI</option>
                  <option>WEBM</option>
                  <option>JPEG</option>
                  <option>JPG</option>
                  <option>PNG</option>
                  <option>WEBP</option>
                </select>
                <x-input-error :messages="$errors->get('format')"
                  class="mt-2 text-danger" />
              </div>
            </div>

            <div class="form-group row">
              <label for="inputPrice" class="col-sm-3 col-form-label">Copy </label>
              <div class="col-sm-9">
                <select name="copy" class="form-control">
                  <option value="">Select Copy</option>
                  <option>Physical</option>
                  <option>Digital</option>
                </select>
                <x-input-error :messages="$errors->get('copy')"
                  class="mt-2 text-danger" />
              </div>
            </div>

            <div class="form-group row">
              <label for="inputPrice" class="col-sm-3 col-form-label">Listening </label>
              <div class="col-sm-9">
                <select name="listening" class="form-control" >
                  <option value="">Select Listening</option>
                  <option>Yes</option>
                  <option>No</option>
                </select>
                <x-input-error :messages="$errors->get('listening')"
                  class="mt-2 text-danger" />
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPrice" class="col-sm-3 col-form-label">Download </label>
              <div class="col-sm-9">
                <select name="download" class="form-control" >
                  <option value="">Select Download</option>
                  <option>Yes</option>
                  <option>No</option>
                </select>
                <x-input-error :messages="$errors->get('download')"
                  class="mt-2 text-danger" />
              </div>
            </div>

            <div class="form-group row">
              <label for="features" class="col-sm-3 col-form-label">YouTube Url</label>
              <div class="col-sm-9">
                <input class="form-control" name="youtube"  id="youtube" type="text" >
                <x-input-error :messages="$errors->get('youtube')"
                    class="mt-2 text-danger" />
              </div>
            </div>
            
            <div class="form-group row">
              <label for="features" class="col-sm-3 col-form-label">Upload file</label>
              <div class="col-sm-9">
                <input class="form-control" name="file"  id="file" type="file" >
                <x-input-error :messages="$errors->get('file')"
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
              <button type="submit" class="btn btn-primary">Create</button>
            </div>
          </form>
        </div>
      </div>

      
</x-admin-layout>