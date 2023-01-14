@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Crear Producto</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                       
                        {{!!Form::open(array('route'=>'petshop.store', 'method'=>'POST'))!!}}
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    {{!!Form::text('nombre', null, array('class'=>'form-control'))!!}}
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="descripcion">Descripcion</label>
                                    {{!!Form::text('descripcion', null, array('class'=>'form-control'))!!}}
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="precio">Precio</label>
                                    {{!!Form::text('precio', null, array('class'=>'form-control'))!!}}
                                </div>
                            </div>



                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>

                        </div>


                        {{!!Form::close()!!}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection