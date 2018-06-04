@extends('layouts.sidebar')
@section('content')
<form method="POST" action="/customers/" >
    @csrf
        <div class="form-row">
          <div class="col-md-4 mb-3">
                <label for="validationCustom02">Nama</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nama" required>
          </div>
          <div class="col-md-4 mb-3">
                <label for="validationCustom01">Alamat</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="Alamat" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Telepon</label>
                <input type="number" class="form-control" name="phone" id="phone" placeholder="Telepon" required>
              </div>
              <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
              </div>    
                <button class="btn btn-primary" type="submit">Submit form</button>
                <button class="btn btn-warning" type="reset">Reset form</button>
        </div>
      </form>
@endsection
