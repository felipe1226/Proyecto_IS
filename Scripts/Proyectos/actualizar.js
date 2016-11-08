document.write("<"+"script type='text/javascript' src='../../Scripts/js/alerta.js'><"+"/script>")

function validar_actualizacion(){
        if($("#titulo").val() === ""){
            $("#titulo").focus();
            alerts("El titulo es obligatorio para el registro del proyecto", "Campo Vacio");
        }
        else{
            if($("#descripcion").val() === ""){
                $("#descripcion").focus();
                alerts("La descripcion es obligatorio para el registro del proyecto", "Campo Vacio");
            }
            else{
                if($("#alcance").val() === ""){
                    $("#alcance").focus();
                    alerts("El alcance es obligatorio para el registro del proyecto", "Campo Vacio");
                }
                else{
                    if($("#presupuesto").val() === ""){
                        $("#presupuesto").focus();
                        alerts("El presupuesto es obligatorio para el registro del proyecto", "Campo Vacio");
                    }
                    else{
                        validarSiNumero($("#presupuesto").val());
                        if(cent==0){
                            if($("#responsable").val() === ""){
                                $("#responsable").focus();
                                alerts("El trabajador responsable es obligatorio para el registro del proyecto", "Campo Vacio");
                            }
                            else{
                                document.getElementById("registrarProyecto").submit();
                                                
                            }      
                        }
                        else{
                            $("#presupuesto").focus();
                        }
                        
                    }
                }
            }
        }
    
}

function eliminar()
{
	document.getElementById("eliminarProyecto").submit();
}


function validarSiNumero(numero){
    cent=0;
    if (!/^([0-9])*$/.test(numero)){
        alerts("Se requiere un dato numerico" , "Dato invalido");

        cent=1;
    } 
}