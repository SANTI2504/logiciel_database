//calendario
document.addEventListener('DOMContentLoaded', function () {


    //recolectar datos de un formulario
    let formulario = document.querySelector("#formularioEventos")

    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',

        locale: 'es',

        // cabecera
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,listWeek'
        },
        //se visualizara de esta manera 01:00 AM en la columna de horas
        slotLabelFormat:{
            hour: '2-digit',
            minute: '2-digit',
            hour12: true
        },
        //y este código se visualizara de la misma manera pero en el titulo del evento creado en fullcalendar
        eventTimeFormat: {
            hour: '2-digit',
            minute: '2-digit',
            hour12: true
        },


        //hacer uso de la ruta para mostrar detalles del evento
        //events: baseURL+"/evento/mostrar",
        eventSources:{
            url: baseURL+"/citas/mostrar",
            method: "POST",
            extraParams:{
                _token: formulario._token.value,
            },

        },

        //cuando seleccione fecha
        dateClick: function (info) {
            //resetea lo que este en el formulario
            formulario.reset();
            //asigna las fechas segun la fecha seleccionada
            formulario.date.value=info.dateStr;
            //formulario.end.value=info.dateStr;

            $("#evento").modal("show")
            $("#btnGuardar").show();
            $("#btnEliminar").hide();
            $("#btnModificar").hide();

        },


        //cuando seleccione evento creado
        eventClick:function (info){
            //todos los datos del evento seleccionado
            var evento = info.event;
            //imprime los datos en la consola
            console.log(evento);

            //envio de datos al controlador con la funcion edit
            //then: si realiza el envio correctamente
            //catch: si genera error imprimir el error de respuesta en la consola
            axios.post(baseURL+"/citas/editar/"+info.event.id).
            then(
                (respuesta)=>{
                    //muestra solo el id
                    formulario.id.value = respuesta.data.id;
                    formulario.title.value = respuesta.data.title;
                    formulario.date.value = respuesta.data.date;
                    formulario.time.value = respuesta.data.time;
                    formulario.type_appointments_id.value = respuesta.data.type_appointments_id;
                    formulario.patients_id.value = respuesta.data.patients_id;
                    formulario.specialists_id.value = respuesta.data.specialists_id;

                    //formulario.end.value = respuesta.data.end;
                    //formulario.end_time.value = respuesta.data.end_time;
                    //mostrar el modal
                    $("#evento").modal("show");
                    $("#btnGuardar").hide();
                    $("#btnEliminar").show();
                    $("#btnModificar").show();

                }
            ).
            catch(
                error=>{
                    if(error.response){
                        console.log(error.response.data)
                    }
                }
            )
        }
    });

    //renderiza el calendario
    calendar.render();

    //captura la accion del botom
    document.getElementById("btnGuardar").addEventListener("click", function () {
        Swal.fire({
            title: '¿Estas seguro?',
            text: "Se creara un nuevo evento!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, crear!',
            cancelButtonText: 'Cancelar',
        }).then((result) => {
            if (result.value) {
                enviarDatos("/citas/agregar");
            }
        })

    });

    //captura la accion del botom
    document.getElementById("btnEliminar").addEventListener("click", function (){
        Swal.fire({
            title: '¿Estas seguro?',
            text: "Se borrara el evento que creaste!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, eliminar!',
            cancelButtonText: 'Cancelar',
        }).then((result) => {
            if (result.value) {
                enviarDatos("/citas/borrar/"+formulario.id.value);
            }
        })

    });
    //captura la accion del botom
    document.getElementById("btnModificar").addEventListener("click", function (){
        Swal.fire({
            title: '¿Estas seguro?',
            text: "Se modificara el evento!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, modificar!',
            cancelButtonText: 'Cancelar',
        }).then((result) => {
            if (result.value){
                enviarDatos("/citas/actualizar/"+formulario.id.value);
            }
        })

    });

    //funcion para enviar datos al controlador
    function enviarDatos(url) {

        //recolecta todos los datos enviados por el formulario
        // const datos = new FormData(formulario);
        let datos = recuperarDatosFormulario();
        //creacion de variable el cual va a contener la variable baseURL + url enviada por el boton
        const newURL = baseURL+url;
        //imprimir los datos en la consola
        console.log(datos);

        //imprime el valor del dato "title"
        //console.log(formulario.title.value);


        //envio de datos al controlador
        //then: si realiza el envio correctamente
        //catch: si genera error imprimir el error de respuesta en la consola
        axios.post(newURL,datos).
        then(
            (respuesta)=>{
                //actualizar en tiempo real
                calendar.refetchEvents();
                //cerrar el modal
                $("#evento").modal("hide");

                Swal.fire({
                    type: "success",
                    title: "Hecho!",
                    text: "La accion se realizo exitosamente.",
                    confirmButtonClass: "btn btn-success",
                    timer: 2000
                });
            }
        ).
        catch(
            error=>{
                if(error.response){
                    console.log(error.response.data)
                    Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: 'La accion no se pudo realizar!',
                        footer: 'Intente nuevamente, si el problema persiste contacte al administrador'
                    });
                }
            }
        )
    }

    function recuperarDatosFormulario() {
        let datos = {
            id: formulario.id.value,
            title: formulario.title.value,
            date: formulario.date.value,
            time: formulario.time.value,
            start: formulario.date.value+ ' ' + formulario.time.value,
            end: formulario.date.value+ ' ' + formulario.time.value,
            type_appointments_id: formulario.type_appointments_id.value,
            specialists_id: formulario.specialists_id.value,
            patients_id: formulario.patients_id.value,
        };
        return datos;

    }


    !function(e,t,s){"use strict";function i(e){e.element;return e.id?"<i class='"+s(e.element).data("icon")+"'></i>"+e.text:e.text}s(".select2").select2({dropdownAutoWidth:!0,width:"100%"}),s(".select2-icons").select2({dropdownAutoWidth:!0,width:"100%",minimumResultsForSearch:1/0,templateResult:i,templateSelection:i,escapeMarkup:function(e){return e}}),s(".max-length").select2({dropdownAutoWidth:!0,width:"100%",maximumSelectionLength:2,placeholder:"Select maximum 2 items"});var r=s(".js-example-programmatic").select2({dropdownAutoWidth:!0,width:"100%"}),c=s(".js-example-programmatic-multi").select2({dropdownAutoWidth:!0,width:"100%"});c.select2({dropdownAutoWidth:!0,width:"100%",placeholder:"Programmatic Events"}),s(".js-programmatic-set-val").on("click",function(){r.val("CA").trigger("change")}),s(".js-programmatic-open").on("click",function(){r.select2("open")}),s(".js-programmatic-close").on("click",function(){r.select2("close")}),s(".js-programmatic-init").on("click",function(){r.select2()}),s(".js-programmatic-destroy").on("click",function(){r.select2("destroy")}),s(".js-programmatic-multi-set-val").on("click",function(){c.val(["CA","AL"]).trigger("change")}),s(".js-programmatic-multi-clear").on("click",function(){c.val(null).trigger("change")});function o(e,t){return 0===t.toUpperCase().indexOf(e.toUpperCase())}s(".select2-data-array").select2({dropdownAutoWidth:!0,width:"100%",data:[{id:0,text:"enhancement"},{id:1,text:"bug"},{id:2,text:"duplicate"},{id:3,text:"invalid"},{id:4,text:"wontfix"}]}),s(".select2-data-ajax").select2({dropdownAutoWidth:!0,width:"100%",ajax:{url:"https://api.github.com/search/repositories",dataType:"json",delay:250,data:function(e){return{q:e.term,page:e.page}},processResults:function(e,t){return t.page=t.page||1,{results:e.items,pagination:{more:30*t.page<e.total_count}}},cache:!0},placeholder:"Search for a repository",escapeMarkup:function(e){return e},minimumInputLength:1,templateResult:function(e){if(e.loading)return e.text;var t="<div class='select2-result-repository clearfix'><div class='select2-result-repository__avatar'><img src='"+e.owner.avatar_url+"' /></div><div class='select2-result-repository__meta'><div class='select2-result-repository__title'>"+e.full_name+"</div>";e.description&&(t+="<div class='select2-result-repository__description'>"+e.description+"</div>");return t+="<div class='select2-result-repository__statistics'><div class='select2-result-repository__forks'><i class='icon-code-fork mr-0'></i> "+e.forks_count+" Forks</div><div class='select2-result-repository__stargazers'><i class='icon-star5 mr-0'></i> "+e.stargazers_count+" Stars</div><div class='select2-result-repository__watchers'><i class='icon-eye mr-0'></i> "+e.watchers_count+" Watchers</div></div></div></div>"},templateSelection:function(e){return e.full_name||e.text}}),s.fn.select2.amd.require(["select2/compat/matcher"],function(e){s(".select2-customize-result").select2({dropdownAutoWidth:!0,width:"100%",placeholder:"Search by 'r'",matcher:e(o)})}),s(".select2-theme").select2({dropdownAutoWidth:!0,width:"100%",placeholder:"Classic Theme",theme:"classic"}),s(".select2-size-lg").select2({dropdownAutoWidth:!0,width:"100%",containerCssClass:"select-lg"}),s(".select2-size-sm").select2({dropdownAutoWidth:!0,width:"100%",containerCssClass:"select-sm"})}(window,document,jQuery);



});

