<x-layout>
  <div>
    <div class="row justify-content-center">
      <div class="col d-flex justify-content-start">
        <h1 style="font-size: 24px;font-weight: 600;">Create New Division</h1>
      </div>
    </div>
    <form
      action="{{ route('division.update', $division->id) }}"
      method="POST">
      @csrf

      <div class="row">
        <div class="col-12 row col-md-6">
          <label class="col-12 col-form-label fw-semibold">Name</label>
          <!--begin::Col-->
          <div class="col-12 fv-row">
            <input type="text" name="name" class="form-control form-control-lg" value="{{ old('name', $division->name) }}" />
          </div>
          <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
        <div
          class="row mt-6 px-6">
          <button type="submit" class="btn btn-primary col-3">Submit</button>
        </div>
      </div>
    </form>
  </div>
</x-layout>