<x-app-layout>

		<!-- begin::Body -->




			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor-desktop m-grid--desktop m-body"  style="padding-top: 30px!important;"  >
				<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver	m-container m-container--responsive m-container--xxl m-page__container"style="width:1700px !important ;" >

					<div class="m-grid__item m-grid__item--fluid m-wrapper">
					
						<div class="m-content">		


							<div id="formactividad" class="row col-md-12" > </div> {{-- ingreso de datos para grabar --}}


							


							<!--Begin::Main Portlet 2-->

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
					                             <!--<div class="col-md-2">
					                                <label class="control-label" for="multianual" style="font-weight: 600">POI MULTIANUAL</label>
					                                <select class="form-control input-sm" id="multianual" name="multianual"><option selected="selected" value="">(SELECCIONAR)</option>
														<option value="1000">2021-2023</option>
														<option value="1010">2022-2024</option>
														<option value="1020" > 2023-2025</option>
														<option value="1030">2024-2026</option>
													</select>
					                            </div>-->
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

													<p>
														<div id="forminput"></div> {{-- ingreso de datos para grabar --}}
													</p>


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
<!--Begin::Main Portlet-->



						</div>
					</div>
				</div>
			</div>


			<!-- end::Body -->


</x-app-layout>

<script>

$(document).ready(function () {


 		/*inicio combo multianual*/
           /* $("#multianual").change(function(){        
                 let id=$(this).val();
                //alert(id);             
                $('#ejercicio').empty();
                $('#ejercicio').append('<option value="0" disabled selected> Procesando... </option>');
               // alert(id);
              // document.getElementById('actividad').value = '0';
                $.ajax({
                    type:'GET',
                    url:'admin_home/getejercicio/'+id,
                    data:{id:id},
                    success:function(response){                  
                        //alert(response);
                        //console.log(response);
                        $('#ejercicio').empty();
                        $('#ejercicio').append('<option value="0" disabled selected> Seleccione Equipo </option>');
                            //$("#ejercicio").html(data);
                            $('#ejercicio').empty().append(response);
                            //$('#jefe').val('');
                    }
                });               
            });*/
        /*fin combo multianual*/

        /*Grilla jqgrid*/
        var dropdown;


		var Url = 'admin_home/getUnidadOperativa/?mes=';

        $("#jqGridConsulta").jqGrid({ 
		    url: 'admin_home/getUnidadOperativa/?mes=',
		   // url:'home/getUnidadOperativa/',  
		    datatype: 'json',
		    mtype: 'GET', //insert data from the data object we created above 
		    width: 1000,  
		    colNames: [
							                    'Unidad ID',
							                     'id_users ',
							                    'id_periodos',
							                    'Area',
							                    'MARCO/PIM',
							                    'APM S/',
							                    'DA S/',
							                    'Necesodad Total S/',
							                    'PROGRAMADO',
							                    'ESTADO',
							                    'ACCIONES',
							                ],
            colModel: [                   
	                    {name:'id',index:'id', width:5 , hidden: true },
	                    {name:'id_users',index:'id_users',editable: true,hidden: true, width:10,edittype:'select', editoptions:{value:"1:direccion;2:agebre;3:agebat;8:app"}},
	                    {name:'id_periodos',index:'id_periodos',editable: false, width:10 , hidden: true},
	                    {name:'descripcion',index:'descripcion', editable: true,width:50,edittype:'select', editoptions:{value:"1:direccion;2:agebre;3:agebat;8:app"}},
	                    {name:'marco',index:'marco',editable: true, width:30},
	                    {name:'apm',index:'apm',editable: true, width:30},
	                    {name:'da',index:'da',editable: true, width:30},
	                    {name:'necesidad_total',index:'necesidad_total',editable: true, width:30},

	                    {name:'programado',index:'programado',editable: true, width:30,hidden: true},
	                    {name:'flg',index:'flg',editable: true, width:40},
	                    /*{name:'ACCIONES',index:'', width:290},*/
	                    {name:'ACCIONES',index:'', formatter: function(cellvalue, options, rowobject){
											    return '<div class="btn btn-in-grid" type="button" id="'+rowobject.id +'" onclick="actividad(this)" title="Nueva Actividad Operativa" style="height:30px;width:1px;">  <i class="fa fa-book "></i> </div>&nbsp;'+
											    '<div class="btn btn-in-grid" type="button" id="boton1" onclick="prueba2(this)" title="Enviar" style="height:30px; width:1px;">  <i class="fa fa-send "></i> </div>&nbsp;'+
											    '<div class="btn btn-in-grid" type="button" id="boton1" onclick="actividad(this)" title="Actualizar Programación desde Plantilla" style="height:30px; width:1px;">  <i class="fa fa-upload "></i> </div>&nbsp;';
											},
						width:40},
	                ],
	        rownumbers: true,   
	        gridview: true,
			altclass: 'myAltRowClass',
			stringResult: false,
			pager: '#pageConsulta',
			//enctype: 'multipart/form-data',

	        onSelectRow: function(id, selected) {
	        	// console.log(id);
				//	 console.log(id_users);

				activeGrid = "#jqGridConsulta";
				operid = $(this).jqGrid("getCell", id, "rn") - 1;
				//id_user = $(this).jqGrid("getCell", id_users, "rn") - 2;//para obtener el id_user 
				page = $(this).jqGrid("getGridParam", "page") - 1;
				rows = $(this).jqGrid("getGridParam", "postData").rows;
				if (operid >= rows) operid = operid - rows * page;
				if (id != null) {
					var data = $("#jqGridConsulta").getRowData(id);
					//let data = $("#jqGridConsulta").getRowData(id).id.replace(/(<([^>]+)>)/gi, "");
					//let dataUser = $("#jqGridConsulta").getRowData(id_users);
					 console.log(data);
					 console.log(data.id_users);
				/*	  dataDetalle = {		      
				        id: 1001,
				        id_users:8
				    };*/ 
					// console.log(dataDetalle);
				// return false;
					jQuery("#jqgridDetalle").jqGrid('setGridParam', {
						//url: baseUrl + '/SangridController/selectJqgrid/' + id, datatype: "json",
						url: 'admin_home/selectJqgrid/'+ id+'?id='+data.id+'&id_periodos='+data.id_periodos, datatype: "json",  
					});
					jQuery("#jqgridDetalle").trigger("reloadGrid");
				}
			//	var operids = $(this).jqGrid("getCell", id, "id");
			//	var id_users = $(this).jqGrid("getCell", id_users, "id_users");
				console.log('ini operids',operid);//
			//	console.log('ini id_users',id_users);//  selected te daba la casilla
			},            													
        }); 

        //jQuery("#pageConsulta").jqGrid('navGrid','#pageConsullta',{edit:true,add:true,del:true, search:false});
        	jQuery("#jqGridConsulta").jqGrid('navGrid','#pageConsulta',{edit:true,add:false,del:true, search:false},
        		//Edit Options. save key parameter will keybind the Enter key to submit.
				{
					editCaption: "Edit Post", 
					edittext: "Edit", 
					closeOnEscape: true, 
					closeAfterEdit: true, 
					savekey: [true, 13], 
					//errorTextFormat: commonError, 
					width: "500", 
					reloadAfterSubmit: true, 
					//bottominfo: "Fields marked with (*) are required", 
					top: "60", 
					left: "5", 
					right: "5",
					onclickSubmit: function (response, postdata) {
						//call edit button
						EditConsulta(postdata);
					}
				},
				//add Options. save key parameter will keybind the Enter key to submit.
				{
					addCaption: "Add Post", 
					addtext: "Add", 
					closeOnEscape: true, 
					closeAfterEdit: true, 
					savekey: [true, 13], 
					//errorTextFormat: commonError, 
					width: "500", 
					reloadAfterSubmit: true, 
					//bottominfo: "Fields marked with (*) are required", 
					top: "60", 
					left: "5", 
					right: "5",
					onclickSubmit: function (response, postdata) {
						AddPost(postdata);
					}
				},
				//delete Options. save key parameter will keybind the Enter key to submit.
				{
					deleteCaption: "delete Post", 
					deletetext: "Delete Post", 
					closeOnEscape: true, 
					closeAfterEdit: true, 
					savekey: [true, 13], 
					//errorTextFormat: commonError, 
					width: "500", 
					reloadAfterSubmit: true, 
					//bottominfo: "Fields marked with (*) are required", 
					top: "60", 
					left: "5", 
					right: "5",
					onclickSubmit: function (response, postdata) {
						DeletePost(postdata);
					}
				}
			);
        	
        /* fin Grilla jqgrid*/

          /*grilla detalle*/
        jQuery("#jqgridDetalle").jqGrid({
			mtype: "get",
			url: 'home/getUnidadOperativa/?mes=',
			datatype: "json",
			 width: 1000, 
			colNames: ['id','descripcion', 'cc', 'U. M.', 'FISICA', 'FINANCIERA', 'ACCIONES'],
			colModel: [
				{
					name: 'id',
					index: 'id',
					width: 5,
					fixed: true,
					hidden: true,
					sortable: false,
					search: false,
				},
				{
					name: 'descripcion',
					index: 'descripcion',
					width: 500,
					fixed: true,
					sortable: false,
					search: false,
				},
				{
					name: 'cc',
					index: 'cc',
					width: 80,
					fixed: true,
					sortable: false,
					search: false,
				},
				{
					name: 'um',
					index: 'um',
					align: 'right',
					width: 80,
					fixed: true,
					sortable: false,

					search: false,
				},
				{
					name: 'fisica',
					index: 'fisica',
					align: 'right',
					width: 80,
					fixed: true,
					sortable: false,

					search: false,
				},
				{
					name: 'financiera',
					index: 'financiera',
					align: 'right',
					width: 80,
					fixed: true,
					sortable: false,

					search: false,
				},
				 {name:'ACCIONES',index:'', formatter: function(cellvalue, options, rowobject){
											    return '<div class="btn btn-in-grid" type="button" id="'+rowobject.id +'" onclick="tarea(this)" title="Nueva Actividad Operativa" style="height:30px;width:1px;">  <i class="fa fa-book "></i> </div>&nbsp;'+
											    '<div class="btn btn-in-grid" type="button" id="boton1" onclick="prueba2(this)" title="Enviar" style="height:30px; width:1px;">  <i class="fa fa-send "></i> </div>&nbsp;'+
											    '<div class="btn btn-in-grid" type="button" id="boton1" onclick="tarea(this)" title="Actualizar Programación desde Plantilla" style="height:30px; width:1px;">  <i class="fa fa-upload "></i> </div>&nbsp;';
											},
						width:40},
			],

			//footerrow: true, //crea en la footer para agregar data
			//userDataOnFooter: true,
		//	sortable: true,
		//	width: 1535,
		//	viewrecords: true,
			// sortname: "clientID",
			//sortname: sortName,
		//	rownumbers: true,
		//	rowNum: 10,
	//		sortorder: "asc",
	//		loadonce: true,
			//mtype: "GET",
	//		toolbar: [true, "top"],
			// caption: "JSON Example"
		});
		/*fin grilla detalle*/

        /*Inicio combo ejercicio*/
         $('#ejercicio').change(function(){ 
                    var id_ejercicio= $(this).val(); 
                    var id_multianual = $( "#multianual" ).val(); 
                    dropdown = {		      
				        mes: id_ejercicio
				    };   

				    $.ajax({
					        type: "GET",
					        url: "admin_home/getUnidadOperativa/", //getUnidadOperativa
					        data: dropdown,
					        async: false,
					        cache: false,
					        success: function (data) {         
					            $("#jqGridConsulta").setGridParam({ url: Url + id_ejercicio})               
					             $("#jqGridConsulta").trigger('reloadGrid');
					             $('#jqgridDetalle').jqGrid('clearGridData');
					             //$("#jqgridDetalle").trigger('reloadGrid');
					        }
					})         

                    $.ajax({
                    	type:'GET',
                    	url: "{{route('admin_home/getEtapa')}}",        			
                    	data:{id_ejercicio:id_ejercicio},
                    	success:function(response){                    		 
                    		 document.getElementById('etapa').value = response;      
                    		 if(response=='formulación'){                    		 	
                    		 	$("#jqGridConsulta").hideCol("programado");
                    		 	$("#jqGridConsulta").showCol("apm");
                    		 	$("#jqGridConsulta").showCol("da");
                    		 	$("#jqGridConsulta").showCol("necesidad_total");
                    		 }              		
                    		 else
                    		 {
                    		 	$("#jqGridConsulta").showCol("programado");
                    		 	$("#jqGridConsulta").hideCol("apm");
                    		 	$("#jqGridConsulta").hideCol("da");
                    		 	$("#jqGridConsulta").hideCol("necesidad_total");

                    		 }
                    	}
                    });
          });
         /*Fin combo ejercicio*/



          function EditConsulta(params) {				
				let finalResult = Object.assign(params,dropdown);
				console.log(finalResult);
				$.ajax({
				        type: "GET",
				        url: "admin_home/editArea/",
				        data: finalResult,
				        async: false,
				        cache: false,
				        success: function (data) {         
				            //$("#jqGridConsulta").setGridParam({ url: url})               //me quede nrmz
				             $("#jqGridConsulta").trigger('reloadGrid');
				        }
				})  
				

			}
			function AddPost(params) {
				//Here you need to define ajax call for insert records to server
				let finalResult = Object.assign(params,dropdown);//aqui si es necesario

				$.ajax({
				        type: "GET",
				        url: "admin_home/addUnidadOperativa/",
				        data: finalResult,
				        async: false,
				        cache: false,
				        success: function (data) {         
				            $("#jqGridConsulta").setGridParam({ url: Url + id_ejercicio})               //me quede nrmz
				             $("#jqGridConsulta").trigger('reloadGrid');
				        }
				})  

				//console.log(finalResult);
				//console.log(dropdown);
				//console.log(params);
			}
			function DeletePost(params) {
				//Here you need to define ajax call for delete records to server
				//console.log(dropdown);
				//console.log(params);
			}

			

			


       



});
  	/*consulta*/
 function consulta(button,tabla){
         
         	var id_ejercicio = $("#ejercicio").val(); 
            var id_multianual = $("#multianual").val(); 
           
        jqGridConsulta=    jQuery("#jqGridConsulta").jqGrid({
                mtype: "get",                   //
               // mtype: "POST",                   
                url:'admin_home/getUnidadOperativa/'+id_ejercicio,               
                datatype: "json",
                colNames: [
							                    'Unidad ID',
							                    'id_users ',
							                    'descripcion ',
							                    'MARCO/PIM',
							                     'APM S/',
							                    'DA S/',
							                    'Necesodad Total S/',
							                    'PROGRAMADO',
							                    'ESTADO',
							                    'ACCIONES',
							                ],
					            colModel: [                   
						                    {name:'id',index:'id', width:55 , hidden: true },
						                    {name:'id_users',index:'id_users', width:50},
						                    {name:'descripcion',index:'descripcion', width:50  },
						                    {name:'marco',index:'marco', width:50},
						                     {name:'apm',index:'apm',editable: true, width:50},
	                    					{name:'da',index:'da',editable: true, width:50},
	                    					{name:'necesidad_total',index:'necesidad_total',editable: true, width:50},

						                    {name:'programado',index:'programado', width:50},
						                    {name:'flg',index:'flg', width:50},
						                   {name:'ACCIONES',index:'', formatter: function(cellvalue, options, rowobject){
											    return '<div class="btn btn-in-grid" type="button" id="'+rowobject.id +'" onclick="actividad(this)" title="Nueva Actividad Operativa" style="height:30px;width:1px;">  <i class="fa fa-book "></i> </div>&nbsp;'+
											    '<div class="btn btn-in-grid" type="button" id="boton1" onclick="prueba2(this)" title="Enviar" style="height:30px; width:1px;">  <i class="fa fa-send "></i> </div>&nbsp;'+
											    '<div class="btn btn-in-grid" type="button" id="boton1" onclick="actividad(this)" title="Actualizar Programación desde Plantilla" style="height:30px; width:1px;">  <i class="fa fa-upload "></i> </div>&nbsp;';
											},
						width:50},
						                ],
						      //  rowNum:5,
                			//	rowList:[3,5,10],
					         //   pager: '#pageDetalle', //pageDetalle
				              //  sortname: 'id',
				              // viewrecords: true,
				               // sortorder: "desc",
				               // gridview: true,
                			//	loadonce:true,
                			//	rownumbers: true,
            }); //.jqGrid("filterToolbar");
             //$("#jqGrid").jqGrid('navGrid','#pageDetalle',{edit:true,add:true,del:true});
              //$("#pageConsulta").jqGrid('navGrid','#pageConsulta',{edit:true,add:true,del:true, search:false});
    }    
    /*fin de consulta*/






