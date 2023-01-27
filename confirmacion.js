function confirmacion(e){
	if(confirm("¿Esta seguro que desea eliminar este registro?")){  //confirm: es igual que un alert. solo que muestra una confirmacion, aceptar o cancelar.
		return true; //si la aacion se confirma, retorna en verdadero y ejecuta la accion
	}else{
		e.preventDefault(); //si la accion se cancela, se detiene el evento por defecto y vuelve al archivo inicial
	}
}

let linkDelete = document.querySelectorAll(".eliminar_registro");		//Selecciona a todos los elementos y los gurada.			linkDelete guarda los enlaces

for(var i = 0; i < linkDelete.length; i++){
		linkDelete[i].addEventListener('click', confirmacion); //cada vez que haga clic a cualquier elemento de esa clase, se ejecute la funcion confirmacion.
	}
	