function presionar(){
    if(!medio.paused && !medio.ended){
        medio.pause();
        document.querySelector(".fa-play").style.display = "block";
        document.querySelector(".fa-pause").style.display = "none";

        window.clearInterval(bucle);


    }else{
        medio.play();
        document.querySelector(".fa-play").style.display = "none";
        document.querySelector(".fa-pause").style.display = "block";
        bucle =setInterval(estado, 1000);
    }
    
}

function estado() {
    if(!medio.ended){
        var total = parseInt(medio.currentTime * maximo / medio.duration);
        progreso.style.width = total + "px";
        

    }else{
        progreso.style.width = "0px";
       
        bucle = setInterval(bucle);
    }
}

function iniciar(){
    maximo= 600;
    medio = document.getElementById('medio');
    reproducir = document.getElementById('reproducir');
    barra = document.getElementById('barra');
    progreso = document.getElementById('progreso');
    retroceder = document.getElementById('retroceder');
    adelantar = document.getElementById('adelantar');
    expandir = document.getElementById('expandir');


    reproducir.addEventListener('click', presionar, false);
    barra.addEventListener('click', mover, false);
    retroceder.addEventListener('click', rewind, false);
    adelantar.addEventListener('click', forward, false);
    expandir.addEventListener('click', fullscreen, false);

}

// EN VIDEO SE COLOCA MEDIO PORQUE NO CAMBIE ESA ETIQUETA
function rewind(e){

    medio.currentTime =medio.currentTime - ((medio.duration/100)*5);
}

function forward(e){

    medio.currentTime =medio.currentTime + ((medio.duration/100)*5);
}

function fullscreen(e){
    e.preventDefault();
    medio.requestFullscreen();
}


function mover(e){
    if(!medio.paused && !medio.ended){
        var ratonX = e.pageX - barra.offsetLeft;
        var nuevoTiempo = ratonX * medio.duration / maximo;
        medio.currentTime = nuevoTiempo;
        progreso.style.width = ratonX + 'px'; 
    }
}

window.addEventListener('load', iniciar, false);