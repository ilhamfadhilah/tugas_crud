@extends('adminlte.master')

@section('content')
<h2>Ini halaman create</h2>
@endsection

@push('scripts')
<script src="{{asset('/adminlte/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endpush
