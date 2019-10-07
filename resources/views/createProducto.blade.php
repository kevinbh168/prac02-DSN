@extends('app')
@section('title','Crear producto')
@section('content')
<div class="container" style="margin-top: 70px">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
	 <div class="card" style="padding: 15px;">
	<form method="POST" enctype="multipart/form-data">
    @csrf
		<div class="form-group">
    <label for="inputEmail3" >Nombre</label>
      <input type="text" class="form-control" id="inputEmail3" placeholder="Ingresar Nombre" name="nameProducto">
  </div>
  <div class="form-group">
    <label for="inputEmail3">Precio</label>
      <input type="text" class="form-control" id="inputEmail3" placeholder="Ingresar Precio" name="priceProducto">
  </div>
  <div class="form-group">
    <label for="inputEmail3" >Categoria</label>
      <input type="text" class="form-control" id="inputEmail3" placeholder="Ingresar Categoria" name="categoryProducto">
  </div>
   <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripción</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="descriptionProducto" rows="5" placeholder="Ingresar una pequeña descripcion" maxlength="190"></textarea>
  </div>
  	<div class="form-group">
    <label for="exampleFormControlFile1">Insertar archivo</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
  	</div>
  	 <button type="submit" class="btn btn-primary">Crear</button>
</form>
</div>
</div>
<div class="col-md-3"></div>
</div>
</div>
@endsection