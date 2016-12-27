@extends('master')             


@section('script')
	@parent
    <script src=" asset('public/Js/PAA/paa.js') }}"></script>	
@stop

@section('content') 
        	<div class="content" id="main_paa_" class="row" data-url="paa" ></div>
            <div class="content">
            	<div class="row">
	            	<div class="col-xs-12 col-md-12 ">
				    	<br>
						<h4>Gestionar Contratos</h4>
		            	<br>
		    		</div>

	                <div class="col-xs-12 col-md-12 text-">
				    	<div class="form-group">	
							<div class="btn-group" role="group" aria-label="...">
							  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Modal_AgregarNuevo">
							  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar nuevo
							  </button>

							  <!--<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Modal_AprobarCambios"><span class="glyphicon glyphicon-save-file" aria-hidden="true"></span> Aprobar cambios</button>
							  
							  <button type="button" class="btn btn-danger"data-toggle="modal" data-target="#Modal_Historiaeliminado"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Historial eliminados</button>-->
							</div>
						</div>
		    		</div>

				    <div class="col-xs-12 col-md-12 ">
				    	<hr style="border: 0; border-top: 2px solid #CEECF5; height:0;">
		    		</div>

	    			<div class="col-xs-12 col-md-12 ">
						<h4>Listado Contratos</h4>
		            	<br>
		    		</div>
	    		</div>
            </div>


           
	            	
	            	
				    	
					      		<table id="TablaPAA"  class="display nowrap" width="100%" cellspacing="0">
						        <thead>
						            <tr>
						                <th>N°</th>
						                <th>Id Registro</th>
										<th>Códigos UNSPSC</th>
										<th>Modalidad de selección</th>
										<th>Tipo de contrato</th>
										<th>Descripción/Objeto</th>
										<th>Fuente de los recursos (Nombre de la Fuente (s))	</th>
										<th>Valor total estimado	</th>
										<th>Valor estimado en la vigencia actual	</th>
										<th>¿Se requieren vigencias futuras?	</th>
										<th>Estado de solicitud de vigencias futuras	</th>
										<th>Estudio de  conveniencia (dd/mm/aaaa)</th>
										<th>Fecha estimada de inicio de proceso de selección - Fecha  (dd/mm/aaaa)	</th>
										<th>Fecha suscripción Contrato (dd/mm/aaaa)	</th>
										<th>Duración estimada del contrato (meses)	</th>
										<th>Meta plan	</th>
										<th>Recurso Humano (Si / No)</th>
										<th>Numero de Contratistas	</th>
										<th>Datos de contacto del responsable (Ordenador del Gasto)</th>
										<th>Proyecto de inversión o rubro de funcionamiento</th>
										<th  data-priority="2">Menu</th>
						            </tr>
						        </thead>
						        <tfoot>
						            <tr>
						            	<th>N°</th>
						                <th>Id Registro</th>
										<th>Códigos UNSPSC</th>
										<th>Modalidad de selección</th>
										<th>Tipo de contrato</th>
										<th>Descripción/Objeto</th>
										<th>Fuente de los recursos (Nombre de la Fuente (s))	</th>
										<th>Valor total estimado	</th>
										<th>Valor estimado en la vigencia actual	</th>
										<th>¿Se requieren vigencias futuras?	</th>
										<th>Estado de solicitud de vigencias futuras	</th>
										<th>Estudio de  conveniencia (dd/mm/aaaa)</th>
										<th>Fecha estimada de inicio de proceso de selección - Fecha  (dd/mm/aaaa)	</th>
										<th>Fecha suscripción Contrato (dd/mm/aaaa)	</th>
										<th>Duración estimada del contrato (meses)	</th>
										<th>Meta plan	</th>
										<th>Recurso Humano (Si / No)</th>
										<th>Numero de Contratistas	</th>
										<th>Datos de contacto del responsable (Ordenador del Gasto)</th>
										<th>Proyecto de inversión o rubro de funcionamiento</th>
										<th  data-priority="2">Menu</th>
						            </tr>
						        </tfoot>
						        <tbody id="registros_actividades_responsable">
						        						    
			        					
					                        
						        </tbody>
						    </table>
						
		    		


