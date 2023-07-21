
{{--  <script src="{{ asset('js/jquery.inputmask.bundle.js') }}"></script>  --}}
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>

<style type="text/css">
	
	.reset {
    all: revert;
}
</style> --}}
<style type="text/css">
	.tablen {
  font-family: Arial, Helvetica, sans-serif;
  width: 100%;
}

.tablen thead {
  position: sticky;
  top: 0;
}

.tablen thead th {
  border: 1px solid #e4eff8;
  background: white;
  cursor: pointer;
}

.tablen thead th.header-label {
  cursor: pointer;
  background: linear-gradient(0deg, #e4eff8, #4578a2 5%, #e4eff8 150%);
  color: white;
  /*border: 0px solid white;*/
  /*width: 70%;*/
}

.tablen th,
.tablen td {
  padding: 0.2rem 0.5rem;
  text-align: center;
  width: 15px;
  
}

.tablen td {
  border: 1px solid #e4eff8;
}

.tablen input {
  width: 100%;
}
</style>


<form method="get" id="fm" name="calculator">

	<div class="row">  
		<div class="col-md-11">
			<table class="table-bordered" id="cadena" name="cadena" style="font-size: 11.5px; width:100%;">
		                            <thead>
		                                <tr>
		                                    <td class="cell-cadena-header-Fun">Meta</td>
		                                    <td class="cell-cadena-header-Fun">Area</td>
		                                    <td class="cell-cadena-header-Fun">Función</td>
		                                    <td class="cell-cadena-header-Fun">Div.Func.</td>
		                                    <td class="cell-cadena-header-Fun">Grupo Func.</td>
		                                    <td class="cell-cadena-header-Prg">Categ.</td>
		                                    <td class="cell-cadena-header-Prg">Programa</td>
		                                    <td class="cell-cadena-header-Prg">Prod./Proy.</td>
		                                    <td class="cell-cadena-header-Prg">Act/Obr/Acc.</td>
		                                    <td class="cell-cadena-header-Prg">Finalidad</td>
		                                    
		                                </tr>
		                            </thead>
		                            <tbody>
		                                <tr style="height:25px;">
		                                	 <td id="txtRegAO_Cadena_fun" class="cell-cadena-value"></td>
		                                    <td id="txtRegAO_Cadena_dfn" class="cell-cadena-value"></td>
		                                    <td id="txtRegAO_Cadena_fun" class="cell-cadena-value"></td>
		                                    <td id="txtRegAO_Cadena_dfn" class="cell-cadena-value"></td>
		                                    <td id="txtRegAO_Cadena_gfn" class="cell-cadena-value"></td>
		                                    <td id="txtRegAO_Cadena_cat" class="cell-cadena-value"></td>
		                                    <td id="txtRegAO_Cadena_ppt" class="cell-cadena-value"></td>
		                                    <td id="txtRegAO_Cadena_ppy" class="cell-cadena-value"></td>
		                                    <td id="txtRegAO_Cadena_aoa" class="cell-cadena-value"></td>
		                                    <td id="txtRegAO_Cadena_fin" class="cell-cadena-value"></td>
		                                </tr>
		                            </tbody>
		    </table>
		</div>

	     <div class="col-md-1">
	                        <button type="button" id="btnRegAO_Cadena" class="btn btn-sm btn-danger" onclick="cadenaValor(this)" style="margin-top:15px;"><i class="fa fa-search"></i></button>
	    </div>
	</div>


	 <div class="row">      
	 	 <input type="hidden" name="id_cadena" id="id_cadena" requiered value="">
	 	 <input type="hidden" name="id_area" id="id_area" requiered  value="<?=$id_area;?> ">
            <spam class="control-label" for="objetivo" style="font-weight: 600" >Objetivo Estratégico Institucional</span>
            <select class="form-control input-sm" id="objetivo" name="objetivo" required ><option selected="selected" value="">(SELECCIONAR)</option>
            	<?php	$seleccion='';
            		foreach($objetivo as $objetivos):
            	?>
            			<option value="{{$objetivos->id}}"> {{ $objetivos->objetivo }}</option>
            	<?php endforeach; ?>   				
			</select>            
     </div>
     <div class="row" >
     		<label class="control-label" for="accion" style="font-weight: 600">Acción Estratégica Institucional</label>
            <select class="form-control input-sm" id="accionadmin" name="accionadmin" required ><option selected="selected" value="">(SELECCIONAR)</option>            	
			</select>        	
     </div>
      <div class="row">   
      		<div class="col-md-6">                    	
	            <label class="control-label" for="politica" style="font-weight: 600">Política</label>
	            <select class="form-control input-sm" id="politica" name="politica" required ><option selected="selected" value="">(SELECCIONAR)</option>
	            	<?php	$seleccion='';
	            		foreach($politica as $politicas):
	            	?>
	            			<option value="{{$politicas->id}}"> {{ $politicas->politica }}</option>
	            	<?php endforeach; ?>   				
				</select>  
			</div>
			<div class="col-md-6">
				<label class="control-label" for="accion" style="font-weight: 600">Linea de Acción</label>
	            <select class="form-control input-sm" id="lineaaccion" name="lineaaccion" required ><option selected="selected" value="">(SELECCIONAR)</option>            	
				</select> 
			</div>          
     </div>

     <div class="row">
          
                <label class="control-label" for="txtRegAO_Denominacion">Denominación</label>
                <textarea class="form-control input-sm" cols="20" id="denominacion" maxlength="3000" name="denominacion" rows="1" required ></textarea>
           
	</div>
	<div class="row">
           
                <label class="control-label" for="txtRegAO_Denominacion">Descripción</label>
                <textarea class="form-control input-sm" cols="20" id="descripcion" maxlength="3000" name="descripcion" rows="1" required ></textarea>
            
	</div>

	
	<div class="row">           
                <label class="control-label" for="txtRegAO_Denominacion">Implementación</label>
                <textarea class="form-control input-sm" cols="20" id="implementacion" maxlength="3000" name="implementacion" rows="1" required  ></textarea>            
	</div>

	



 	<div class="row">   
 		<div class="col-md-4">
        {{--         <label class="control-label" for="txtRegAO_Denominacion">Localización</label>
                <textarea class="form-control input-sm" cols="20" id="localizacion" maxlength="3000" name="localizacion" rows="1" required ></textarea> --}}
        
     			<label class="control-label" for="intervencion" style="font-weight: 600">Intervención</label> <br>
     			<input  type="radio"  name="intervencion" value="no_pedagogico">No pedagógico
			    <input  type="radio"  name="intervencion" value="pedagogico">Pedagógico
     	
            </div>
      		

			<div class="col-md-8"> 
				<label class="control-label" for="pilar" style="font-weight: 600">Pilar al que pertenece la actividad</label> <br>
				<input   type="checkbox" name="pilar1" value="gusta">Pilar I
			    <input   type="checkbox" name="pilar2" value="gusta">Pilar II
			    <input  type="checkbox" name="pilar3" value="gusta">Pilar III
			    <input  type="checkbox" name="pilar4" value="gusta">Pilar IV
			</div>

     </div>
     <div class="row">   
     	
	     	<div class="col-md-12"> 
	     			<label class="control-label" for="recursos" style="font-weight: 600">Fuente de Financiamiento</label> <br>
	     			<input  type="checkbox" name="ro" value="gusta">Recursos Ordinarios
				    <input  type="checkbox" name="rdr" value="gusta">Recursos Directamente Recaudados
				    <input  type="checkbox" name="dt" value="gusta">Donaciones y transferencias
				    <input  type="checkbox" name="ope" value="gusta">Recursos por Operación
				    <input  type="checkbox" name="otros" value="gusta">Otros
	     	</div>
     	
     </div>	

      <div class="row">
            
            <div class="col-md-6">                    	
	            <label class="control-label" for="unidadmedida" style="font-weight: 600">Unidad de Medida</label>
	            <select id="unidadmedida" name="unidadmedida" required  ><option selected="selected" value="">(SELECCIONAR)</option> {{-- class="form-control input-sm"  --}}
	            	<?php	$seleccion='';
	            		foreach($unidadMedida as $unidad):
	            	?>
	            			<option value="{{$unidad->id}}"> {{ $unidad->descripcion }}</option>
	            	<?php endforeach; ?>   				
				</select>  
			</div>	
	
	
             <div class="col-md-6">
                <label class="control-label" for="txtRegAO_Denominacion">Es Acumulativa</label>
                <select name='acumulativa' id='acumulativa'>
                	<option value="Si" selected="selected"  >Si</option>
		          	<option value="No">No</option>	
                </select> 
            </div> 
		          
        
                {{-- <textarea class="form-control input-sm" cols="20" id="beneficios" maxlength="3000" name="beneficios" rows="1" required ></textarea> --}}

            </div>
	</div>



     <div class="row">
     		<div class="col-md-11">
     				<table class="tablen"  >
					  <thead>
					    <tr>
					      <th class="header-label">Ene</th>
					      <th class="header-label">feb</th>
					      <th class="header-label">Mar</th>
					      <th class="header-label">Abr</th>
					      <th class="header-label">May</th>
					      <th class="header-label">Jun</th>
					      <th class="header-label">Jul</th>
					      <th class="header-label">Ago</th>
					      <th class="header-label">Set</th>
					      <th class="header-label">Oct</th>
					      <th class="header-label">Nov</th>
					      <th class="header-label">Dic</th>
					       <th class="header-label">Total</th>
					    </tr>					   
					  </thead>
					  <tbody>
					  	<tr>
					  		<td><input name="ene" type="text" value="0"></td>
					  		<td><input name="feb" type="text" value="0"></td>
					  		<td><input name="mar" type="text" value="0"></td>
					  		<td><input name="abr" type="text" value="0"></td>
					  		<td><input name="may" type="text" value="0"></td>
					  		<td><input name="jun" type="text" value="0"></td>
					  		<td><input name="jul" type="text" value="0"></td>
					  		<td><input name="ago" type="text" value="0"></td>
					  		<td><input name="set" type="text" value="0"></td>
					  		<td><input name="oct" type="text" value="0"></td>
					  		<td><input name="nov" type="text" value="0"></td>
					  		<td><input name="dic" type="text" value="0"></td>
					  		<td id="total"  disable > </td> 
					  	</tr>
					  </tbody>
					</table>
            </div> 
     </div>


  	
</form>
<div id="forminputcadena"></div> {{-- ingreso de datos para grabar --}}


<script>
	$(document).ready(function () { 
	/*inicio combo objetivo*/
            $("#objetivo").change(function(){        
                 let id=$(this).val();
                //alert(id);             
                $('#accionadmin').empty();
                $('#accionadmin').append('<option value="0" disabled selected> Procesando... </option>');
               // alert(id);
              // document.getElementById('actividad').value = '0';
                $.ajax({
                    type:'GET',
                    url:'admin_home/getaccionadmin/'+id,
                    data:{id:id},
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
            });
        /*fin combo objetivo*/

        /*inicio combo politica*/
            $("#politica").change(function(){        
                 let id=$(this).val();
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
            });
        /*fin combo politica*/
    })

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

	
	form = document.forms.calculator;
	   form.ene.oninput = calculate;
    form.acumulativa.onchange = calculate;
    form.feb.oninput = calculate;
    form.mar.oninput = calculate;
    form.abr.oninput = calculate;
    form.may.oninput = calculate;
    form.jun.oninput = calculate;
    form.jul.oninput = calculate;
    form.ago.oninput = calculate;
    form.set.oninput = calculate;
    form.oct.oninput = calculate;
    form.nov.oninput = calculate;
    form.dic.oninput = calculate;

    function calculate() {
    	//si es acumulativo
    	let result =0;
    	if(form.acumulativa.value=='Si'){
    		result=parseInt(form.ene.value)+parseInt(form.feb.value)+parseInt(form.mar.value)+parseInt(form.abr.value)+parseInt(form.may.value)+parseInt(form.jun.value)+parseInt(form.jul.value)+parseInt(form.ago.value)+parseInt(form.set.value)+parseInt(form.oct.value)+parseInt(form.nov.value)+parseInt(form.dic.value);
    	}
    	else{
    		result=Math.max(parseInt(form.ene.value),parseInt(form.feb.value),parseInt(form.mar.value),parseInt(form.abr.value),parseInt(form.may.value),parseInt(form.jun.value),parseInt(form.jul.value),parseInt(form.ago.value),parseInt(form.set.value),parseInt(form.oct.value),parseInt(form.nov.value),parseInt(form.dic.value));

    	}    
    	document.getElementById('total').innerHTML = result; //result;    
    }

    calculate();
    




</script>





