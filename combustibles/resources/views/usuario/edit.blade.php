@extends('layouts.principal')
@section('content')

<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Usuarios
            <small> || Editar usuario</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
          {!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
            <section class="col-lg-6 connectedSortable">
              <!-- quick email widget -->
              <div class="box box-success">
                <div class="box-header"><h3 class="box-title">Puedes editar los siguientes datos: </h3></div>
                  <div class="box-body">
                             <div class="form-group">
                                {!!Form::label('usuario:')!!}
                                {!!Form::text('usuario',null,['class'=>'form-control'])!!}
                             
                                {!!Form::label('Password:')!!}
                                {!!Form::password('password',['class'=>'form-control'])!!}

                                {!!Form::label('Nombre:')!!}
                                {!!Form::text('nombre',null,['class'=>'form-control'])!!}

                                {!!Form::label('Departamento:')!!}
                                {!!Form::text('departamento',null,['class'=>'form-control'])!!}
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
                                {!!Form::label('Foto:')!!}
                                {!!Form::file('foto',null,['class'=>'form-control'])!!}
                          
                                {!!Form::label('Privilegios:')!!}
                                {!!Form::text('privilegios',null,['class'=>'form-control'])!!}
                             
                                {!!Form::label('Accesos:')!!}
                                {!!Form::password('accesos',['class'=>'form-control'])!!}
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