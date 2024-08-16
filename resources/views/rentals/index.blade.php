<x-admin-layout>
    <div class="col-md-12">
        <div class="row align-items-center my-4">
            <div class="col">
              <h2 class="page-title">Room Rentals</h2>
            </div>
            <div class="col-auto">
              <a href="/create_rent" class="btn btn-lg btn-primary"><span class="fe fe-plus fe-16 mr-3"></span>New</a>
            </div>
          </div>
        <div class="card shadow">
          <div class="card-body">
            <!-- table -->
            <table class="table datatables" id="dataTable-1" style="color: #000;">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Price</th>
                  <th>Size</th>
                  <th>Occupancy</th>
                  <th>Status</th>
                  <th width="10%">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $key => $member )
                    
                
                <tr>
                  <td>{{$key + 1}}</td>
                  <td>
                    @if ($member->firstImage)
                      <img width="90" height="70" class="rounded" 
                      src="{{ asset('asset/image/'. $member->firstImage->image) }}" alt="">
                    @else
                      <img width="60" height="50" class="rounded" 
                      src="{{asset('asset/image/rental/rental.jpg')}}" alt="">
                    @endif
                     <span class="text-primary">{{$member->title}}</span>
                  </td>
                  <td>
                     <h4 class="text-primary">£{{number_format($member->price)}}</h4>
                  </td>
                  <td>{{$member->size}}</td>
                  <td>{{$member->occupacy}}</td>
                  <td>{{$member->status}}</td>
                  <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="/rental/{{$member->id}}/edit">Edit</a>
                      <a class="dropdown-item" href="#">Remove</a>
                      <a class="dropdown-item" href="#">Assign</a>
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