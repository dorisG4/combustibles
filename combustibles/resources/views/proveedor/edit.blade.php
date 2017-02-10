@extends('layouts.principal')
@section('content')

<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Proveedores
            <small> || Editar proveedor</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">    
        <!-- Main row -->
          <div class="row">
           <!-- Left col -->
           <!-- formulario -->
           {!!Form::open(['route'=>'proveedor.store', 'method'=>'POST'])!!}
            <section class="col-lg-6 connectedSortable">
              <!-- quick email widget -->
              <div class="box box-success">
                <div class="box-header"><h3 class="box-title">Puedes editar los siguientes datos:</h3></div>
                  <div class="box-body">
                         <div class="form-group">
                         {!!Form::label('Clave Proveedor:')!!}
                         {!!Form::text('claveProveedor',null,['class'=>'form-control'])!!}

                         {!!Form::label('Razon Social:')!!}
                         {!!Form::text('razonSocial',null,['class'=>'form-control'])!!}

                         {!!Form::label('Nombre Comercial:')!!}
                         {!!Form::text('nombreComercial',null,['class'=>'form-control'])!!}

                         {!!Form::label('RFC:')!!}
                         {!!Form::text('rfc',null,['class'=>'form-control'])!!}  
                         </div>
                  </div>
              </div>

            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-6 connectedSortable">
              <!-- siguiente columna -->
                <div class="box box-success">
                    <div class="box-body">
                           <div class="form-group">
                           {!!Form::label('Dirección:')!!}
                           {!!Form::text('direccion',null,['class'=>'form-control'])!!}

                           {!!Form::label('Teléfono:')!!}
                           {!!Form::text('telefono',null,['class'=>'form-control'])!!}

                           {!!Form::label('FAX:')!!}
                           {!!Form::text('fax',null,['class'=>'form-control'])!!}

                           {!!Form::label('Contrato:')!!}
                           {!!Form::text('contrato',null,['class'=>'form-control'])!!}
                           </div>

                           <div class="box-footer clearfix">
                            {!!Form::submit('Editar',['class'=>'btn btn-warning'])!!}
                           </div> 
                    </div>
              </div>

            </section><!-- right col -->

           {!!Form::close()!!}  

          </div><!-- /.row (main row) -->
        </section><!-- /.content -->

@stop