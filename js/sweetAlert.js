/*
Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: 'No hemos encontrado este usuario!',
    footer: '<a href="formularios/gUsuarios/agregarUsuario2.php">Quieres registrarte?</a>'
  })
*/
function bienvenidoVecino(){
    Swal.fire({
        title:"Bienvenido Vecino!",
        text: "Aqui podras gestionar todo lo que necesitas",
        //html: '<b class="red-text">Hola</b>'        //Aqui puede ir codigo HTML personalizado
        icon: 'success',
        //confirmButtonText: 'Seleccionar',            //Texto del boton para cerrar esta alerta
        //footer: '<span class="red-text">Villa don Mateo 1 y 2</span>',
        width: '30%',            //Si el width esta activo no activa el atributo grow
        padding: '1rem',
        background: '#F5F5F5',
        //grow: 'fullscreen'        //row -> toma el tamaño de una fila - column -> toma el tamaño de una columna // fullscreen -> ocupa toda la pantalla
        backdrop: true,      //true o false -> activa un sombreado en el fondo de la pagina
        timer: 5000,         //Tiempo en que la ventana esta activa y luego se cierra sola
        timerProgressBar: true,     //Muestra en la alerta una barra progresiva del tiempo antes de cerrarse
        //toast: true             //Transforma en una mini alerta
        //position: 'top'         //ubicacion por defecto de la alerta (top, bottom, bottom-end, etc)
    })
}

