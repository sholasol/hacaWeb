<x-admin-layout>
    <div class="col-md-12">
        <div class="row align-items-center my-4">
            <div class="col">
              <h2 class="page-title">Events</h2>
            </div>
            <div class="col-auto">
              <a href="/create_event" class="btn btn-lg btn-primary"><span class="fe fe-plus fe-16 mr-3"></span>New</a>
            </div>
          </div>
        <div class="card shadow">
          <div class="card-body">
            <!-- table -->
            <table class="table datatables" id="dataTable-1" style="color: #000;">
              <thead>
                <tr>
                  <th>#</th>
                  <th></th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Date</th>
                  <th width="10%">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $key => $event )
                <tr>
                  <td>{{$key + 1}}</td>
                 <td>
                  @if($event->image)
                  <img width="100" height="80" class="rounded" 
                  src="{{asset('asset/image/'.$event->image)}}" alt="">
                  @else
                  <img width="60" height="50" class="rounded" 
                    src="{{asset('asset/image/rental/rental.jpg')}}" alt="">
                    @endif
                </td>
                  <td>{{$event->name}}</td>
                  <td>{{$event->description}}</td>
                  <td>{{$event->date}}</td>
                  <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="/event/{{$event->id}}/edit">Edit</a>
                      <a class="dropdown-item" href="#">Delete</a>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
</x-admin-layout>