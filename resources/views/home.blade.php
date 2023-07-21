<x-app-layout>

		<!-- begin::Body -->




			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor-desktop m-grid--desktop m-body"  style="padding-top: 30px!important;"  >
				<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver	m-container m-container--responsive m-container--xxl m-page__container"style="width:1700px !important ;" >

					<div class="m-grid__item m-grid__item--fluid m-wrapper">
						<!-- BEGIN: Subheader -->
					{{-- 	<div class="m-subheader ">
							<div class="d-flex align-items-center">


								<div class="mr-auto">
									<h3 class="m-subheader__title ">
										Programación y Aprovación
									</h3>
								</div>

								<div>
									<span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
										<span class="m-subheader__daterange-label">
											<span class="m-subheader__daterange-title"></span>
											<span class="m-subheader__daterange-date m--font-brand"></span>
										</span>
										<a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
											<i class="la la-angle-down"></i>
										</a>
									</span>
								</div>
							</div>
						</div> --}}
						<!-- END: Subheader -->
						<div class="m-content">
							<!--Begin::Main Portlet-->

							<!--End::Main Portlet-->
							<!--Begin::Main Portlet-->

								<!--Begin::Main Portlet-->

								<!--End::Main Portlet-->
							<!--Begin::Main Portlet-->
							<div class="row col-md-12">
								<div class="col-xl">
									<div class="m-portlet m-portlet--mobile ">
										<div class="m-portlet__head">
											<div class="m-portlet__head-caption">
												<div class="m-portlet__head-title">
													<h3 class="m-portlet__head-text"> Bandeja POI - Actividad Operativa</h3>
												</div>
											</div>
											{{-- <div class="m-portlet__head-tools"> </div> --}}
										</div>

										<div class="m-portlet__body">
											<!--begin: Datatable -->

											{{-- <h5 id="titulo_bandeja">Bandeja POI - Actividad Operativa</h5>
				                            <h5 id="subtit_bandeja" style="color:#FA1920; background-color: #fff3cd; padding-top:10px; padding-bottom: 5px; display: none;">
				                                <i class="fa fa-exclamation-circle" aria-hidden="true"></i>  Aún tiene actividades operativas con Centro de Costo inactivo.
				                                <span style="padding-left:7px;"></span>Pulse el botón<i class="fa fa-edit" style="color:#08088A !important; font-size: 18px; padding-left: 6px;"></i> para actualizar.
				                            </h5> --}}

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

													<table id="jqGridConsulta"></table>
													<table id="pageConsullta"></table>

													{{-- <div id="pageConsullta"></div> --}}

													

													<p></p>
													<h2>Actividades Operativas</h2>

												    <table id="jqgridDetalle"></table>
													<div id="pageDetalle"></div>
													<p>
														<div id="forminput"></div> {{-- ingreso de datos para grabar --}}
													</p>

													<p>



												    	<table id="simpletable"></table>
													</p>
												    <p>
												    	<table id="rowed2" > </table>
												    </p>
												</div>
										</div>

										{{-- <div class="m-portlet__head">
										</div> --}}
										<hr>

										{{-- <div class="m-portlet__body">
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
	var baseUrl;
	 @if(auth()->user()->role=='user' ) 
	  {
		baseUrl	='home/';
	  }
	  @elseif (auth()->user()->role=='admin' )    {
	  	baseUrl='admin_home/'
	  }
	   @endif

	let operid = 0;
	//let dataDetalle;
	let id_user = 0;
	let triggerClick = true;
	//let sortName = "nama";
	let postData;
	//let baseUrl = window.location.origin;
	//console.log(baseUrl);

$(document).ready(function () {

	 //var user = {{ auth()->user()->role }};
    //console.log("This is javascript session "+ baseUrl);

 		/*inicio combo multianual*/
            $("#multianual").change(function(){        
                 //let id=$(this).val();
                 var id=$(this).val();
                //alert(id);             
                $('#ejercicio').empty();
                $('#ejercicio').append('<option value="0" disabled selected> Procesando... </option>');
               // alert(id);
              // document.getElementById('actividad').value = '0';
                $.ajax({
                    type:'GET',
                    url: baseUrl+'getejercicio/'+id,
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
            });
        /*fin combo multianual*/

        /*Grilla jqgrid*/
        var dropdown;
        var dataDetalle;
		var Url = baseUrl+'getUnidadOperativa/?mes=';//var Url = 'home/getUnidadOperativa/?mes=';
        $("#jqGridConsulta").jqGrid({ 
		    url: baseUrl+'getUnidadOperativa/?mes=',
		   // url:'home/getUnidadOperativa/',  
		    datatype: 'json',
		    mtype: 'GET', //insert data from the data object we created above 
		    width: 1500,  
		    colNames: [
							                    'Unidad ID',
							                     'id_users ',
							                    'DESCRIPCION ',
							                    'id_periodos ',
							                    'MARCO/PIM',
							                    'PROGRAMADO',
							                    'ESTADO',
							                    'ACCIONES',
							                ],
            colModel: [                   
	                    {name:'id',index:'id', width:55 , hidden: true },
	                    {name:'id_users',index:'id_users', width:300,editable: true, hidden: true},
	                    {name:'id_periodos',index:'id_periodos', width:300,editable: true, hidden: true},
	                    {name:'descripcion',index:'descripcion', width:300,editable: true},
	                    {name:'marco',index:'marco', width:300,editable: true},
	                    {name:'programado',index:'programado', width:300,editable: true},
	                    {name:'flg',index:'flg', width:300,editable: true},
	                    /*{name:'ACCIONES',index:'', formatter: function(cellvalue, options, rowobject){
											    return '<button type="button">  <i class="fa fa-upload"></i> </button>';
											},
								width:290},*/
						{name:'ACCIONES',index:'', formatter: function(cellvalue, options, rowobject){
											     return '<div class="btn btn-in-grid" type="button" id="'+rowobject.id +'" onclick="prueba1(this)" title="Nueva Actividad Operativa" style="height:30px;width:1px;">  <i class="fa fa-book "></i> </div>&nbsp;'+
											    '<div class="btn btn-in-grid" type="button" id="boton1" onclick="prueba2(this)" title="Enviar" style="height:30px; width:1px;">  <i class="fa fa-send "></i> </div>&nbsp;'+
											    '<div class="btn btn-in-grid" type="button" id="boton1" onclick="prueba1(this)" title="Actualizar Programación desde Plantilla" style="height:30px; width:1px;">  <i class="fa fa-upload "></i> </div>&nbsp;';
											},
						width:290},
						/*{ name: 'ACCIONES', index: 'Acciones', width: 300, align: 'left', editable: false, edittype: 'select', editoptions: {  value:"FE:FedEx;IN:InTime;TN:TNT;AR:ARAMEX"} },*/

						/*{
							//label: "Edit Actions",
	                        name: "actions",
	                        width: 150,
	                        formatter: "actions",
	                        formatoptions: {
	                            keys: true,

	                            editOptions: {  //value:'MyButton' 											   
											},
	                            addOptions: {},
	                            delOptions: {}
	                        } 
	                        formatoptions:{baseLinkUrl:'someurl.php', addParam: '&action=edit', idName:'myid'},       
	                    },*/

	                ],
	       /* navigatorExtraButtons="{button1:{name:'seperator'}, button2:{name:'callMe', title:'Call Me Button', icon:'ui-icon-gear'}, button3:{name:'seperator'}, button4:{name:'callMe2', title:'Call Me 2 Button',icon:'ui-icon-gear'}}", 
	        rownumbers: true,      */

	        //onSelectRow
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
						url: baseUrl+'selectJqgrid/'+ id+'?id='+data.id+'&id_periodos='+data.id_periodos, datatype: "json",  
					});
					jQuery("#jqgridDetalle").trigger("reloadGrid");
				}
			//	var operids = $(this).jqGrid("getCell", id, "id");
			//	var id_users = $(this).jqGrid("getCell", id_users, "id_users");
				console.log('ini operids',operid);//
			//	console.log('ini id_users',id_users);//  selected te daba la casilla
			},   

        });
        jQuery("#pageConsulta").jqGrid('navGrid',"#jqGridConsulta",{edit:false,add:false,del:false});

      
        /* fin Grilla jqgrid*/

        /*grilla detalle*/
        jQuery("#jqgridDetalle").jqGrid({
			mtype: "get",
			url: baseUrl+'getUnidadOperativa/?mes=',
			datatype: "json",
			// width: 1500, 
			colNames: ['descripcion', 'cc', 'U. M.', 'ACCIONES'],
			colModel: [{
					name: 'descripcion',
					index: 'descripcion',
					width: 300,
					fixed: true,
					sortable: false,
					search: false,
				},
				{
					name: 'cc',
					index: 'cc',
					width: 300,
					fixed: true,
					sortable: false,
					search: false,
				},
				{
					name: 'um',
					index: 'um',
					align: 'right',
					width: 200,
					fixed: true,
					sortable: false,
					search: false,
				},
				{name:'ACCIONES',index:'', width:290},
			],

			//footerrow: true, //crea en la footer para agregar data
			//userDataOnFooter: true,
			sortable: true,
			width: 1535,
			viewrecords: true,
			// sortname: "clientID",
			//sortname: sortName,
			rownumbers: true,
			rowNum: 10,
			sortorder: "asc",
			loadonce: true,
			//mtype: "GET",
			toolbar: [true, "top"],
			// caption: "JSON Example"
		});
		/*fin grilla detalle*/

		$('#jqGridConsulta').jqGrid("setSelection", operid);

        /*Inicio combo ejercicio*/
         $('#ejercicio').change(function(){ 
                    var id_ejercicio= $(this).val(); 
                    var id_multianual = $( "#multianual" ).val();   
                   // var selection = $(this).val();
                    dropdown = {		      
				        mes: id_ejercicio
				    };   

				    $.ajax({
					        type: "GET",
					        url: baseUrl+"getUnidadOperativa/",
					        data: dropdown,
					        async: false,
					        cache: false,
					        success: function (data) {         
					            $("#jqGridConsulta").setGridParam({ url: Url + id_ejercicio})               
					             $("#jqGridConsulta").trigger('reloadGrid');
					        }
					})                
                     

                    $.ajax({
                    	type:'GET',                    	
                    	url: baseUrl+"getEtapa",
                    	data:{id_ejercicio:id_ejercicio},
                    	success:function(response){                    		 
                    		 document.getElementById('etapa').value = response;    
                    		// document.getElementById('user').value = id_ejercicio;  

                    	}
                    });

                    


          });
         /*Fin combo ejercicio*/
    
       



});

 function prueba1(button){
        var id=button.id; //1//2

            page = baseUrl+'formEdit/' + id;         
            $('#forminput').html("<img src= 'sangrid/images/loading.gif'").load(page);
            $("#forminput").dialog({
                top: 10,
                modal: true,
                title: "Registro de Actividad Operativa",
                height: '910',
                width: '1150',               
                position: [100, 100],
                show: {
                    effect: 'fade'
                },
                buttons: [{
                    html: "<img class='icon' src= 'sangrid/images/cancel.png'>Cancelar",
                    click: function() {
                        $(this).dialog('close');
                    }
                }, {
                    html: "<img class='icon' src='sangrid/images/ok.png'>Grabar",
                    click: function() {
                    	insertaData();
                        //url = '/SangridController/updateJqgrid/' + clientID;
                        //updateDataClients();
                        //return false;

                    }
                }],
            });       
        console.log("llega aqui "+id);
      //  alert("con alert "+id);
}

function insertaData(){ //guardar la informacion
		//alert("llego para insertar data admin");
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

	

function prueba2(button){
	console.log("llega aqui 2");
	alert("con alert2");
}
//var nMes;
//var tabla;
  	/*consulta*/
 function consulta(button,tabla){
 	var selection = $("#ejercicio").val();  //$(this).val();
 	var dropdown;
	var Url = baseUrl+'getUnidadOperativa/?mes='; 

	//alert(selection);
         	
		    dropdown = {		        mes: selection		    };
		    $.ajax({
		        type: "GET",
		        url: baseUrl+"getUnidadOperativa/",
		        data: dropdown,
		        async: false,
		        cache: false,
		        success: function (data) {         
		            $("#jqGridConsulta").setGridParam({ url: Url + selection})               
		             $("#jqGridConsulta").trigger('reloadGrid');
		        }
		    }) 


        // });

    //});


 	
           
    }    


    /*fin de consulta*/

    



</script>


