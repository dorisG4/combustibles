@extends('layouts.principal')
@section('content')

<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Choferes
            <small> || Registrar nuevo chofer</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">    
        <!-- Main row -->
          <div class="row">
           <!-- Left col -->
           <!-- formulario -->
           {!!Form::open(['route'=>'chofer.store', 'method'=>'POST'])!!}
            <section class="col-lg-6 connectedSortable">
              <!-- quick email widget -->
              <div class="box box-success">
                <div class="box-header"><h3 class="box-title">Ingresa los siguientes datos:</h3></div>
                  <div class="box-body">
                         <div class="form-group">
                         {!!Form::label('Clave Chofer:')!!}
                         {!!Form::text('claveChofer',null,['class'=>'form-control'])!!}

                         {!!Form::label('Nombre:')!!}
                         {!!Form::text('nombre',null,['class'=>'form-control'])!!}

                         {!!Form::label('Departamento:')!!}
                         {!!Form::text('departamento',null,['class'=>'form-control'])!!}

                         {!!Form::label('Fecha de Aprobación:')!!}
                         {!!Form::date('fechaAprobacion',null,['class'=>'form-control'])!!} 

                         {!!Form::label('Número de Licencia:')!!}
                         {!!Form::text('noLicencia',null,['class'=>'form-control'])!!}

                         {!!Form::label('Vigencia:')!!}
                         {!!Form::date('vigencia',null,['class'=>'form-control'])!!}

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
                           {!!Form::label('Tipo de Licencia:')!!}
                           {!!Form::text('tipoLicencia',null,['class'=>'form-control'])!!}

                           {!!Form::label('Usa Lentes:')!!}
                           {{ Form::radio('usaLentes', 'SI') }} SI
                           {{ Form::radio('usaLentes', 'NO') }} NO<br>

                           {!!Form::label('Bloqueado:')!!}
                           {!!Form::text('bloqueado',null,['class'=>'form-control'])!!}

                           {!!Form::label('Foto:')!!}
                           {!!Form::file('foto',null,['class'=>'form-control'])!!}

                           {!!Form::label('Tipo de Sangre:')!!}
                           {!!Form::text('tipoSangre',null,['class'=>'form-control'])!!}
                           </div>

                              <div class="box-footer clearfix">
                                {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}

                              </div> 
                    </div>
              </div>

            </section><!-- right col -->

           {!!Form::close()!!}  

          </div><!-- /.row (main row) -->
        </section><!-- /.content -->

@stop