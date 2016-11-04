document.write("<"+"script type='text/javascript' src='../../Scripts/js/alerta.js'><"+"/script>")
function validacion(){
    if($("#codigo").val() === ""){
        $("#codigo").focus();
        alerts("El codigo es obligatorio para el registro del proyecto","Campo Vacio");
    }
    else if($("#titulo").val() === ""){
        $("#titulo").focus();
        alerts("El titulo es obligatorio para el registro del proyecto", "Campo Vacio");
    }
    else if($("#descripcion").val() === ""){
        $("#descripcion").focus();
        alerts("La descripcion es obligatoria para el registro del proyecto", "Campo Vacio");
    }
    else if($("#alcance").val() === ""){
        $("#alcance").focus();
        alerts("El alcance es obligatorio para el registro del proyecto", "Campo Vacio");
    }
    else if($("#fecha_inicio").val() === ""){
        $("#fecha_inicio").focus();
        alerts("La fecha de inicio es obligatoria para el registro del proyecto", "Campo Vacio");
    }
    else if($("#fecha_final").val() === ""){
        $("#fecha_final").focus();
        alerts("La fecha de finalizacion es obligatoria para el registro del proyecto", "Campo Vacio");
    }
    else if($("#presupuesto").val() === ""){
        $("#presupuesto").focus();
        alerts("El presupuesto es obligatorio para el registro del proyecto", "Campo Vacio");
    }
    else if($("#tarea").val() === ""){
        $("#tarea").focus();
        alerts("La tarea es obligatoria para el registro del proyecto", "Campo Vacio");
    }
    else{
        document.getElementById("crearProyecto").submit();
    }
}