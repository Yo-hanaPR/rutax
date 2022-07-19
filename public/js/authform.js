var form = new Vue({
  el: '#vue',
  data: {
    datosCliente:{
      iduser:'',
      nombreC: '',
      email:'',
      rol: '',
      phone: ''
    }
  },
  methods:{
    savefrm: function(){
      this.idcliente= document.getElementById('id').value;
      console.log("ID CLIENTE: "+idcliente);
    this.$http.post('autorizar',{data: idcliente}).then(function(respuesta){
      console.log("Se envio");
      });
    }
    ,
    write: function(){
      iduser= document.getElementById('select').value;
      this.$http.get('../index.php/user/'+iduser).then(function(respuesta){
      this.datosCliente.nombreC=respuesta.body.name;
      this.datosCliente.email=respuesta.body.email;
      this.datosCliente.rol=respuesta.body.role_id;
      this.datosCliente.telefono=respuesta.body.telefono;
// {id:'1',nombre:'yohanna',email:'yohaas@s.c',id_num:1}
        
/*
  Aqui no puedo hacer for(var i=0;i<datosCliente.LENGTH;i++){
porque datosCliente no es un array, y length es una funcion de los arrays.
datosCliente guarda un objeto..
como puedo obtener la cantidad de propiedades que tiene
un objeto?
no es con count()
no es con length.

bueno, por ahora pondre 4, pero lo tengo que arreglar
*/
// var resp= respuesta.body;}
/*Como recorro un objeto en js?
  Un array lo puedo recorrer asi:
  for(var i=0;i<4;i++){;
    console.log(array[i]);
  }
  pero en JS no puedo hacer algo como
  this.datosCliente[i]
  [1,2,3,4] / [1=>a,2=>b,3=>c,4=>d]
  {1:a,2:b,3:c,4:d}
  [{1,2,3,4},1,2]
*/
      });
    }
  }
})