<x-layout>
  <div>
    <div class="row justify-content-center">
      <div class="col d-flex justify-content-start">
        <h1 style="font-size: 24px;font-weight: 600;">Master Bidang</h1>
      </div>
    </div>
    <div class="mt-6">
      @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
      @endif
      @if (session('error'))
      <div class="alert alert-danger">
        {{ session('error') }}
      </div>
      @endif
      @if (session('warning'))
      <div class="alert alert-warning">
        {{ session('warning') }}
      </div>
      @endif
    </div>
    <div class="mt-6">
      <div class="card card-flush h-xl-100">
        <!--begin::Card header-->
        <div class="card-header pt-7">
          <!--begin::Title-->
          <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-dark">Data Ticket</span>
            <span class="text-gray-400 mt-1 fw-semibold fs-6">Total {{ $divisions->count() }} Items</span>
          </h3>
          <!--end::Title-->
        </div>
        <!--begin::Actions-->
        <div class="d-flex justify-content-start mt-6 mx-6">
          <a href="{{ route('division.create') }}" class="text-white">
            <button class="btn btn-primary">
              Add
            </button>
          </a>
        </div>


        <!--end::Card header-->
        <div class="card-body">
          <table class="table align-middle  table-row-dashed fs-6 gy-3">
            <thead>
              <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                <th class="text-start pe-3 min-w-100px">No</th>
                <th class="text-start pe-3 min-w-150px">Name</th>
                <th class="text-start pe-3 min-w-150px">Action</th>
              </tr>
            </thead>
            <tbody class="fw-bold text-gray-600">
              @foreach ($divisions as $division)
              <tr>
                <td>
                  {{ $loop->iteration }}
                </td>
                <td>
                  {{ $division->name }}
                </td>
                <td>
                  <a href="{{ route('division.edit', $division->id) }}" class="btn btn-sm btn-primary">Edit</a>
                  <button type="button" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users" class="btn btn-sm btn-danger btn-active-danger-primary">Delete</button>
                  <div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered">
                      <!--begin::Modal content-->
                      <div class="modal-content">
                        <!--begin::Modal header-->

                        <!--begin::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body mt-10 mx-5 mx-xl-18 pt-0 pb-15">
                          <!--begin::Heading-->
                          <div class="text-center mb-13">
                            <!--begin::Title-->
                            <h1 style="font-size: x-large;" text>Are you sure?</h1>
                            <!--end::Title-->
                          </div>

                          <div class="d-flex flex-center gap-3">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                            <!-- button confirm -->
                            <form action="{{ route('division.destroy', $division->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                          </div>
                          <!--end::Heading-->
                          <!--begin::Actions-->
                          <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                      </div>
                      <!--end::Modal dialog-->
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
          </table>
        </div>
      </div>
    </div>


  </div>
</x-layout>