<div class="row col-md-12">
								<div class="col-xl">
									<div class="m-portlet m-portlet--mobile ">
										<div class="m-portlet__head">
											<div class="m-portlet__head-caption">
												<div class="m-portlet__head-title">
													<h3 class="m-portlet__head-text"> Bandeja POI - Actividad Operativa</h3>
												</div>
											</div>											
										</div>

										<div class="m-portlet__body">											

					                          <div class="row">
					                             <div class="col-md-2">
					                                <label class="control-label" for="multianual" style="font-weight: 600">POI MULTIANUAL</label>
					                                <select class="form-control input-sm" id="multianual" name="multianual"><option selected="selected" value="">(SELECCIONAR)</option>
														<option value="1000">2021-2023</option>
														<option value="1010">2022-2024</option>
														<option value="1020" > 2023-2025</option>
														<option value="1030">2024-2026</option>
													</select>
					                            </div>
					                            <div class="col-md-1">
					                                <label class="control-label" for="ejercicio" style="font-weight: 600">EJERCICIO</label>
					                                <select class="form-control input-sm" id="ejercicio" name="ejercicio"><option selected="selected" value="">(SELECCIONAR)</option>
													</select>
					                            </div>
					                            <div class="col-md-3">
					                                <label class="control-label" for="ddlFilEjecutora" style="font-weight: 600">EJECUTORA</label>
					                                <select class="form-control input-sm" id="ddlFilEjecutora" name="ddlFilEjecutora"><option  value="">(SELECCIONAR)</option>
														<option selected="selected" value="000058">003 USE 03 CERCADO</option>
													</select>
					                            </div>
					                            <div class="col-md-2">
					                                <label class="control-label" for="txtFilNomUnidad">AREA</label>
					                                <input class="form-control input-sm" id="txtFilNomUnidad" maxlength="30" name="txtFilNomUnidad" type="text" value="{{auth()->user()->name}}">
					                            </div>
					                            <div class="col-md-2">
					                                <label class="control-label" for="etapa">ETAPA</label>
					                                <input class="form-control input-sm" disabled="disabled" id="etapa" maxlength="30" name="etapa" style="background-color: #DBFAD1" type="text" value="">
					                            </div>
					                            <div class="col-md-2 text-right" >
					                                <button type="button" id="btnConsulta" class="btn btn-sm btn-primary" style="margin-right:8px;" onclick="consulta(this,1)" ><i class="fa fa-search"></i> Buscar</button>
					                                <button type="button" id="btnLimpiar" class="btn btn-sm btn-default" style="margin-right:8px;"><i class="fa fa-refresh"></i> Limpiar</button>
					                            </div>
					                          </div>


					                    </div>
					                     <hr>
					                    <div class="m-portlet__body">
												<div >
													<h2>Areas UGEL 03</h2>
													<table id="jqGridConsulta">

														  <tfoot>
            <tr>
                <td colspan="3">Totals:</td>
              {{--   @foreach($totalHarga as $totals) --}}
				<td>
                {{-- <input id="total" name="total[]" disabled class="auto-numeric input-offer" value="{{ $totalHarga[totals]->total }}" type="text" aria-describedby="amount" data-v-max="5000000000" data-v-min="0" data-a-sep="." data-a-dec="," style="text-align: right;width: 110px;"> --}}
                {{-- <input id="total" name="total[]" disabled class="auto-numeric input-offer" value="{{ json_encode($totalHarga->total) }}" type="text" aria-describedby="amount" data-v-max="5000000000" data-v-min="0" data-a-sep="." data-a-dec="," style="text-align: right;width: 110px;"> --}}
                <input id="total" name="total[]" disabled class="auto-numeric input-offer" value="{{ 500}}" type="text" aria-describedby="amount" data-v-max="5000000000" data-v-min="0" data-a-sep="." data-a-dec="," style="text-align: right;width: 110px;">
                </td>
               {{--  @endforeach --}}
            </tr>
        </tfoot>
													</table>
													<div id="pageConsulta"></div>
													<p></p>

													<h2>Actividades Operativas</h2>

												    <table id="jqgridDetalle"></table>
													<div id="pageDetalle"></div>

													{{-- <p> --}}
														<div id="forminput"></div> {{-- ingreso de datos para grabar --}}
													{{-- </p> --}}


												    {{-- <table id="jqGrid"></table>
													<div id="pager2"></div> --}}
													<p>
												    	<table id="jqGrid2"></table>
													</p>
												    <p>
												    	<table id="rowed2" > </table>
												    </p>
												</div>
										</div>

										{{-- <div class="m-portlet__head">
										</div> --}}
										<hr>

									{{-- 	<div class="m-portlet__body">
											Hola Mundo
										</div> --}}


									</div>
								</div>

							</div>
							<!--End::Main Portlet-->


