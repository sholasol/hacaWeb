<x-admin-layout>
    <div class="col-md-12">
        <div class="row align-items-center my-4">
            <div class="col">
              <h2 class="page-title">Staffs</h2>
            </div>
            <div class="col-auto">
              <a href="/create_staff" class="btn btn-lg btn-primary"><span class="fe fe-plus fe-16 mr-3"></span>New</a>
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
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Joined</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $key => $member )
                    
                
                <tr>
                  <td>{{$key + 1}}</td>
                  <td>
                    <img src="{{asset('asset/image/'.$member->avatar)}}" width="40" height="40" alt="">
                  </td>
                  <td>{{$member->firstname.' '.$member->lastname}}</td>
                  <td>{{$member->email}}</td>
                  <td>{{$member->phone}}</td>
                  <td>{{$member->address}}</td>
                  <td>{{$member->created_at->DiffForHumans()}}</td>
                  <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="/edit_staff/{{$member->id}}">Edit</a>
                      <a class="dropdown-item" href="/viewStaff/{{$member->id}}">Details</a>
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