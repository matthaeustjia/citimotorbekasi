@extends('layouts.sidebar')

@section('content')
 
<h3>Spare Parts</h3>
<table class="table">
        <thead>
          <tr>
            <th>No</th>
            <th>Mobil</th>
            <th>Merk</th>
            <th>Harga Jual</th>
            <th>Harga Beli</th>
            <th>Stock</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($spareparts as $sparepart)
          <tr>
            <td>{{ $sparepart->no }}</td>
            <td>{{ $sparepart->type }}</td>
            <td>{{ $sparepart->car }}</td>
            <td>{{ $sparepart->sellingprice }}</td>
            <td>{{ $sparepart->buyingprice }}</td>
            <td>{{ $sparepart->buyingprice }}</td>
            <td><button type="button" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></button>
                <button type="button" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
            </td>
            
          </tr>
          @endforeach
        </tbody>
      </table>
      @endsection
