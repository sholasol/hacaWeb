<x-admin-layout>
    <div class="row align-items-center my-4">
        <div class="col">
          <h2 class="page-title">Create Event</h2>
        </div>
      </div>

    <div class="card shadow mb-4">
        <div class="card-header">
          <strong class="card-title">Create Event</strong>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ url('updateEvent/'.$event->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
              <label for="inputTitle" class="col-sm-3 col-form-label">Name</label>
              <div class="col-sm-9">
                <input type="text" name="name" class="form-control" value="{{$event->name}}" >
                <x-input-error :messages="$errors->get('name')"
                  class="mt-2 text-danger" />
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPrice" class="col-sm-3 col-form-label">Event Date</label>
              <div class="col-sm-9">
                <input type="date" name="date" class="form-control" value="{{$event->date}}">
                <x-input-error :messages="$errors->get('date')"
                  class="mt-2 text-danger" />
              </div>
            </div>
            
            <div class="form-group row">
              <label for="features" class="col-sm-3 col-form-label">Cover Image</label>
              <div class="col-sm-9">
                <input class="form-control" name="img"  id="img" type="file">
                @if ($event->image)
                    <div>
                        <img width="60" height="50" class="rounded" 
                            src="{{asset('asset/image/'.$event->image)}}" alt="">
                    </div>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="features" class="col-sm-3 col-form-label">Upload Images (<small>Maximum of 5</small>)</label>
              <div class="col-sm-9">
                <input class="form-control" name="images[]"  id="images" type="file" multiple>
                <div class="mt-2">
                  @foreach($event->eventImages as $img)
  
                  <img class="me-3 rounded" src="{{ asset('asset/image/'.$img->image) }}"
                      width="100">
                  @endforeach
              </div>
              </div>
            </div>


            <div class="form-group row">
              <label class="col-sm-3" for="exampleFormControlTextarea1">Description</label>
              <div class="col-sm-9">
                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="2">{{$event->description}}</textarea>
                <x-input-error :messages="$errors->get('description')"
                  class="mt-2 text-danger" />
              </div>
            </div>
            <div class="form-group mb-2">
              <button type="submit" class="btn btn-primary">Update Event</button>
            </div>
          </form>
        </div>
      </div>

      
</x-admin-layout>