<!-- MODAL CREAR PAA-->
<div class="modal fade" data-backdrop="static" data-keyboard="false" id="Modal_AgregarNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">CREAR PAA</h4>
      </div>
      <div class="modal-body">
        <form id="form_paa">
        		<input type="hidden" class="form-control" name="id_Paa" value="0">
		        <div class="row">
				  <div class="col-xs-6 col-sm-4">
				  		<div class="form-group">
					    	<label>Id Registro </label>
							<input type="text" class="form-control" name="id_registro">
						</div>
				  </div>
				  <div class="col-xs-6 col-sm-4">
				  		<div class="form-group">
					    	<label>Códigos UNSPSC </label>
							<input type="text" class="form-control" name="codigo_Unspsc">
						</div>
				  </div>
				  <div class="col-xs-6 col-sm-4">
				  		<div class="form-group">
					  		<label>Modalidad de selección</label>
							<select class="form-control" name="modalidad_seleccion">
									<option value="" >Selecionar</option>
									
							</select>
						</div>
				  </div>
				</div>

				<div class="row">
				  <div class="col-xs-6 col-sm-4">
				  		<div class="form-group">
					    	<label>Tipo de contrato </label>
							<select class="form-control" name="tipo_contrato">
								<option value="" >Selecionar</option>
								
							</select>
						</div>
				  </div>
				  <div class="col-xs-6 col-sm-4">
				  		<div class="form-group">
					    	<label>Descripción/Objeto contractual </label>
							<textarea class="form-control" rows="2" id="comment" name="objeto_contrato"></textarea>
						</div>
				  </div>
				  <div class="col-xs-6 col-sm-4">
				  		<div class="form-group">
					  		<label>Fuente de los recursos (Nombre de la Fuente (s))</label>
							<input type="text" class="form-control" name="fuente_recurso">
						</div>
				  </div>
				</div>

				<div class="row">
				  <div class="col-xs-6 col-sm-4">
				  		<div class="form-group">
					    	<label>Valor total estimado </label>
							<input type="text" class="form-control" name="valor_estimado">
						</div>
				  </div>
				  <div class="col-xs-6 col-sm-4">
				  		<div class="form-group">
					    	<label>Valor estimado en la vigencia actual </label>
							<input type="text" class="form-control" name="valor_estimado_actualVigencia">
						</div>
				  </div>
				  <div class="col-xs-6 col-sm-4">
				  		<div class="form-group">	
				  			<label>¿Se requieren vigencias futuras?</label>
							<select class="form-control" name="vigencias_futuras">
								<option value="" >Selecionar</option>
								<option value="Si" >Si</option>
								<option value="No" >No</option>
							</select>
						</div>
				  </div>
				</div>

				<div class="row">
				  <div class="col-xs-6 col-sm-4">
				  		<div class="form-group">
					    	<label>Estado de solicitud de vigencias futuras </label>
							<select class="form-control" name="estado_solicitud">
								<option value="">Seleccionar</option>
								<option value="NO SOLICITADAS">NO SOLICITADAS</option>
								<option value="SI SOLICITADAS">SI SOLICITADAS</option>
								<option value="N/A">N/A</option>
							</select>
						</div>
				  </div>
				  <div class="col-xs-6 col-sm-4">
				  		<div class="form-group">
					    	<label>Estudio de  conveniencia </label><br><br>
							<input type="text" class="form-control" name="estudio_conveniencia" data-role="datepicker" placeholder="aa/mm/dd">
						</div>
				  </div>
				  <div class="col-xs-6 col-sm-4">
				  		<div class="form-group">
					  		<label> Fecha estimada de inicio de proceso de selección</label>
							<input type="text" class="form-control" name="fecha_inicio"  data-role="datepicker" placeholder="aa/mm/dd">
						</div>
				  </div>
				</div>

				<div class="row">
				  <div class="col-xs-6 col-sm-4">
				  		<div class="form-group">
					    	<label>Fecha suscripción Contrato </label>
							<input type="text" class="form-control" name="fecha_suscripcion"  data-role="datepicker" placeholder="aa/mm/dd">
						</div>
				  </div>
				  <div class="col-xs-6 col-sm-4">
				  		<div class="form-group">
					    	<label>Duración estimada del contrato (meses)</label>
							<input type="text" class="form-control" name="duracion_estimada">
						</div>
				  </div>
				  <div class="col-xs-6 col-sm-4">
				  		<div class="form-group">
					  		<label>Meta plan</label>
							<input type="text" class="form-control" name="meta_plan">
						</div>
				  </div>
				</div>

				<div class="row">
				  <div class="col-xs-6 col-sm-4">
				  		<div class="form-group">
					    	<label>Recurso Humano </label>
							<select class="form-control" name="recurso_humano">
								<option value="" >Selecionar</option>
								<option value="Si" >Si</option>
								<option value="No" >No</option>
							</select>
						</div>
				  </div>
				  <div class="col-xs-6 col-sm-4">
				  		<div class="form-group">
					    	<label>Numero de Contratistas</label>
							<input type="text" class="form-control" name="numero_contratista">
						</div>
				  </div>
				  <div class="col-xs-6 col-sm-4">
				  		<div class="form-group">
					  		<label>Datos de contacto del responsable</label>
							<input type="text" class="form-control" name="datos_contacto">
						</div>
				  </div>
				</div>

				<div class="row">
				  	<div class="col-xs-12 col-sm-12">
				  		<div class="form-group">
					    	<label>Proyecto de inversión o rubro</label>
							<select class="form-control" name="proyecto_inversion">
								<option value="" >Selecionar</option>
							
							</select>
						</div>
					</div>
				</div>

				<div class="row">
				  	<div class="col-xs-12 col-sm-12">
				  	<hr>
				  		<h4 class="modal-title" id="myModalLabel">AGREGAR FINANCIACIÓN</h4>
					</div>
				</div>

				<div class="row">
				  <div class="col-xs-6 col-sm-4">
				  		<div class="form-group">
					    	<label>FUENTES DE FINANCIAMIENTO</label>
							<select class="form-control" name="fuente_inversion">
								<option value="" >Selecionar</option>
								
							</select>
						</div>
				  </div>
				  <div class="col-xs-6 col-sm-4">
				  		<div class="form-group">
					    	<label>COMPONENTES DEL GASTO</label>
							<select class="form-control" name="componnente" id="componnente">
								<option value="" >Selecionar</option>
							</select>
						</div>
				  </div>
				  <div class="col-xs-6 col-sm-4">
				  	<div class="form-group">
					  		<label>Valor</label>
							<input type="text" class="form-control" name="valor_contrato">
					</div>
				  </div>
				</div>

				<div class="row">
				  	<div class="col-xs-12 col-sm-12">
				  		<button type="button" class="btn btn-primary" id="agregarFinanciacion">Agregar</button>
        				<button  type="button" class="btn btn-info">Ver</button>
					</div>
					<div class="col-xs-12 col-sm-12">
        				<div class="form-group"  id="mensaje_actividad" style="display: none;">
        					<div id="alert_actividad"></div>
        				</div>
				  	<hr>
					</div>
				</div>
      </div>
      <div class="modal-footer">
        <div id="mjs_registroPaa" class="alert alert-success" style="display: none"></div>
        <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
        <button  type="submit" class="btn btn-success">CREAR</button>
      </div>
     </form>

    </div>
  </div>
</div>





<!-- MODAL APROBAR CAMBIOS-->
<div class="modal fade" data-backdrop="static" data-keyboard="false" id="Modal_AprobarCambios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Aprobar Cambios</h4>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success">Crear</button>
      </div>
    </div>
  </div>
</div>






<!-- MODAL HISTORIAL ELIMINADOS-->
<div class="modal fade" data-backdrop="static" data-keyboard="false" id="Modal_Historiaeliminado" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Historial Eliminados</h4>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-success">Crear</button>
      </div>
    </div>
  </div>
</div>
@stop
