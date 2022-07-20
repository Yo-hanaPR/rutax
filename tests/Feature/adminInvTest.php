<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class adminInvTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

   /* public function test_inversionDinero(){
     
        $response = $this->get('user/1',["id"=>'1']);
         $response->assertStatus(200);
    }*/
/*
    public function test_elimina_reserva(){
      
      $response = $this->post('eliminareservas/1',["id"=>'1']);
         $response->assertRedirect('home');
    }*/
    public function test_summary(){
      $response = $this->get('home');
         $response->assertStatus(200);
    }
/***********************************************/
/*
/*
/*
/*
/*      REGISTROS
/*
/*
/*
/*
/***********************************************/
/**/
/*public function testregistroServicio(){

 $response = $this->post('/Servicios',["servicio"=>'Karaoke']);
          $response->assertRedirect('home');
}*/
/*
public function test_registro_destino(){

        $nombre='Valle de la pascua';
        $direccion='Falcon';
        $url='una url'; 
        
        $input=["nombre"=>$nombre,"direccion"=>$direccion,"url"=>$url,'detalles'=>'COSAS QUE ME DIGA LA GENTE DEL DESTINO'];
         $response = $this->post('/Destinos',$input);
          $response->assertRedirect('home');
    }
*//*

public function test_registro_viaje(){

        $id_destino='3';
        $precio_fijo='19'; 
        $fecha_salida='2020-05-02';
        $hora_salida='02:30 p. m.';
        $unidad=1;
        
        $input=["destino"=>$id_destino,"precio_fijo"=>$precio_fijo,"fecha_salida"=>$fecha_salida,"hora_salida"=>$hora_salida,"id_unidad"=>$unidad];
         $response = $this->post('/Viajes',$input);
          $response->assertRedirect('home');
    }
*/
    /*
public function test_registro_pasajero(){

        $nombre='Victor';
        $apellido='Silgado';
        $cedula='23622892';

        $direccion='Caracas';
        $telefono='242342';
        $correo='yohapadri';
        $edad='25';
        $id_metodo_pago=1;
        
        $input=["nombre"=>$nombre,"apellido"=>$apellido,"cedula"=>$cedula,"direccion"=>$direccion,"telefono"=>$telefono,"correo"=>$correo,"edad"=>$edad,"id_metodo_pago"=>$id_metodo_pago];
         $response = $this->post('/Pasajeros',$input);
          $response->assertRedirect('home');
    }
*/

/*
public function test_reserva_viaje(){
        $id_viaje='1';
        $id_pasajero='2'; 
        $promo=0;
        $pago=36;
        
        
        $input=["viaje"=>$id_viaje,"pasajero"=>$id_pasajero,"promocion"=>$promo,"pago"=>$pago];
         $response = $this->post('/Reserva',$input);
          $response->assertRedirect('home');
}
*/

/*


public function test_registro_unidad(){
        $tipo='FORD';
        $placa='cjsds'; 
        $color='rojo';
        $cant_puestos=36;
        
        
        $input=["tipo"=>$tipo,"placa"=>$placa,"color"=>$color,"cant_puestos"=>$cant_puestos];
         $response = $this->post('/Unidades',$input);
          $response->assertRedirect('home');
}*/

/***********************************************/
/*
/*
/*
/*
/*      ACTUALIZAR
/*
/*
/*
/*
/***********************************************/



/*public function test_actualiza_pasajero(){
$this->withoutExceptionHandling();

    $nombre='Yoha';
    $apellido='Padri';
    $cedula='23622891';

    $direccion='La pascua';
    $telefono='242342110';
    $correo='yohapadrirocketnmail';
    $edad='23';
    $id_metodo_pago=1;


  $response = $this->put('/Pasajeros/1',["nombre"=>$nombre,"apellido"=>$apellido,"cedula"=>$cedula,"direccion"=>$direccion,"telefono"=>$telefono,"correo"=>$correo,"edad"=>$edad,"id_metodo_pago"=>$id_metodo_pago])->Assertstatus(200);
}*/


