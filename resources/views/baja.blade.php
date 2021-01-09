@extends('operaciones')
@section('operations')


<div class="container-fluid">
<form action="{{ route('baja') }}">
    <div class="row border">
         <div class="col-sm d-flex justify-content-end">
             Etiqueta de Baja
        </div>

      <div class="col-sm">
    <input type="text" name="etiqueta" placeholder="CAS" required>
      </div>

    </div>
   <center><button type="submit" class="btn btn-outline-primary my-2">Buscar</button></center> 
</form>






@foreach ($casx as $item)



{{ $item->modeo }}
@endforeach
    




</div>
@endsection