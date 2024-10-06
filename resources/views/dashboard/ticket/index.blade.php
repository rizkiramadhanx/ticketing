<x-layout>
  <div>
    <h1 class="text-3xl font-bold">Dashboard</h1>
    <div class="mt-6 col-xl-12">
      <div class="card card-flush h-xl-100">
        <!--begin::Card header-->
        <div class="card-header pt-7">
          <!--begin::Title-->
          <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-dark">Data Tiket</span>
            <span class="text-gray-400 mt-1 fw-semibold fs-6">Total {{ $tickets->count() }} Items</span>
          </h3>
          <!--end::Title-->
          <!--begin::Actions-->
        </div>


        <div class="d-flex justify-content-start mt-6 mx-6">
          <a href="{{ route('ticket.create') }}" class="text-white">
            <button class="btn btn-primary">
              Add
            </button>
          </a>
        </div>
        <div class="card-body">
          <table class="table align-middle  table-row-dashed fs-6 gy-3">
            <thead>
              <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                <th class="text-start pe-3 min-w-100px">No</th>
                <th class="text-start pe-3 min-w-150px">Date</th>
                <th class="text-start pe-3 min-w-150px">Adress</th>
                <th class="text-start pe-3 min-w-150px">Note</th>
                <th class="text-start pe-3 min-w-150px">Status</th>
                <th class="text-start pe-3 min-w-150px">Actions</th>
              </tr>
            </thead>
            <tbody class="fw-bold text-gray-600">
              @foreach ($tickets as $ticket)
              <tr>
                <td>{{ $loop->iteration + 1 }}</td>
                <td>{{ Carbon\Carbon::parse($ticket->date)->format('d M Y')  }}</td>
                <td>{{ $ticket->name }}</td>
                <td>{{ $ticket->address }}</td>
                <td>{{ $ticket->note }}</td>
                <td></td>
                <td></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
</x-layout>