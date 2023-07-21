


<h3>Cadena programática de valor</h3>

    <table id="jqGridCadena">
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
                    <td class="cell-cadena-header-Prg">Seleccionar</td>                    
                </tr>
            </thead>
            <tbody>
                <tr style="height:25px;">
	

	<?php	//$seleccion='';
	          foreach($cadena as $Cadenafuncionales):
	          	 $variable="<button   id='". $Cadenafuncionales->id ."'  class='btn btn-warning' type='button' onclick='marcaCadena(this)'>   <span class='glyphicon glyphicon-edit'> </span>      </button>"; 
	          	  echo  " <tr>  
                                        <td> {$Cadenafuncionales->meta} </td>
                                        <td> {$Cadenafuncionales->area}</td>  
                                        <td> {$Cadenafuncionales->funcion}</td> 
                                        <td> {$Cadenafuncionales->div_fun}</td> 
                                        <td> {$Cadenafuncionales->gru_fun}</td> 
                                        <td> {$Cadenafuncionales->categoria}</td> 
                                        <td> {$Cadenafuncionales->programa}</td> 
                                        <td> {$Cadenafuncionales->prod}</td> 
                                        <td> {$Cadenafuncionales->act}</td> 
                                        <td> {$Cadenafuncionales->finalidad}</td> 

                                        <td> {$variable}     </td>
                                         
                                    
                                        
                                    
                                        </tr>";
	            		
	            			
	         endforeach; ?>  
	           </tbody>

	</table>


<script>
	//$(document).ready(function () {
       /*  $( function() {
    $( "#dialog" ).dialog();
  } );*/

       // $('#forminputcadena').closest(".ui-dialog-content").dialog("close");    
		 $('#forminputcadena').closest(".ui-dialog-content").dialog("open");	
		  /*$("#forminputcadena").dialog({
            autoOpen: true,
            modal: true,
            width: 1700,
            draggable: true,
            resizable: true
        });*/

        //"use strict";
        //$("#jqGridCadena").jqGrid({
        jQuery("#jqGridCadena").jqGrid({
        	url: 'admin_home/getcadena/?mes=',
		    datatype: 'json',
		    mtype: 'GET',
            repeateditems : false,
            colModel: [
             	{name:'id',index:'id', width:75 , hidden: true },
            	{name:'meta',index:'meta', width:75 , hidden: false },
				{name:'area',index:'area', width:75 , hidden: false },
            	{name:'funcion',index:'funcion', width:75 , hidden: false },
            	{name:'div_fun',index:'div_fun', width:75 , hidden: false },
            	{name:'gru_fun',index:'gru_fun', width:75 , hidden: false },
            	{name:'categoria',index:'categoria', width:75 , hidden: false },
            	{name:'programa',index:'programa', width:75 , hidden: false },
            	{name:'prod',index:'prod', width:75 , hidden: false },
            	{name:'act',index:'act', width:75 , hidden: false },
            	{name:'finalidad',index:'finalidad', width:75 , hidden: false },

                {name:'ACCIONES',index:'',  formatter: function(cellvalue, options, rowobject){
											    return '<div class="btn btn-in-grid" type="button" id="'+rowobject.id +'" onclick="marcaCadena(this)" title="Agregar cadena Programática" style="height:30px;width:1px;">  <i class="fa fa-check  " style="font-size:18px;color:red"></i> </div>';
											},				width:100
				},
            ],
            /*data: [
            	
                { id: 10, firstName: "Angela", lastName: "Merkel" },
                { id: 20, firstName: "Vladimir", lastName: "Putin"},
                { id: 30, firstName: "David", lastName: "Cameron" },
                { id: 40, firstName: "Barack", lastName: "Obama"},
                { id: 50, firstName: "François", lastName: "Hollande" }
            ]*/
              // viewrecords: true,

                //rowNum: 30,

               // loadonce: true,
        }).jqGrid("filterToolbar");

    //});

   

     function marcaCadena(button){
			 var id=button.id; //1//2
			 console.log("marcar cadena"+id);

            var row = jQuery("#jqGridCadena").jqGrid('getRowData', id);
            var id = row.id;
            var meta = row.meta;
            var area = row.area;
            var funcion = row.funcion;
             var div_fun= row.div_fun;
             var gru_fun= row.gru_fun;
             var categoria= row.categoria;
             var programa= row.programa;
             var prod= row.prod;  
             var act= row.act;
             var finalidad= row.finalidad;
           // console.log("lametaes"+meta); 

            $("#id_cadena").val(id);


            // $('#myTable').jqGrid('getCell',row_id,'column_name');
            //


			 //rellena la tabla cadenade valor
			 var table = document.getElementById("cadena");
			 var row = table.insertRow(1);
			  //this adds row in 0 index i.e. first place
			 row.innerHTML = "<td>"+meta+"</td><td>"+area+"</td><td>"+funcion+"</td><td>"+div_fun+"</td><td>"+gru_fun+"</td><td>"+categoria+"</td><td>"+programa+"</td><td>"+prod+"</td><td>"+act+"</td><td>"+finalidad+"</td>";
			 var row = table.deleteRow(2);

           //  $('#forminputcadena').modal('hide');

             //document.getElementById('forminputcadena').hide();
              //window.close();

             //$(this).dialog('close');
           //   $('#forminputcadena').closest('.ui-dialog').find('.ui-dialog-content').hide();

			 $('#forminputcadena').closest(".ui-dialog-content").dialog("close");	
			// return id;	

		}



     </script>




