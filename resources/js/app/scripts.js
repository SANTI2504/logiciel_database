(function(window, undefined) {
  'use strict';

  /*
  NOTE:
  ------
  PLACE HERE YOUR OWN JAVASCRIPT CODE IF NEEDED
  WE WILL RELEASE FUTURE UPDATES SO IN ORDER TO NOT OVERWRITE YOUR JAVASCRIPT CODE PLEASE CONSIDER WRITING YOUR SCRIPT HERE.  */

    //sweet alert: eliminar un elemento
    $('.form-eliminar').on('click',function(e){
        e.preventDefault();

        Swal.fire({
            title: "¿Estas seguro?",
            text: "recuerda que no podras revertir esta accion!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonColor: "#2F8BE6",
            cancelButtonColor: "#F55252",
            confirmButtonText: "Eliminar!",
            confirmButtonClass: "btn btn-primary",
            cancelButtonText: "Cancelar",
            cancelButtonClass: "btn btn-danger ml-1",
            buttonsStyling: !1,

        }).then((result) => {
            if(result.value) {
                this.form.submit();
            }
        })
    });

    //sweet alert: actualizar un elemento
    $('.form-editar').on('click',function(e){
        e.preventDefault();

        Swal.fire({
            title: "¿Estas seguro?",
            text: "los datos seran actualizados!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonColor: "#2F8BE6",
            cancelButtonColor: "#F55252",
            confirmButtonText: "Actualizar!",
            confirmButtonClass: "btn btn-primary",
            cancelButtonText: "Cancelar",
            cancelButtonClass: "btn btn-danger ml-1",
            buttonsStyling: !1,

        }).then((result) => {
            if(result.value) {
                this.form.submit();
            }
        })
    });

    //sweet alert: crear un elemento
    $('.form-crear').on('click',function(e){
        e.preventDefault();

        Swal.fire({
            title: "¿Estas seguro?",
            text: "se crearan nuevos datos!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonColor: "#2F8BE6",
            cancelButtonColor: "#F55252",
            confirmButtonText: "Crear!",
            confirmButtonClass: "btn btn-primary",
            cancelButtonText: "Cancelar",
            cancelButtonClass: "btn btn-danger ml-1",
            buttonsStyling: !1,

        }).then((result) => {
            if(result.value) {
                this.form.submit();
            }
        })
    });



})(window);
