@extends('layouts.principal')
@section('content')

 <section class="content-header">
          <h1>
          Choferes
            <small> || registrados</small>
          </h1>
        </section>

 <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Datos de los choferes</h3>
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
                      <th>Clave </th>
                      <th>Nombre</th>
                      <th>Departamento</th>
                      <th>Fecha de Aprobación</th>
                      <th>Número de Licencia</th>
                      <th>Vigencia</th>
                      <th>Tipo de Licencia</th>
                      <th>Usa Lentes</th>
                      <th>Bloqueado</th>
                      <th>Foto</th>
                      <th>Tipo de Sangre</th>
                      <th>Acciones</th>
                    </tr>
                    <tr>
                      <td>101k</td>
                      <td>John Doe</td>
                      <td>Compras</td>
                      <td>16/08/2015</td>
                      <td>57576666778</td>
                      <td>16/09/2019</td>
                      <td>C</td>
                      <td>SI</td>
                      <td>NO</td>
                      <td>
                      <img class="media-object" src="dist/img/avatar04.png" alt="..." style="width: 70px">
                      </td>
                      <td>O+</td>

                      <td>
						<a href="#">
                        <span class="label label-warning"><i class="fa fa-check">Editar</i></span></a>
                     	<br><br>
                        <a href="#">
                        <span class="label label-danger"><i class="fa fa-times">Eliminar</i></span></a>
                      </td>
                    </tr>
                    <tr>
                      <td>102k</td>
                      <td>Alexander Pierce</td>
                      <td>Ventas</td>
                      <td>16/08/2015</td>                      
                      <td>87987766756</td>
                       <td>16/09/2018</td>
                       <td>B</td>
                       <td>NO</td>
                       <td>NO</td>
                       <td>
                       <img class="media-object" src="dist/img/avatar.png" alt="..." style="width: 70px">
                       </td>
                       <td>O+</td>
                        <td>
						<a href="#">
                        <span class="label label-warning"><i class="fa fa-check">Editar</i></span></a>
                     	<br><br>
                        <a href="#">
                        <span class="label label-danger"><i class="fa fa-times">Eliminar</i></span></a>
                      </td>
                    </tr>
                    <tr>
                      <td>101k</td>
                      <td>Bob Doe</td>
                      <td>Contabilidad</td>
                      <td>16/08/2015</td>
                      <td>527226903546</td>
                      <td>16/12/2017</td>
                      <td>A</td>
                      <td>SI</td>
                      <td>NO</td>
                      <td>
                      <img class="media-object" src="dist/img/avatar5.png" alt="..." style="width: 70px">
                      </td>
                      <td>O+</td>
                       <td>
						<a href="#">
                        <span class="label label-warning"><i class="fa fa-check">Editar</i></span></a>
                     	<br><br>
                        <a href="#">
                        <span class="label label-danger"><i class="fa fa-times">Eliminar</i></span></a>
                      </td>
                    </tr>
                  
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
 </section>

@stop