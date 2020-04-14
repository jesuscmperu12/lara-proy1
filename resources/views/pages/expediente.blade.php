@extends('layouts.app')

@section('estilos')

    <link rel="stylesheet" type="text/css" href="{{ url('css/datatables.css') }}"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.8.0/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/alertifyjs/1.8.0/css/themes/bootstrap.min.css"/>
   

@endsection

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Expediente</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->    

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="btn-derecha col-md-5 col-sm-5 col-xs-12 pull-right top_search">
                <button id="btn-nuevo-cliente" type="button" class="btn btn-success" >
                    <i class="fa fa-plus-circle fa-fw" aria-hidden="true"></i> Nuevo</button>

            </div>            
        </div>
        <div class="row">
        

            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>{{ $errors->first() }} </strong>No se ha agregado el expediente.
                </div>
            @endif
            
            <div class="col-md-12 col-sm-12 col-xs-12 escondido">

                        
                            <table id="tabla-expedientes" class="table table-striped dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Titulo</th>
                                    <th>Fecha</th>
                                    <th>Jurisdiccion</th>
                                    <th>Rama</th>
                                    <th>Clientes</th>
                                    <th>Comentarios</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                
                                </tbody>
                            </table>
            </div>

        </div>    
      </div>
    </section>

   {{-- @include('popups.cliente-nuevo')
    @include('popups.confirma-borrar') --}}
    



@endsection


@section('bottom-scripts')
    <script src="{{ url('js/jquery.validate.js') }}"></script>
    <script src="{{ url('js/validacion-cliente.js') }}"></script>
    <script src="{{ url('js/datatables.js') }}"></script>
    <script src="{{ url('js/fakeloader.min.js') }}"></script>
    <script src="{{ url('js/clientes.js') }}"></script>
    <script src="//cdn.jsdelivr.net/alertifyjs/1.8.0/alertify.min.js"></script>


@endsection

