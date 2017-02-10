@extends('layouts.principal')
@section('content')

 <section class="content-header">
          <h1>
          Proveedores
            <small> || registrados</small>
          </h1>
        </section>

 <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Datos de los proveedores</h3>
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
                      <th>Razon Social</th>
                      <th>RFC</th>
                      <th>Nombre Comercial</th>
                      <th>Dirección</th>
                      <th>Teléfono</th>
                      <th>Fax</th>
                      <th>Contrato</th>
                      <th>Acciones</th>
                    </tr>
                    <tr>
                      <td>183JK</td>
                      <td>John Doe</td>
                      <td>GOCD780709AW9</td>
                      <td>John Doe</td>
                      <td>Av. Puerto de Mazatlán #4 Parque Industrial Alfredo V. Bonfil Mazatlán, Sinaloa. CP 82050</td>
                      <td>01 (348) 71 80 195</td>
                      <td>524774933880</td>
                      <td>Indeterminado</td>
                      <td>
						            <a href="#">
                        <span class="label label-warning"><i class="fa fa-check">Editar</i></span></a>
                      </td>
                      <td> 
                        <a href="#">
                        <span class="label label-danger"><i class="fa fa-times">Eliminar</i></span></a>
                      </td>
                    </tr>
                    <tr>
                      <td>219MN</td>
                      <td>Alexander Pierce</td>
                      <td>POVB831003MK1</td>
                       <td>Alexander Pierce</td>                      
                       <td>Cuauhtémoc s/n Col. Centro Tolcayuca, Hidalgo. La planta está ubicada a 30 kilómetros de la Cd. de Pachuca Hidalgo.</td>
                       <td>01 (442) 294 59 78</td>
                       <td>524424049040</td>
                        <td>Indeterminado</td>
                    </tr>
                    <tr>
                      <td>657</td>
                      <td>Bob Doe</td>
                      <td>CABG670708AA2</td>
                      <td>Bob Doe</td>
                      <td>Av. De los Industriales No. 110 6to. Piso despacho 604 Edificio Kubica, Santiago de Querétaro, Qro.</td>
                      <td>01 (743) 741 10 44</td>
                      <td>527226903546</td>
                       <td>Indeterminado</td>
                    </tr>
                  
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
 </section>

@stop