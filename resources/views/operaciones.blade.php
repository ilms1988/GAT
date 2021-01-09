@extends('plantilla')
@section('plant')
<a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">INICIO</a>
<div class="container">
    <div class="row border-top my-3">
      <div class="col-sm-4 d-flex justify-content-center">
       <a href="" class="btn btn-success">ABM Alta</a> 
      </div>
      <div class="col-sm-4 d-flex justify-content-center">
        <a href="{{route('baja')}}" class="btn btn-danger">ABM Baja</a>
      </div>
      <div class="col-sm-4 d-flex justify-content-center">
          <a href="" class="btn btn-warning">ABM Movimientos</a> 
      </div>
    </div>
  </div>
  @yield('operations')

@endsection