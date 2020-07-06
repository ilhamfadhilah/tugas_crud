@extends('adminlte.master')

@section('content')
<div class="ml-3 mt-3">
       <h1>Data Items</h1>
       <a href="/items/create" class="btn btn-primary"> Create New Items</a>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>Name</th>
            <th>Description</th>
            <th style="width: 40px">Stock</th>
            <th style="width: 40px">Price</th>
           <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($items as $key => $item)

            <tr>
                <td> {{$key+1}} </td>
                <td> {{$item->name}} </td>
                <td> {{$item->description}} </td>
                <td> {{$item->price}} </td>
                <td> {{$item->stock}} </td>
                <td>
                <a href="/items/{{$item->id}}" class="btn btn-sm btn-info">show</a>
                <a href="/items/{{$item->id}}/edit" class="btn btn-sm btn-warning">
                    <i class="nav-icon fas fa-edit"></i>
                </a>
                <form action="/items/{{$item->id}}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
                </td>
            </tr>

            @endforeach
        </tbody>
      </table>


</div>

@endsection
  {{-- <table class="table">

        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th>price</th>
            <th>stock</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($items as $key => $item)

            <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item -> description }}</td>
            <td>{{ $item -> price }}</td>
            <td>{{ $item -> stock }}</td>
            </tr>

            @endforeach
        </tbody>
      </table> --}}
