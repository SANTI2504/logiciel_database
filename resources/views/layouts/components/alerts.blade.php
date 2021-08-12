
@if((session('eliminar') == 'ok'))
    <script>
        Swal.fire({
            type: "success",
            title: "Eliminado!",
            text: "los datos han sido eliminados  exitosamente.",
            confirmButtonClass: "btn btn-success"
        })
    </script>
@endif

@if((session('actualizar') == 'ok'))
    <script>
        Swal.fire({
            type: "success",
            title: "Actualizado!",
            text: "los datos han sido actualizados exitosamente.",
            confirmButtonClass: "btn btn-success"
        })
    </script>
@endif

@if((session('crear') == 'ok'))
    <script>
        Swal.fire({
            type: "success",
            title: "Creado!",
            text: "los datos han sido creados exitosamente.",
            confirmButtonClass: "btn btn-success"
        })
    </script>
@endif
