@extends('adminlte.master')

@section('content')

<div class="ml-3 mt-3">
<h3>Detail Item</h3>
<p>Item's name: {{$item -> name}}</p>
<p>Item's description: {{$item -> description}}</p>
<p>Item's price: {{$item -> price}}</p>
<p>Item's stock: {{$item -> stock}}</p>
</div>

@endsection
