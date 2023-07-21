<?php

namespace Database\Seeders;
  use App\Models\User;
    use Illuminate\Support\Facades\Hash;
    use App\Models\Multianual;
    use App\Models\Ejercicio;
    use App\Models\Periodo;
    use App\Models\Actividad;
    use App\Models\Estado;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::factory()->create([
                'name' => 'direccion',
                'dni' => '00000001',
                'password' => Hash::make('direccion'),
                'email' => 'direccion@ugel03.gob.pe',
                'email_verified_at'=>'2023-05-03 16:08:07',
                'role'=>'0',
            ]);
            User::factory()->create([
                'name' => 'agebre',
                'dni' => '00000002',
                'password' => Hash::make('agebre'),
                'email' => 'agebre@ugel03.gob.pe',
                'email_verified_at'=>'2023-05-03 16:08:07',
                'role'=>'0',
            ]);

            User::factory()->create([
                'name' => 'agebat',
                'dni' => '00000003',
                'password' => Hash::make('agebat'),
                'email' => 'agebat@ugel03.gob.pe',
                'email_verified_at'=>'2023-05-03 16:08:07',
                'role'=>'0',
            ]);
            User::factory()->create([
                'name' => 'asgese',
                'dni' => '00000004',
                'password' => Hash::make('asgese'),
                'email' => 'asgese@ugel03.gob.pe',
                'email_verified_at'=>'2023-05-03 16:08:07',
                'role'=>'0',
            ]);
            User::factory()->create([
                'name' => 'arh',
                'dni' => '00000005',
                'password' => Hash::make('arh'),
                'email' => 'arh@ugel03.gob.pe',
                'email_verified_at'=>'2023-05-03 16:08:07',
                'role'=>'0',
            ]);
            User::factory()->create([
                'name' => 'aj',
                'dni' => '00000006',
                'password' => Hash::make('aj'),
                'email' => 'aj@ugel03.gob.pe',
                'email_verified_at'=>'2023-05-03 16:08:07',
                'role'=>'0',
            ]);
            User::factory()->create([
                'name' => 'adm',
                'dni' => '00000007',
                'password' => Hash::make('adm'),
                'email' => 'adm@ugel03.gob.pe',
                'email_verified_at'=>'2023-05-03 16:08:07',
                'role'=>'0',
            ]);
            User::factory()->create([
                'name' => 'app',
                'dni' => '00000008',
                'password' => Hash::make('app'),
                'email' => 'app@ugel03.gob.pe',
                'email_verified_at'=>'2023-05-03 16:08:07',
                'role'=>'0',
            ]);
             User::factory()->create([
                'name' => 'nestor',
                'dni' => '41844509',
                'password' => Hash::make('Xp345678'),
                'email' => 'nestorricardo20@gmail.com',
                'email_verified_at'=>'2023-05-03 16:08:07',
                'role'=>'1',
            ]);


             $Periodo=new Periodo();    
             $Periodo->id ='1000';
             $Periodo->multianual = '2021-2023';
             $Periodo->ejercicio = '';
             $Periodo->obs = '';

             $Periodo->save(); 
             $Periodo=new Periodo();    
             $Periodo->id ='1001';
             $Periodo->multianual = '';
             $Periodo->ejercicio = '2021';
             $Periodo->obs = 'consistencia';
             $Periodo->save(); 
             $Periodo=new Periodo();    
             $Periodo->id ='1002';
             $Periodo->multianual = '';
             $Periodo->ejercicio = '2022';
             $Periodo->obs = 'consistencia';
             $Periodo->save(); 
             $Periodo=new Periodo();    
             $Periodo->id ='1003';
             $Periodo->multianual = '';
             $Periodo->ejercicio = '2023';
             $Periodo->obs = 'ejecución';
             $Periodo->save();

             $Periodo=new Periodo();    
             $Periodo->id ='1010';
             $Periodo->multianual = '2022-2024';
             $Periodo->ejercicio = '';
             $Periodo->obs = '';
             $Periodo->save(); 
             $Periodo=new Periodo();    
             $Periodo->id ='1011';
             $Periodo->multianual = '';
             $Periodo->ejercicio = '2022';
             $Periodo->obs = 'consistencia';
             $Periodo->save(); 
             $Periodo=new Periodo();    
             $Periodo->id ='1012';
             $Periodo->multianual = '';
             $Periodo->ejercicio = '2023';
             $Periodo->obs = 'ejecución';
             $Periodo->save();
             $Periodo=new Periodo();    
             $Periodo->id ='1013'; 
             $Periodo->multianual = '';
             $Periodo->ejercicio = '2024';
             $Periodo->obs = 'formulación';
             $Periodo->save();  

             $Periodo=new Periodo();    
             $Periodo->id ='1020';  
             $Periodo->multianual = '2023-2025';
             $Periodo->ejercicio = '';
             $Periodo->obs = '';
             $Periodo->save(); 
             $Periodo=new Periodo();    
             $Periodo->id ='1021';   
             $Periodo->multianual = '';
             $Periodo->ejercicio = '2023';
             $Periodo->obs = 'ejecución';
             $Periodo->save(); 
             $Periodo=new Periodo();    
             $Periodo->id ='1022';    
             $Periodo->multianual = '';
             $Periodo->ejercicio = '2024';
             $Periodo->obs = 'formulación';
             $Periodo->save();
             $Periodo=new Periodo();    
             $Periodo->id ='1023';     
             $Periodo->multianual = '';
             $Periodo->ejercicio = '2025';
             $Periodo->obs = 'formulación';
             $Periodo->save();  

             $Periodo=new Periodo();    
             $Periodo->id ='1030';         
             $Periodo->multianual = '2024-2026';
             $Periodo->ejercicio = '';
             $Periodo->obs = '';
             $Periodo->save(); 
             $Periodo=new Periodo();    
             $Periodo->id ='1031';        
             $Periodo->multianual = '';
             $Periodo->ejercicio = '2024';
             $Periodo->obs = 'formulación';
             $Periodo->save(); 
             $Periodo=new Periodo();    
             $Periodo->id ='1032';       
             $Periodo->multianual = '';
             $Periodo->ejercicio = '2025';
             $Periodo->obs = 'formulación';
             $Periodo->save();
             $Periodo=new Periodo();    
             $Periodo->id ='1033';      
             $Periodo->multianual = '';
             $Periodo->ejercicio = '2026';
             $Periodo->obs = 'formulación';
             $Periodo->save();  

             $Estado=new Estado();              
             $Estado->descripcion = 'formulación';             
             $Estado->save();  
             $Estado=new Estado();              
             $Estado->descripcion = 'ejecución';             
             $Estado->save();  
             $Estado=new Estado();              
             $Estado->descripcion = 'consistencia';             
             $Estado->save();  
    }
}
