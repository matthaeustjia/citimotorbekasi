@extends('layouts.sidebar')
@section('content')
<h2>Edit Spare Part</h2>
<form method="POST" action="/spareparts/{{$sparepart->id}}" >
    @method('PATCH')
    @csrf
        <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="validationCustom01">No</label>
          <input type="text" class="form-control" name="no" id="no" value="{{$sparepart->no}}" required>
          </div>
          <div class="col-md-4 mb-3">
                <label for="validationCustom02">Tipe</label>
                <input type="text" class="form-control" name="type" id="type" value="{{$sparepart->type}}" required>
          </div>
          <div class="col-md-4 mb-3">
                <label for="validationCustom01">Mobil</label>
                <input type="text" class="form-control" name="car" id="car" value="{{$sparepart->car}}" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Harga Jual</label>
                <input type="number" class="form-control" name="sellingprice" id="sellingprice" value="{{$sparepart->sellingprice}}" required>
              </div>
              <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Harga Beli</label>
                    <input type="number" class="form-control" name="buyingprice" id="buyingprice" value="{{$sparepart->buyingprice}}" required>
              </div>    
                <button class="btn btn-primary" type="submit">Submit form</button>
                <button class="btn btn-warning" type="reset">Reset form</button>
        </div>
      </form>
@include('layouts.validationerror')
@endsection