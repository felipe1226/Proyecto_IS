document.write("<"+"script type='text/javascript' src='../../Scripts/js/alerta.js'><"+"/script>")
function validar_actualizacion(){
        if($("#descripcion").val() === ""){
            $("#descripcion").focus();
            alerts("La descripcion es obligatoria para el registro del objetivo","Campo Vacio");
        }
        else{
            if($("#valor").val() === ""){
               $("#valor").focus();
                alerts("El valor es obligatorio para el registro del objetivo", "Campo Vacio");
            }
            else{
                validarSiNumero($("#valor").val());
                if(cent==0){
                    document.getElementById("actualizarObjetivo").submit();         
                }
                else{
                    $("#valor").focus();
                        
                }
            }
        } 
    
}

function eliminar()
{
    document.getElementById("eliminarObjetivo").submit();
}

function validarSiNumero(numero){
    cent=0;
    if (!/^([0-9])*$/.test(numero)){
        alerts("Se requiere un dato numerico" , "Dato invalido");

        cent=1;
    } 
}

