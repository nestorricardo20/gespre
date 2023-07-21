<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; //user

use App\Models\Multianual;
use App\Models\Ejercicio;
use App\Models\Actividad;
use App\Models\Periodo;
use App\Models\UnidadOperativa;
use App\Models\Objetivo;
use App\Models\Cadenafuncionale;
use App\Models\Politica;
use App\Models\Unidadmedida;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //nrmz
    public function __construct()
    {
       // $this->middleware('auth');
    }

    public function userHome()
    {
        //return view('home',['msg'=>' User']);
        //return view('welcome',['msg'=>' User']);
        return redirect('/')-> with(['msg'=>' User']);
    }
    public function user()
    {
        return view('home',['msg'=>' User']);
      //  return view('welcome',['msg'=>' User']);
    }


    public function adminHome()
    {        
        return view('welcome');
    }

     public function admin()
    {
        return view('home',['msg'=>' Admin']);      
    }





    public function superadminHome()
    {
        return view('home',['msg'=>' SuperAdmin']);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

     public function getAccion()// $id
    {
       // $id=$_GET["id"];

        //$id=$_POST["id"];
        //$accion = Accion::WHERE('id_tarea',$id)->get();

        //json_encode($accion); die();

        // echo ($accion); die();  
       // console.log(4); die();

        //return redirect()->route('accions.index')
          //  ->with('success', 'Accion deleted successfully');
        //header( 'Content-Type: application/json' );           
     // $tarea = Tarea::find($id);//$this->perfil->get_asistencia($num_doc);  //     

//      $accion=Accion::Where('id_tarea',$id)->get();//find($id);
        //  $accion = Accion::find($id);
        //$accion = User::Select('id','name')->first(1);
         $page = $_POST['page']; // get the requested page
 $limit = $_POST['rows']; // get how many rows we want to have into the grid
 $sidx = $_POST['sidx']; // get index row - i.e. user click to sort
 $sord = $_POST['sord']; // get the direction

 $search = isset($_POST['name']) ? $_POST['name'] : false; //filter
 $search_id = isset($_POST['id']) ? $_POST['id'] : false; //filter

       // print_r($name);
        $accion = User::Select('id','name')        
        ->where('name',  'like' ,  "%{$search}%")
        ->where('id',  'like' ,  "%{$search_id}%")
        ->orderBy($sidx, $sord)
        
      
       /*if ($_POST['_search'] == 'true') { 
        $accion1 =->where('name',$name) 
        }*/ 
        ->get();
        //->orderBy('email', 'ASC')
        //->get();

      //  $accion=User::$accion1;



        //print_r($accion[1]->id); die(); //$accion[1]->id

        //  $rows = '{ "data":[  ';
        //  $rows .=']}';  
     // echo $data; die();

      //$accion->id_tarea=$id;

        

 //$sql=$SQL = "SELECT a.id, a.invdate, b.name, a.amount,a.tax,a.total,a.note FROM invheader a, clients b WHERE a.client_id=b.client_id ORDER BY $sidx $sord LIMIT $start , $limit";

      $count=1;
        //$accion=false;
       $rows = '{ "rows":[  ';
       if(!$accion)
       {
                  $rows .=']}';    
       }
       else
       {   

            foreach($accion as $key=>$item){
                 $rows .= '{ ';           
                 //$rows .=  '"id": "'. $accion[$count]->id . '" ,"count": "'.$count . '","name": "'.$accion[$count]->name . '"   ';
                 $rows .=  '"id": "'.  $item ["id"] . '" ,"count": "'.$count . '","name": "'. $item ["name"] . '"   ';
                 $rows .= '},'; 
                 $count++;
            
            } 
            $rows = substr($rows, 0, -1);  
                    //$data .= ']}';
            $rows .= ']}';
       }         

           //echo json_encode($rows); //          
       echo $rows ; die();


    }

    public function getejercicio($id)
    {   
        $id = substr($id,0,-1);//01  10       
        //dd($id);
        $id= $id.'%';       
        $ejercicio=Periodo::where('estado','1')  ->where('id', 'like', $id)  ->where('ejercicio', '<>', '') ->get();
           // $options = "";
            $b= "<option value='' >[--Seleccione Ejercicio--]</option>";             
            foreach($ejercicio as $fila)
            {
                
               $b.="<option value='".$fila->id."'>".$fila->ejercicio."</option>"; 
                
            }
            echo $b ; die();           
    } 

    //getetapa
    public function getEtapa()
    {   
        $id= $_GET['id_ejercicio'];     
        $etapa=Periodo::Select('obs')-> where('estado','1') -> where('id',$id)->first();           
            echo $etapa->obs; die();           
    } 

    //getUnidadOperativa
    public function getUnidadOperativa()
    {   
        $id= $_GET['mes'];
        if($id){
       
            $unidades=UnidadOperativa::where('id_periodos', $id)->where('estado',1)-> first(); 
            if(!$unidades && auth()->user()->role=='admin')
            {
               // dd('no hay UnidadOperativa'); die();
                $datos['id_periodos']=$id;
                $datos['flg']='1';
                $datos['created_at']=date('Y-m-d H:i:s');
                $datos['updated_at']=date('Y-m-d H:i:s');

                for( $i=1;$i<9;$i++){
                    $datos['id_users']=$i;

                    UnidadOperativa::insert($datos);
                   // dd($datos); die();
                }
            }


            if(auth()->user()->role=='admin'){
                $unidad=UnidadOperativa::where('id_periodos', $id)->where('estado',1)-> get();     
            }
            else{
                $id_user=auth()->user()->id;
                $unidad=UnidadOperativa::where('id_periodos', $id)->where('estado',1)-> where('id_users',$id_user)-> get();
            }
           
           $rows = '{ "rows":[  ';
           if(!$unidad)
           {
                      $rows .=']}';                     
           }
           else
           {   
                foreach($unidad as $key=>$item){
                    $description=User::Select('name')->where('id',$item['id_users'])->first();
                    $flg=($item ["flg"]=='1')?'liberado':'registrado';
                     $rows .= '{ ';                 
                     $rows .=  '"id": "'.  $item["id"] . '" ,  "id_users": "' .  $item["id_users"] . '",  "id_periodos": "' .  $item["id_periodos"] . '" ,  "descripcion": "' .  $description->name . '" , "marco": "'. $item ["marco"] . '","programado": "'. $item ["programado"] . '", "apm": "'. $item ["apm"] . '","da": "'. $item ["da"] . '", "necesidad_total": "'. $item ["necesidad_total"] . '","flg": "'. $flg. '"   ';
                     $rows .= '},';                     
                } 
                $rows = substr($rows, 0, -1);                      
                $rows .= ']}';
           }   
           echo $rows ; die();         
        }
        else{
            echo '{ "rows":[  ]}'; die();
        }
    }
    //selectJqgrid
     public function selectJqgrid($id)
    {   
       $id_uni_ope= $_GET['id'];            
            $unidad=Actividad::where('id_area', $id_uni_ope)->where('estado',1)-> get();                
       $rows = '{ "rows":[  ';
       if(!$unidad)
       {
                  $rows .=']}';                     
       }
       else
       {   
            foreach($unidad as $key=>$item){
                $description=User::Select('name')->where('id',$item['id_users'])->first();
                 $rows .= '{ ';                 
                 $rows .=  '"descripcion": "'.  $item ["descripcion"] . '" ,    "id": "' .  $item ["id"]. '",    "cc": "' .  $item ["cc"]. '"  ,"um": "'. $item ["unidad_medida"] . '"   ,"fisica": "'. $item ["fisica"] . '"
  ,"financiera": "'. $item ["financiera"] . '"    ';
                 $rows .= '},';                     
            } 
            $rows = substr($rows, 0, -1);                      
            $rows .= ']}';
       }   
       echo $rows ; die();         
    }

    //formEdit
     public function formEdit($id_uni_ope){
        //$data=Actividad::where('id_unidad_operativa',$id_uni_ope)->get();
        $data['objetivo']=Objetivo::where('estado',1)->where('accion','') ->orderBy('objetivo', 'asc')  ->get();
       // $data['cadenafuncional']=Cadenafuncionale::where('estado',1)->get();
        $data['politica']=Politica::where('estado',1)->where('linea','') ->orderBy('politica', 'asc') ->get();
        $data['unidadMedida']=Unidadmedida::where('estado',1) ->orderBy('descripcion', 'asc') ->get();
        $data['id_area']=$id_uni_ope;        //print_r($data->objetivo);
        return view('formEdit', $data);
    }
     public function formEditcadena($id){ //el id puede ser el area que pide en la cadena funcional nrmz


        //$data=Actividad::where('id_unidad_operativa',$id_uni_ope)->get();

        $data['cadena']=Cadenafuncionale::where('estado',1)->get();       
        return view('admin_home/formEditcadena', $data);
    }

    //addUnidadOperativa

    public function addUnidadOperativa(){

        dd($_GET); die();
        $data=Actividad::where('id_area',$id_uni_ope)->get();
        return view('formEdit', $data);
    }

    //editArea
    public function editArea(){
        //dd($_GET); die();
        $id=$_GET['jqGridConsulta_id'];
        $datos['marco']=$_GET['marco'];
        if($_GET['programado']){
            $datos['programado']=$_GET['programado'];    
        }
        
        $datos['flg']=$_GET['flg'];
        $datos['updated_at']=date('Y-m-d H:i:s');
        UnidadOperativa::where('id','=',$id)->where('estado','1')->update($datos);

        $unidad=UnidadOperativa::where('id_periodos', $_GET['mes'])->where('estado',1)-> get();

         $rows = '{ "rows":[  ';
           if(!$unidad)
           {
                      $rows .=']}';                     
           }
           else
           {   
                foreach($unidad as $key=>$item){
                    $description=User::Select('name')->where('id',$item['id_users'])->first();
                     $rows .= '{ ';                 
                     $rows .=  '"id": "'.  $item["id"] . '" ,  "id_users": "' .  $item["id_users"] . '",  "id_periodos": "' .  $item["id_periodos"] . '" ,  "descripcion": "' .  $description->name . '" , "marco": "'. $item ["marco"] . '","programado": "'. $item ["programado"] . '" ,"flg": "'. $item ["flg"] . '"   ';
                     $rows .= '},';                     
                } 
                $rows = substr($rows, 0, -1);
                $rows .= ']}';
           }   
           echo $rows ; die();   
        //$data=Actividad::where('id_unidad_operativa',$id_uni_ope)->get();

        //return view('formEdit', $data);
    }


    //getaccion
     public function getaccionadmin($id)
    {   
        $id = substr($id,0,-2);//01  10       
        //dd($id);
        $id= $id.'%';       
        $accion=Objetivo::where('estado','1')  ->where('id', 'like', $id)  ->where('accion', '<>', '') ->orderBy('accion', 'asc') ->get();
           // $options = "";
            $b= "<option value='' >[--Seleccione Accion--]</option>";             
            foreach($accion as $fila)
            {
                
               $b.="<option value='".$fila->id."'>".$fila->accion."</option>"; 
                
            }
            echo $b ; die();           
    } 

      public function getlineaaccion($id)
    {   
        $id = substr($id,0,-2);//01  10       
        //dd($id);
        $id= $id.'%';       
        $linea=Politica::where('estado','1')  ->where('id', 'like', $id)  ->where('linea', '<>', '') ->orderBy('linea', 'asc') ->get();
           // $options = "";
            $b= "<option value='' >[--Seleccione Línea de acción--]</option>";             
            foreach($linea as $fila)
            {
                
               $b.="<option value='".$fila->id."'>".$fila->linea."</option>"; 
                
            }
            echo $b ; die();           
    } 

    public function getcadena(){//getcadena

        //dd($_GET); die();
        //$data=Actividad::where('id_unidad_operativa',$id_uni_ope)->get();

        //getcadena
        $data=Cadenafuncionale::where('estado',1)->get();    
        if(isset($_GET['meta'])){
            $data=Cadenafuncionale::where('estado',1)->where('meta',$_GET['meta'])->get();        
        }
        

         $rows = '{ "rows":[  ';
         foreach($data as $key=>$item){
                    //$description=User::Select('name')->where('id',$item['id_users'])->first();
                     $rows .= '{ ';                 
                     $rows .=  '"id": "'.  $item["id"] . '" ,  "funcion": "' .  $item["funcion"] . '",  "div_fun": "' .  $item["div_fun"] . '" ,  "gru_fun": "' . $item["gru_fun"] . '" , "categoria": "'. $item ["categoria"] . '","programa": "'. $item ["programa"] . '" ,"prod": "'. $item ["prod"] . '","act": "'. $item ["act"] . '" ,"finalidad": "'. $item ["finalidad"] . '","meta": "'. $item ["meta"] . '" ,"area": "'. $item ["area"] . '"   ';
                     $rows .= '},';                     
                } 
                $rows = substr($rows, 0, -1);                      
                $rows .= ']}';

        echo $rows ; die();

        //return view('formEdit', $data);
    }


    public function insertaJqgrid(Request $request){//getcadena

     //   dd($request); die();
         $validatedData = $request->validate([
            'id_cadena' => 'required|max:25|min:1',
            'id_area' => 'required|max:25|min:1',
            'accionadmin' => 'required|max:4',
        ]);
/*  //agregar julio nrmz
      "id_cadena" => "2"
      "id_area" => "17"
      "objetivo" => "1100"
      "accionadmin" => "1101"
      "politica" => "1300"
      "lineaaccion" => "1301"
      "denominacion" => "sssss"
      "descripcion" => "ffff"
      "localizacion" => "llllll"
      "beneficios" => "bbbbbbbbbbbbbbbbbbb"
      "implementacion" => "iiiiiiiiiiiiiiiiii"
      "unidadmedida" => "28"*/

      /*preguntar fisica y cc*/

      $data= [
            'id_cadena'=>$request->input('id_cadena'),
            'cod_ugel'=>'03',
            'id_area'=>$request->input('id_area'),
            //'id_objetivo'=>$request->input('objetivo'), //objetivo accion
            'id_objetivo'=>$request->input('accionadmin'), //objetivo accion

            //'accionadmin'=>$request->input('accionadmin'),//

            //'id_politica'=>$request->input('politica'), //politica linea
            'id_politica'=>$request->input('lineaaccion'), //politica linea

            //'lineaaccion'=>$request->input('lineaaccion'),//

            'denominacion'=>$request->input('denominacion'),
            'descripcion'=>$request->input('descripcion'),
            'localizacion'=>'Lima',
            //'beneficiario'=>$request->input('beneficios'),
            'implementacion'=>$request->input('implementacion'),
            'unidad_medida'=>$request->input('unidadmedida'),
            'created_at'=> date("Y-m-d h:m:s"),//$request->input('unidadmedida'),
            'updated_at'=> date("Y-m-d h:m:s"),//$request->input('unidadmedida'),
            'cc'=>'0011',
            'fisica'=>'0.0',
            'financiera'=>'0.0'
      ] ;
       DB::table('actividads')->insert($data); //en plural tal cual esta la tabla en la bd
 
        // En caso de que se haya pasado la validación.
       // return "Validación correcta";
         //grabar la informacion en la tabla ActividadOperativa
         //$Actividad = Actividad::create($request->all());
       $id=$request->input('id_area');
       echo $id ; die();       
    }
     public function formEditTarea($id_uni_ope){
        //$data=Actividad::where('id_unidad_operativa',$id_uni_ope)->get();
        $data['objetivo']=Objetivo::where('estado',1)->where('accion','')->get();
       // $data['cadenafuncional']=Cadenafuncionale::where('estado',1)->get();
        $data['politica']=Politica::where('estado',1)->where('linea','')->get();
        $data['unidadMedida']=Unidadmedida::where('estado',1)->get();
        $data['id_area']=$id_uni_ope;        //print_r($data->objetivo);
        return view('admin_home/formEditTarea', $data);
    }

    

}




//https://grapesjs.com/demo.html