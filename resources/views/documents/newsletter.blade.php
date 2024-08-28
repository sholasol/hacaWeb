<x-admin-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="row align-items-center my-3">
              <div class="col">
                <h2 class="page-title">Newsletters</h2>
              </div>
              <div class="col-auto">
                <a href="/createnews" class="btn btn-lg btn-primary"><span class="fe fe-plus fe-16 mr-3"></span>New</a>
              </div>
            </div>
            <div class="file-container border-top">
              <div class="file-panel mt-4">
                <h6 class="mb-3">Newsletter List</h6>
                <div class="row my-4 pb-4">
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
                      @foreach ($news as $key=> $doc)
                      <tr>
                        <td class="text-center">
                          <div class="circle circle-sm bg-light">
                            <span class="fe fe-folder fe-16 text-muted"></span>
                          </div>
                          <span class="dot dot-md bg-success mr-1"></span>
                        </td>
                        <th scope="row">
                          <a class="text-primary" href="{{asset('asset/image/'.$doc->doc)}}" target="_blank">
                            {{$doc->title}}
                        </a>
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
                      {{$news->links()}}
                  </div>
                </div> <!-- .row -->
            </div> <!-- .file-panel -->
              

            </div> <!-- .file-container -->
          </div> <!-- .col -->
        </div> <!-- .row -->
      </div>
</x-admin-layout>