<x-layout>
  <div>
    <div class="row justify-content-center">
      <div class="col d-flex justify-content-start">
        <h1 style="font-size: 24px;font-weight: 600;">Create New Ticket</h1>
      </div>
    </div>
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
    <form
      action="{{ route('ticket.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-12 row col-md-6">
          <label class="col-12 col-form-label fw-semibold">Nama Tiket</label>
          <!--begin::Col-->
          <div class="col-12 fv-row">
            <input type="text" name="name" class="form-control form-control-lg" value="{{ old('name') }}" />
          </div>
          <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
        <div class="col-12 row col-md-6">
          <label class="col-12 col-form-label fw-semibold">Alamat</label>
          <!--begin::Col-->
          <div class="col-12 fv-row">
            <input type="text" name="address" class="form-control form-control-lg" value="{{ old('address') }}" />
          </div>
          <span class="text-danger">{{ $errors->first('address') }}</span>
        </div>
      </div>

      <div class="row">
        <div class="col-12 row col-md-6">
          <label class="col-12 col-form-label fw-semibold">Bidang</label>
          <!--begin::Col-->
          <select name="division_id" class="form-select" data-control="select2" data-placeholder="Select an option">
            @foreach ($divisions as $division)
            <option value="{{ $division->id }}">{{ $division->name }}</option>
            @endforeach
          </select>
          <span class="text-danger">{{ $errors->first('division_id') }}</span>
        </div>
        <div class="col-12 row col-md-6">
          <label class="col-12 col-form-label fw-semibold">Keperluan</label>
          <!--begin::Col-->
          <select name="ticket_type_id" class="form-select" data-control="select2" data-placeholder="Select an option">
            @foreach ($ticket_types as $ticket_type)
            <option value="{{ $ticket_type->id }}">{{ $ticket_type->name }}</option>
            @endforeach
          </select>
          <span class="text-danger">{{ $errors->first('ticket_type_id') }}</span>
        </div>
      </div>
      <div class="row">
        <div class="col-12 row col-md-6">
          <label class="col-12 col-form-label fw-semibold">Catatan</label>
          <!--begin::Col-->
          <div class="col-12 fv-row">
            <input type="text" name="note" class="form-control form-control-lg" value="{{ old('note') }}" />
          </div>
          <span class="text-danger">{{ $errors->first('note') }}</span>
        </div>
      </div>
      <div
        class="row mt-6 px-6">
        <button type="submit" class="btn btn-primary col-3">Submit</button>
      </div>
    </form>
  </div>
</x-layout>