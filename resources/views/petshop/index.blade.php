@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">PetShop</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @can('crear-petProduct')
                        <a class="btn btn-warning" href="{{ route('petshop.create')}}">Nuevo Producto</a>
                        @endcan

                        <table class="table table-striped mt-2">

                            <thead style="background-color: #6777ef;">
                                <th style="display: none;">Id</th>
                                <th style="color:#fff;">Nombre</th>
                                <th style="color:#fff;">Descripcion</th>
                                <th style="color:#fff;">Precio</th>
                                <th style="color:#fff;">Acciones</th>
                            </thead>
                            <tbody>

                                @foreach($petProducts as $petProduct)
                                <tr>
                                    <td style="display:none;">{{$petProduct->id}}</td>
                                    <td>{{$petProduct->nombre}}</td>
                                    <td>{{$petProduct->descripcion}}</td>
                                    <td>{{$petProduct->precio}}</td>
                                    <td>
                                        <form action="{{ route('petshop.destroy',$petProduct->id) }}" method="POST">
                                            @can('editar-petProduct')
                                            <a class="btn btn-info" href="{{route('petshop.edit', $petProduct->id)}}">Editar</a>
                                            @endcan

                                            @csrf
                                            @method('DELETE')
                                            @can('borrar-petProduct')
                                            <button type="submit " class="btn btn-danger">Borrar</button>
                                            @endcan
                                        </form>


                                    </td>


                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                        <div class="pagination justify-content-end">
                            {!!$petProducts->links()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
