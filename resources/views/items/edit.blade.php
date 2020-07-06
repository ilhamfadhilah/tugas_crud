@extends('adminlte.master');
@section('content')
{{-- <h3>hallo</h3> --}}
<div class="ml-3 mt-3 mr-3">
    <div class="card card-primary">

        <div class="card-header">
          <h3 class="card-title">Edit Item</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
    <form role="form" action="/items/{{$item->id}}" method="POST">
            @csrf
            @method('PUT')  <!--- syntax perintah untuk mehtod put metode untuk put -->



            <div class="card-body">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" value="{{$item->name}}" name="name" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" class="form-control" id="description" value="{{$item->description}}" name="description" placeholder="Description">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" value="{{$item->price}}" name="price" placeholder="Price">
              </div>
            <div class="form-group">
              <label for="stock">Stock</label>
              <input type="number" class="form-control" id="stock" value="{{$item->stock}}" name="stock" placeholder="Stock Items">
            </div>

          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
    </div>
@endsection
