@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Editar Producto</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        
                        <form action="{{ route('petshop.update',$Petshop->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="nombre">Nombre</label>
                                   <input type="text" name="nombre" class="form-control" value="{{$Petshop->nombre}}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="descripcion">Descripcion<label>
                                   <input type="text" name="descripcion" class="form-control" value="{{$Petshop->descripcion}}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">                                                    
                                <div class="form-floating">
                                <label for="precio">Precio</label>
                                <input type="text" name="precio" class="form-control" value="{{$Petshop->precio}}">
                                </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Guardar</button>                            
                        </div>
                    </form>
                        
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