/*public function test_actualiza_destino(){
$this->withoutExceptionHandling();

        $nombre='Club mamo La guaira';
        $direccion='Es un club militar bla bla bla';
        $url='url para ver su info'; 
        
        $input=["nombre"=>$nombre,"direccion"=>$direccion,"url"=>$url];

    $response = $this->put('/Destinos/1',$input)->Assertstatus(200);
}
*/


      /* public function test_actualiza_viaje(){
        $this->withoutExceptionHandling();
        $id_destino='1';
        $precio='15'; 
        
        $input=["id_destino"=>$id_destino,"precio_fijo"=>$precio];
         $response = $this->put('/Viajes/2',$input);
          $response->assertRedirect('home');
        }*/

       /* public function test_actualiza_reserva(){
            $id_viaje='2';
            $id_pasajero='1'; 
            $promo=TRUE;
            $pago=20;
            
            $input=["id_viaje"=>$id_viaje,"id_pasajero"=>$id_pasajero,"promo"=>$promo,"pago"=>$pago];
             $response = $this->put('/Reserva/1',$input);
              $response->assertRedirect('home');
        }*/


/***********************************************/
/*
/*
/*
/*
/*      DELETE
/*
/*
/*
/*
/***********************************************/

/*
EL METODO FUNCIONA PERO HAY UN PROBLEMA CON EL ID DE LA TABLA, CUANDO BORRO LA TABLA, EL PRIMER REGISTRO QUE SE CREA TIENE ID 3 O 4.. Y ASÍ..

SI HAGO LA PRUEBA ELIMINANDO EL ID 1 Y EL ID 1 NO EXISTE, ÉSTA PRUEBA VA A FALLAR PERO SERÁ POR ESO... PORQUE SE ESTA BUSCANDO UNA RESERVA QUE NO EXISTE, Y NO EXISTE PORQUE EL ID NO SE ESTA REINICIANDO...
LA SOLUCION A ÉSTO ES HACER UN BORRADO CON TRUNCATE.. PERO ESO LO HARÉ CUANDO YA TERMINE TODO EL CRUD. 
LO IMPORTANTE ES QUE SEPAS QUE SI ESTÁ ELIMINANDO, PERO SIEMPRE Y CUANDO SE LE PASEN VALORES CORRECTOS Y QUE EXISTAN EN LA BASE DE DATOS.*/
/*
public function test_elimina_reserva(){
  $this->withoutExceptionHandling();
   $response =$this->delete('/Reserva/2');
              $response->assertRedirect('home');
}
*/

/*

el mismo caso pasa con esta funcion.. eL NUEVO REGIGSTRO EN LA TABLA SE CREA CON ID 2, O 3, O 4...
cREO QUE ESO PASA PORQUE DEFINÍ EL CAMPO COMO INCREMENTS...

pERO EL PUNTO ES QUE AL FINAL DE TODAS ESTAS PRUEBAS, HAGO UN BORRADO CON TRUNCATE Y YA..

DE TODAS FORMAS SERÍA BUENO ARREGLARLO

*/
/*public function test_elimina_pasajero(){
  $this->withoutExceptionHandling();
  $response=$this->delete('/Pasajeros/1');
              $response->assertRedirect('home');
}*/

    /*public function test_elimina_viaje(){
      $this->withoutExceptionHandling();
       $response=$this->delete('/Viajes/2');
       $response->assertRedirect('home');

     }*/

     /*public function test_elimina_destino(){
      
      $this->withoutExceptionHandling();
       $response=$this->delete('/Destinos/1');
       $response->assertRedirect('home');

     }*/


/***********************************************/
/*
/*
/*
/*
/*      READ
/*
/*
/*
/*
/***********************************************/
/*
public function test_muestra_lista_destinos()
    {$this->withoutExceptionHandling();
        $response = $this->get('Destinos/2');
//dd(event::where('id',1)->first());
        $response->assertStatus(200);
    }*/
public function test_show_lista_unidades(){
  $this->withoutExceptionHandling();
   $response = $this->get('Unidades');
    $response->assertStatus(200);
}
    }
?>