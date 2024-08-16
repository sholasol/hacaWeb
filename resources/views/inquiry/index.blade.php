<x-admin-layout>
    <div class="col-md-12">
      <h2 class="page-title mt-5 mb-2">Public Inquiries</h2>
        <div class="card shadow">
          <div class="card-body">
            <!-- table -->
            <table class="table datatables" id="dataTable-1" style="color: #000;">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Message</th>
                  <th>Created</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $key => $member )
                    
                
                <tr>
                  <td>{{$key + 1}}</td>
                  <td>{{$member->name}}</td>
                  <td>{{$member->email}}</td>
                  <td>{{$member->subject}}</td>
                  <td>{{$member->message}}</td>
                  <td>{{$member->created_at->DiffForHumans()}}</td>
                  <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Edit</a>
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