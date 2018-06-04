@extends('layouts.sidebar')
@section('content')
<h3>Customers</h3>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telp</th>
            <th><a href="/customers/create"><button type="button" class="btn btn-success btn-sm"><i class="fas fa-plus fa-fw"></i></button><a/></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach($customers as $customer)
            <td>{{ $customer->id }} </td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->address}}</td>
            <td>{{$customer->phone}}</td>
            <td>
                <a href="/customers/{{$customer->id}}/edit/"><button type="button" class="btn btn-warning btn-sm"><i class="far fa-edit fa-fw"></i></button></a>
                <form action="customers/{{$customer->id}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm"><i class="far fa-trash-alt fa-fw"></i></button>
                </form>
            </td>
        </tr>
            @endforeach
    </tbody>
</table>
@endsection