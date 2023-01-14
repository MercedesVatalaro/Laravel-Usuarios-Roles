@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Plataforma de administración de roles y usuarios</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">


                            <div class="col-md-4 col-xl-4">
                                <div class="card bg-c-blue order-card">
                                    <div class="card-block">
                                        <h5 class="text-white">Usuarios</h5>
                                        @php
                                        use App\Models\User;
                                        $cant_usuarios = User::count();
                                        @endphp
                                        <h2 class="text-right"><i class="fa fa-users f-left"></i><span>{{$cant_usuarios}}</span></h2>
                                        <p class="m-b-0 text-right"><a href="/usuarios" class="text-blue">Ver más</a></p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 col-xl-4">
                                <div class="card bg-c-green order-card">
                                    <div class="card-block">
                                        <h5 class="text-white">Roles</h5>
                                        @php
                                        use Spatie\Permission\Models\Role;
                                        $cant_roles = Role::count();
                                        @endphp
                                        <h2 class="text-right"><i class="fa fa-users f-left"></i><span>{{$cant_roles}}</span></h2>
                                        <p class="m-b-0 text-right"><a href="/roles" class="text-blue">Ver más</a></p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 col-xl-4">
                                <div class="card bg-c-pink order-card">
                                    <div class="card-block">
                                        <h5 class="text-white">PetShop</h5>
                                        @php
                                        use App\Models\Petshop;
                                        $cant_products = Petshop::count();
                                        @endphp
                                        <h2 class="text-right"><i class="fa fa-users f-left"></i><span>{{$cant_products}}</span></h2>
                                        <p class="m-b-0 text-right"><a href="/petshop" class="text-blue">Ver más</a></p>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
