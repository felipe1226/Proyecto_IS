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
    else if($("#tiempo").val() === ""){
        $("#tiempo").focus();
        alerts("El tiempo es obligatorio para el registro del proyecto", "Campo Vacio");
    }
    else if($("#codigo_tema").val() === ""){
        $("#codigo_tema").focus();
        alerts("El codigo es obligatorio para el registro del proyecto", "Campo Vacio");
    }
    else if($("#descripcion_tema").val() === ""){
        $("#descripcion_tema").focus();
        alerts("La descripcion es obligatoria para el registro del proyecto", "Campo Vacio");
    }
    else if($("#codigo_objetivo").val() === ""){
        $("#codigo_objetivo").focus();
        alerts("El codigo es obligatorio para el registro del proyecto", "Campo Vacio");
    }
    else if($("#descripcion_objetivo").val() === ""){
        $("#descripcion_objeitvo").focus();
        alerts("La descripcion es obligatoria para el registro del proyecto", "Campo Vacio");
    }
    else if($("#codigo_comunidad").val() === ""){
        $("#codigo_comunidad").focus();
        alerts("El codigo es obligatorio para el registro del proyecto", "Campo Vacio");
    }
    else if($("#etnia").val() === ""){
        $("#etnia").focus();
        alerts("La etnia es obligatoria para el registro del proyecto", "Campo Vacio");
    }
    else if($("#nombre_comunidad").val() === ""){
        $("#nombre_comunidad").focus();
        alerts("El nombre es obligatorio para el registro del proyecto", "Campo Vacio");
    }
    else if($("#id_infante").val() === ""){
        $("#id_infante").focus();
        alerts("El ID es obligatorio para el registro del proyecto", "Campo Vacio");
    }
    else if($("#nombre_infante").val() === ""){
        $("#nombre_infante").focus();
        alerts("El nombre es obligatorio para el registro del proyecto", "Campo Vacio");
    }
    else if($("#apellido_infante").val() === ""){
        $("#apellido_infante").focus();
        alerts("El apellido es obligatorio para el registro del proyecto", "Campo Vacio");
    }
    else if($("#nac_infante").val() === ""){
        $("#nac_infante").focus();
        alerts("La fecha de nacimiento es obligatoria para el registro del proyecto", "Campo Vacio");
    }
    else if($("#id_representante").val() === ""){
        $("#id_representante").focus();
        alerts("El ID es obligatorio para el registro del proyecto", "Campo Vacio");
    }
    else if($("#nombre_representante").val() === ""){
        $("#nombre_representante").focus();
        alerts("El nombre es obligatorio para el registro del proyecto", "Campo Vacio");
    }
    else if($("#apellido_representante").val() === ""){
        $("#apellido_representante").focus();
        alerts("El apellido es obligatorio para el registro del proyecto", "Campo Vacio");
    }
    else if($("#nac_representante").val() === ""){
        $("#nac_representante").focus();
        alerts("La fecha de nacimiento es obligatoria para el registro del proyecto", "Campo Vacio");
    }
    else if($("#cel_representante").val() === ""){
        $("#cel_representante").focus();
        alerts("El numero celular es obligatorio para el registro del proyecto", "Campo Vacio");
    }
    else if($("#ciudad_representante").val() === ""){
        $("#ciudad_representante").focus();
        alerts("La ciudad es obligatoria para el registro del proyecto", "Campo Vacio");
    }
    else if($("#dir_representante").val() === ""){
        $("#dir_representante").focus();
        alerts("La direccion es obligatoria para el registro del proyecto", "Campo Vacio");
    }
    else{
        document.getElementById("registrarTrabajador").submit();
    }
}