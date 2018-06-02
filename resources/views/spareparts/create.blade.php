@extends('layouts.sidebar')
@section('content')
<h2>Add Spare Part</h2>
<form method="POST" action="/spareparts/" >
    @csrf
        <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="validationCustom01">No</label>
            <input type="text" class="form-control" name="no" id="no" placeholder="No" required>
          </div>
          <div class="col-md-4 mb-3">
                <label for="validationCustom02">Tipe</label>
                <input type="text" class="form-control" name="type" id="type" placeholder="Tipe" required>
          </div>
          <div class="col-md-4 mb-3">
                <label for="validationCustom01">Mobil</label>
                <input type="text" class="form-control" name="car" id="car" placeholder="Mobil" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Harga Jual</label>
                <input type="number" class="form-control" name="sellingprice" id="sellingprice" placeholder="Harga Jual" required>
              </div>
              <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Harga Beli</label>
                    <input type="number" class="form-control" name="buyingprice" id="buyingprice" placeholder="Harga Beli" required>
              </div>    
                <button class="btn btn-primary" type="submit">Submit form</button>
                <button class="btn btn-warning" type="reset">Reset form</button>
        </div>
      </form>
@include('layouts.validationerror')
@endsection