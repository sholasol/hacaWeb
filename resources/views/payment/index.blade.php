<x-admin-layout>
    <div class="col-md-12">
      <h2 class="page-title mt-5 mb-2">Payments</h2>
        <div class="card shadow">
          <div class="card-body">
            <!-- table -->
            <table class="table datatables" id="dataTable-1" style="color: #000;">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Amount</th>
                  <th>Product</th>
                  <th>Type</th>
                  <th>Method</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $key => $pay )
                    
                
                <tr>
                  <td>{{$key + 1}}</td>
                  <td>{{$pay->customer}}</td>
                  <td>{{$pay->email}}</td>
                  <td>{{$pay->price}}</td>
                  <td>{{ucwords($pay->product)}}</td>
                  <td>{{ucwords($pay->type)}}</td>
                  <td>{{$pay->method}}</td>
                  <td>{{$pay->created_at->DiffForHumans()}}</td>
                  <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="/payInvoice/{{$pay->id}}">Invoice</a>
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