function actividad(button){ 	
	 var id=button.id; //1//2
            page = 'admin_home/formEdit/' + id;         
            $('#forminput').html("<img src= 'sangrid/images/loading.gif'").load(page);
            $("#forminput").dialog({
                top: 10,
                modal: true,
                title: "Registro de Actividad Operativa",
                height: '850',
                width: '1150',     
                repeateditems : false,     
               // autoOpen: false,     
                position: [100, 100],
                show: {
                    effect: 'fade'
                },
                buttons: [{
                   
                      html: "<img class='icon' src='sangrid/images/ok.png'>Grabar",
                    click: function() {
						insertaData();
					}
                    
                }, 
                {
                	 html: "<img class='icon' src= 'sangrid/images/cancel.png'>Cancelar",
	                    click: function() {
	                        $(this).dialog('close');   
	                    }
                }],
            });       
        console.log("llega aqui crea_actividad"+id);
}

function prueba2(button){
	console.log("llega aqui 2");
	alert("con alert2");
}
	
	function insertaData(){ //guardar la informacion
		alert("llego para insertar data");
		$(this).ready(function() {
			if (validasi()) {
				$.ajax({
						type: "GET",
						url:"admin_home/insertaJqgrid",// + //
							//$('#cadena').jqGrid("getGridParam", "postData").rows,
							//+ $("#cadena").serialize(),
						data: $('#fm').serialize(),
						dataType: "JSON",
						success: function(data) {
							//console.log('ini client id',data.operid);
							//operid = data.operid;
							//console.log('ini page', data.page);
							//console.log('ini row', data.row);
							$('#forminput').dialog('close');
							//alert(data);

							var id = data;//.page;
							$("#jqgridDetalle").jqGrid('setGridParam', {
								url: 'admin_home/selectJqgrid/'+id+'?id='+id, datatype: "json",
							});
							$("#jqgridDetalle").trigger("reloadGrid");

							/*setTimeout(function () {
							$('#jqgridDetalle').setGridParam({page: selectedPage}).trigger('reloadGrid');
							}, 50);*/
						},
				})
			}

		});

	}

	function validasi() {
		var status = true;
		$('#fm :input[required]:visible').each(function(index, element) {
			if ($(element).val().trim() == "") {
				status = false,
					//alert($(element).attr('id_cadena') + " necesario el dato");
					alert("El campo "+ $(this).attr("name") + " es necesario");
				$(element).focus();
				return false;
			}
		})
		return status;
	}


	function tarea(button){ 	
	 	var id=button.id; //1//2
        page = 'admin_home/formEditTarea/' + id;   //modificar aqui nrmz      
        $('#formactividad').html("<img src= 'sangrid/images/loading.gif'").load(page);
        $("#formactividad").dialog({
            top: 10,
            modal: false,
            title: "Actividad Operativa - Tarea",
            height: '950',
            width: '1150',     
            repeateditems : false,     
           // autoOpen: false,     
            position: [100, 100],
            show: {
                effect: 'fade'
            },
            buttons: [{
               
                  html: "<img class='icon' src='sangrid/images/ok.png'>Grabar",
                click: function() {
					insertaData();
				}
                
            }, 
            {
            	 html: "<img class='icon' src= 'sangrid/images/cancel.png'>cancel",
                    click: function() {
                        $(this).dialog('close');   
                    }
            }],
        });       
        console.log("tarea"+id);
	}



	

</script>
