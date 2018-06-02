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
            <th><a href="/spareparts/create"><button type="button" class="btn btn-success btn-sm"><i class="fas fa-plus fa-fw"></i></button><a/></th>
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

            <td>
            <a href="/spareparts/{{$sparepart->id}}/edit/"><button type="button" class="btn btn-warning btn-sm"><i class="far fa-edit fa-fw"></i></button></a>
            <form action="spareparts/{{$sparepart->id}}" method="POST">
              @method('DELETE')
              @csrf
              <button class="btn btn-danger btn-sm"><i class="far fa-trash-alt fa-fw"></i></button>
            </form>
              {{-- <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you wanna delete {{$sparepart->no}}')" href="{{ action('SparepartController@destroy',['id' => 1])}}"><i class="far fa-trash-alt"></i></a> --}}
            </td>
            
          </tr>
          @endforeach
        </tbody>
      </table>
      @endsection
