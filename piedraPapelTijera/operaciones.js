//variables de vidas de la maquina y usuario
var vidasDeLaMaquina = 3;
var vidasDelUsuario = 3;
//-----------------------------------SELECCION PERSONA
//selecciona todos los selectores class con ese nombre
let selector = document.querySelectorAll(".select");
//hace un foreach para seleccionar todos los botones
selector.forEach((el) => {
    //un evento con el boton que presiono
    el.addEventListener("click", (e) => {
        //llama a la funcion resultado
        resultados(e.target.value);
        //muestra lo que selecciono el usuario abajo de la vida 
        if (e.target.value == "piedra") {
            document.getElementById("seleccionUsuario").innerHTML = '<img src="imagenes/piedra.png">'

        } else if (e.target.value == "papel") {
            document.getElementById("seleccionUsuario").innerHTML = '<img src="imagenes/papel.png">'

        } else if (e.target.value == "tijera") {
            document.getElementById("seleccionUsuario").innerHTML = '<img src="imagenes/tijera.png">'

        }

    })
})
//----------------------------------------------SELECCION DE LA MAQUINA
function seleccionMaquina() {
    let seleccionDeLaMaquina = "";
    let numero = Math.floor(Math.random() * 3);
    //ya que al seleccionar la maquina lo trae como numero entonces la seleccion de ella queda de la siguiente forma
    //si la maquina retorna 0 es piedra
    //si retorna 1 es papel
    //si retorna 2 es tijera
    if (numero == 0) {
        document.getElementById("seleccionMaquina").innerHTML = '<img src="imagenes/piedra.png">'
        return seleccionDeLaMaquina = "piedra";
    } else if (numero == 1) {
        document.getElementById("seleccionMaquina").innerHTML = '<img src="imagenes/papel.png">'
        return seleccionDeLaMaquina = "papel";


    } else if (numero == 2) {
        document.getElementById("seleccionMaquina").innerHTML = '<img src="imagenes/tijera.png">'
        return seleccionDeLaMaquina = "tijera"
    }
    return seleccionDeLaMaquina;
}

//-------------------------------------VIDAS PERSONA

document.getElementById("vida").innerHTML = '<img src="imagenes/3vida.png" alt=""  width="150px">'
function vidaUsuario(vidaperdida) {
    vidasDelUsuario -= vidaperdida;
    if (vidasDelUsuario == 2) {

        document.getElementById("vida").innerHTML = '<img src="imagenes/2vida.png" alt="" width="100px">'

    } else if (vidasDelUsuario == 1) {

        document.getElementById("vida").innerHTML = '<img src="imagenes/1vida.png" alt="" width="50px"> '
    } else if (vidasDelUsuario == 0) {
        document.getElementById("vida").innerHTML = '<img src="imagenes/0vidas.png" alt="" width="50px"> '
        document.getElementById('seleccionPersona').innerHTML = "";
        document.getElementById("resultados").innerHTML = '<b style="color:red;">GANO LA MAQUINA EL JUEGO DESEAS REINICIAR?</b>'

    }
}
//--------------------------------------------------VIDA MAQUINA
//comienza con 3 de vida
document.getElementById("vidaMaquina").innerHTML = '<img src="imagenes/3vida.png" alt=""  width="150px">'
//entra a la funcion de la vida de la maquina
function vidaMaquina(vidaperdida) {
    //si vidaperdida se llama entonces pierde uno de vida y como vidasDeLaMaquina 
    //esta acomulada entonces va eliminando 1 x 1 hasta quedar vacia
    vidasDeLaMaquina -= vidaperdida;
    //entra a los if para mostrar la imagen correspondiente a la vida que tiene
    if (vidasDeLaMaquina == 2) {
        //le muestra la imagen de la vida correspondiente
        document.getElementById("vidaMaquina").innerHTML = '<img src="imagenes/2vida.png" alt="" width="100px">'
    } else if (vidasDeLaMaquina == 1) {

        document.getElementById("vidaMaquina").innerHTML = '<img src="imagenes/1vida.png" alt="" width="50px"> '
    } else if (vidasDeLaMaquina == 0) {
        document.getElementById("vidaMaquina").innerHTML = '<img src="imagenes/0vidas.png" alt="" width="50px"> '
        document.getElementById('seleccionPersona').innerHTML = "";
        document.getElementById("resultados").innerHTML = '<b style="color:green;">GANASTE EL JUEGO DESEAS REINICIAR?</b>'

    }
}

//------------------------------------------resultados de el vs
//funcion para verificar las selecciones de ellos y dar el resultado correspondiente
function resultados(seleccionUsuario) {
    let seleccionDeLaMaquina = seleccionMaquina();
    console.log(seleccionDeLaMaquina)
    if (seleccionUsuario == seleccionDeLaMaquina) {
        document.getElementById("resultados").innerHTML = 'EMPATE'

    } else if (seleccionUsuario == "piedra" && seleccionDeLaMaquina == "tijera") {
        document.getElementById("resultados").innerHTML = 'GANASTE'
        vidaMaquina(1);
    } else if (seleccionUsuario == "papel" && seleccionDeLaMaquina == "piedra") {
        document.getElementById("resultados").innerHTML = 'GANASTE'
        vidaMaquina(1);
    } else if (seleccionUsuario == "tijera" && seleccionDeLaMaquina == "papel") {
        document.getElementById("resultados").innerHTML = 'GANASTE'
        vidaMaquina(1);
    } else {
        document.getElementById("resultados").innerHTML = 'PERDISTE'
        vidaUsuario(1);
    }


}
//--------------------------------reinicio del juego
let reinicio = document.querySelector('#reinicio');
reinicio.addEventListener('click', ()=>{
    window.location.reload();
    console.log("hola")
})