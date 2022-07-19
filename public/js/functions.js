function copyToClipBoard() {

    var content = document.getElementById('address');
    
    content.select();
    document.execCommand('copy');

    alert("Copied!"); //como hacer que sea un mensaje mas "flash" que un alert?
}
function selectnumber(val){
	document.getElementById('selectednumber').value=val;
}
function interested(){
	document.getElementById('interested-form').style.display="block";
}
//valida correo
	function confirmar(){
	confirm('Está seguro?');
	/*Como hacer que si se presiona NO, no se llame a la funcion de php que va a pintar la celda de roko
	y cuando se le dé que sí entonces pinte la celda de rojo, y luego deshabilitar este boton de retirar*/
	alert('hello world')
	document.getElementById('retirar').disabled='true';
	document.getElementById('ganancia-tr').style.BackgroundColor='red'; // como se hace esto?
}

function capturarid(){
	$id=document.getElementById('id_usuario').value;
	alert('El id del usuario es '+$id);
}

