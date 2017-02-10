@extends('layouts.principal')
@section('content')

 <section class="content-header">
          <h1>
           Usuarios
            <small> || registrados</small>
          </h1>
        </section>

 <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Datos de los usuarios</h3>
                  <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>ID</th>
                      <th>Usuario</th>
                      <th>Password</th>
                      <th>Nombre</th>
                      <th>Departamento</th>
                      <th>Foto</th>
                      <th>Privilegios</th>
                      <th>Accesos</th>
                      <th>Acciones</th>
                    </tr>
                    <tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>1172014</td>
                      <td>John Doe</td>
                      <td>Sistemas</td>
                      <td>
                      	  <div class="user-panel">
        				            <div class="pull-left image">
        				              <img src="dist/img/avatar.png" class="img-circle" alt="User Image">
        				            </div>
                          </div>
                      </td>
                      <td><span class="label label-success">Administrador</span></td>
                      <td>---------</td>
                      <td>
					             	<a href="#">
                        <span class="label label-warning"><i class="fa fa-check">Editar</i></span></a>
					             	<a href="#">
                        <span class="label label-danger"><i class="fa fa-times">Eliminar</i></span></a>
                      </td>
                    </tr>
                    <tr>
                      <td>219</td>
                      <td>Alexander Pierce</td>
                      <td>1172014</td>
                       <td>Alexander Pierce</td>                      
                       <td>Compras</td>
                       <td>
                      	  <div class="user-panel">
        				            <div class="pull-left image">
        				              <img src="dist/img/avatar2.png" class="img-circle" alt="User Image">
        				            </div>
                          </div>
                       </td>
                       <td><span class="label label-primary">Usuario</span></td>
                    </tr>
                    <tr>
                      <td>657</td>
                      <td>Bob Doe</td>
                      <td>1172014</td>
                      <td>Bob Doe</td>
                      <td>Ventas</td>
                      <td>
                      	  <div class="user-panel">
        				            <div class="pull-left image">
        				              <img src="dist/img/avatar3.png" class="img-circle" alt="User Image">
        				            </div>
                          </div>
                      </td>
                      <td><span class="label label-primary">Usuario</span></td>
                    </tr>
                    <tr>
                      <td>175</td>
                      <td>Mike Doe</td>
                      <td>1172014</td>
                      <td>Mike Doe</td>
                      <td>Contabilidad</td>
                      <td>
                      	  <div class="user-panel">
        				            <div class="pull-left image">
        				              <img src="dist/img/avatar04.png" class="img-circle" alt="User Image">
        				            </div>
                          </div>
                      </td>
                      <td><span class="label label-primary">Usuario</span></td>
                    </tr>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
 </section>

@stop