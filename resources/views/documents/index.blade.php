<x-admin-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10">
            <div class="row align-items-center my-4">
              <div class="col">
                <h2 class="page-title">Document Files</h2>
              </div>
              <div class="col-auto">
                <a href="/create_document" class="btn btn-lg btn-primary"><span class="fe fe-plus fe-16 mr-3"></span>New</a>
              </div>
            </div>
            <h6 class="mb-3">Quick Access</h6>
            <div class="card-deck mb-4">
              <div class="card border-0 bg-transparent">
                <img src="{{asset('admin/assets/products/p4.jpg')}}" alt="..." class="card-img-top img-fluid rounded">
                <div class="card-body">
                  <h5 class="h6 card-title mb-1">Fusion Backpack</h5>
                </div>
              </div> <!-- .card -->
              <div class="card border-0 bg-transparent">
                <img src="{{asset('admin/assets/products/p1.jpg')}}" alt="..." class="card-img-top img-fluid rounded">
                <div class="card-body">
                  <h5 class="h6 card-title mb-1">Luma hoodies</h5>
                </div>
              </div> <!-- .card -->
              <div class="card border-0 bg-transparent">
                <img src="{{asset('admin/assets/products/p2.jpg')}}" alt="..." class="card-img-top img-fluid rounded">
                <div class="card-body">
                  <h5 class="h6 card-title mb-1">Luma shorts</h5>
                </div>
              </div> <!-- .card -->
              <div class="card border-0 bg-transparent">
                <img src="{{asset('admin/assets/products/p3.jpg')}}" alt="..." class="card-img-top img-fluid rounded">
                <div class="card-body">
                  <h5 class="h6 card-title mb-1">Brown Trousers</h5>
                </div>
              </div> <!-- .card -->
              <div class="card border-0 bg-transparent">
                <img src="{{asset('admin/assets/products/p3.jpg')}}" alt="..." class="card-img-top img-fluid rounded">
                <div class="card-body">
                  <h5 class="h6 card-title mb-1">Brown Trousers</h5>
                </div>
              </div> <!-- .card -->
            </div> <!-- .card-deck -->
            <div class="row align-items-center mb-3 border-bottom no-gutters">
              <div class="col">
                <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Documents</a>
                  </li>
                </ul>
              </div>
            </div>
            <table class="table table-borderless table-striped">
              <thead>
                <tr>
                  <th></th>
                  <th class="w-30">Document Title</th>
                  <th class="w-50">Description</th>
                  <th>Date Created</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($docs as $key=> $doc)
                <tr>
                  <td class="text-center">
                    <div class="circle circle-sm bg-light">
                      <span class="fe fe-folder fe-16 text-muted"></span>
                    </div>
                    <span class="dot dot-md bg-success mr-1"></span>
                  </td>
                  <th scope="row">
                    {{$doc->title}}
                  </th>
                  <td>{{$doc->description}}</td>
                  <td>{{$doc->date}}</td>
                  <td>
                    <div class="file-action">
                      <button type="button" class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="text-muted sr-only">Action</span>
                      </button>
                      <div class="dropdown-menu m-2">
                        <a class="dropdown-item" href="#"><i class="fe fe-edit-3 fe-12 mr-4"></i>Edit</a>
                        <a class="dropdown-item" href="#"><i class="fe fe-trash fe-12 mr-4"></i>Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div>
                {{$docs->links()}}
            </div>
          </div>
        </div> <!-- .row -->
      </div>
</x-admin-layout>