<x-admin-layout>
    <div class="row align-items-center my-4">
        <div class="col">
          <h2 class="page-title">Edit Room</h2>
        </div>
      </div>

    <div class="card shadow mb-4">
        <div class="card-header">
          <strong class="card-title">Update Listing</strong>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ url('updateRental/'.$rental->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
              <label for="inputTitle" class="col-sm-3 col-form-label">Title</label>
              <div class="col-sm-9">
                <input type="text" name="title" class="form-control" value="{{$rental->title}}" >
                <x-input-error :messages="$errors->get('title')"
                  class="mt-2 text-danger" />
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPrice" class="col-sm-3 col-form-label">Price</label>
              <div class="col-sm-9">
                <input type="number" name="price" class="form-control" value="{{$rental->price}}">
                <x-input-error :messages="$errors->get('price')"
                  class="mt-2 text-danger" />
              </div>
            </div>
            <div class="form-group row">
              <label for="size" class="col-sm-3 col-form-label">Size</label>
              <div class="col-sm-9">
                <input class="form-control" name="size" value="{{$rental->size}}" type="text">
                <x-input-error :messages="$errors->get('size')"
                  class="mt-2 text-danger" />
              </div>
            </div>
            <div class="form-group row">
              <label for="occupancy" class="col-sm-3 col-form-label">Occupancy</label>
              <div class="col-sm-9">
                <input class="form-control" name="occupancy" value="{{$rental->occupacy}}" type="number">
                <x-input-error :messages="$errors->get('occupancy')"
                  class="mt-2 text-danger" />
              </div>
            </div>
            <div class="form-group row">
              <label for="features" class="col-sm-3 col-form-label">Features</label>
              <div class="form-group col-md-9">
                <select id="inputFeatures" name="features[]" class="form-control select-multiple" multiple="multiple">
                    @if($rental->features)
                        @foreach(explode(',', $rental->features) as $feature)
                        <option selected>{{ $feature }} </option>
                        @endforeach
                    @endif
                  <option>Projector</option>
                  <option>Television</option>
                  <option>Screen</option>
                  <option>Board</option>
                  <option>Chairs</option>
                  <option>Speakers</option>
                  <option>Microphone</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="features" class="col-sm-3 col-form-label">Room Images</label>
              <div class="col-sm-9">
                <input class="form-control" name="images[]" multiple id="images" type="file">
                <div>
                    @foreach($rental->rentalimages as $img)

                    <img class="me-3 rounded" src="{{ asset('asset/image/'.$img->image) }}"
                        width="100">
                    @endforeach
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3" for="exampleFormControlTextarea1">Description</label>
              <div class="col-sm-9">
                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="2">{{$rental->description}}</textarea>
                <x-input-error :messages="$errors->get('description')"
                  class="mt-2 text-danger" />
              </div>
            </div>
            <div class="form-group mb-2">
              <button type="submit" class="btn btn-primary">Update Room</button>
            </div>
          </form>
        </div>
      </div>

      
</x-admin-layout>