<div id="forminputcadena"></div> {{-- ingreso de datos para grabar --}}


<script>
/*$(document).ready(function () {
	
	


        /* boton onchange or clic*/


/*
});*/



 function cadenaValor(button){ 		
   // alert("LLego aqui");		

	 	var id=button.id; //1//2

            page = 'admin_home/formEditcadena/' + id;         
            $('#forminputcadena').html("<img src= 'sangrid/images/loading.gif'").load(page);
            $("#forminputcadena").dialog({
                top: 10,
                autoOpen: false,
                modal: false,
                title: "Cadena Funcional ",
                height: '950',
                width: '1150',               
                position: [100, 100],
                show: {
                    effect: 'fade'
                },
                buttons: [/*{
                   
                      html: "<img class='icon' src='sangrid/images/ok.png'>Grabar",
                    click: function() {
                        //url = '/SangridController/updateJqgrid/' + clientID;
                        //updateDataClients();
                        return false;
                    }
                }, */
                {
                	 html: "<img class='icon' src= 'sangrid/images/cancel.png'>Cancelar",
	                    click: function() {
	                        $(this).dialog('close');   
	                    }
                }],
            });       
        console.log("llega aqui cadena de valor"+id);
        
	}

		//var id;
/*inicio combo objetivo*/

          /*  $("#objetivo").change(function(){        
                  id=$(this).val();
                //alert(id);             
                $('#accionadmin').empty();
                $('#accionadmin').append('<option value="0" disabled selected> Procesando... </option>');
               // alert(id);
              // document.getElementById('actividad').value = '0';
                $.ajax({
                    type:'GET',
                    url:'admin_home/getaccionadmin/'+id,
                    data:{id:idd},
                    success:function(response){                  
                        //alert(response);
                        //console.log(response);
                        $('#accionadmin').empty();
                        $('#accionadmin').append('<option value="0" disabled selected> Seleccione Equipo </option>');
                            //$("#accion").html(data);
                            $('#accionadmin').empty().append(response);
                            //$('#jefe').val('');
                    }
                });               
            });*/
        /*fin combo objetivo*/

        /*inicio combo politica*/
            /*$("#politica").change(function(){        
                  id=$(this).val();
                //alert(id);             
                $('#lineaaccion').empty();
                $('#lineaaccion').append('<option value="0" disabled selected> Procesando... </option>');
               // alert(id);
              // document.getElementById('actividad').value = '0';
                $.ajax({
                    type:'GET',
                    url:'admin_home/getlineaaccion/'+id,
                    data:{id:id},
                    success:function(response){                  
                        //alert(response);
                        //console.log(response);
                        $('#lineaaccion').empty();
                        $('#lineaaccion').append('<option value="0" disabled selected> Seleccione Equipo </option>');
                            //$("#accion").html(data);
                            $('#lineaaccion').empty().append(response);
                            //$('#jefe').val('');
                    }
                });               
            });*/
        /*fin combo politica*/





