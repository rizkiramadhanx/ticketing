<x-layout>
  <div>
    <h1 class="text-3xl font-bold">Dashboard</h1>
    <div class="mt-6 row gap-1">
      <div class="card card-flush col-12 col-md-6 col-lg-4">
        <!--begin::Card header-->
        <div class="card-header">
          <!--begin::Title-->
          <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-dark">Data Ticket</span>
            <span class="text-gray-400 mt-1 fw-semibold fs-6">Total {{ $countTickets }} Items</span>
          </h3>
          <!--end::Title-->
        </div>
        <!--begin::Actions-->
      </div>
      <div class="card card-flush col-12 col-md-6 col-lg-3">
        <!--begin::Card header-->
        <div class="card-header">
          <!--begin::Title-->
          <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-dark">Data User</span>
            <span class="text-gray-400 mt-1 fw-semibold fs-6">Total {{ $countUsers }} Items</span>
          </h3>
          <!--end::Title-->
        </div>
        <!--begin::Actions-->
      </div>
      <div class="card card-flush col-12 col-md-6 col-lg-4">
        <!--begin::Card header-->
        <div class="card-header">
          <!--begin::Title-->
          <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-dark">Data Type Tiket</span>
            <span class="text-gray-400 mt-1 fw-semibold fs-6">Total {{ $countTypeTickets }} Items</span>
          </h3>
          <!--end::Title-->
        </div>
        <!--begin::Actions-->
      </div>
    </div>
  </div>
</x-layout>