// var boton = document.getElementsById("boton"),
//     caja = document.getElementsById("boton"),
//     contador = 0;
    
//     function cambio() {
//         if (contador == 0) {
//             caja.classlist.add("azul")
//             contador=1;
//         } else {
//             caja.classlist.remove("azul")
//             contador=0;
//         }
//     }
//     boton.addEventListener("click",cambio,true)

document.querySelector(".boton1").addEventListener("click",botonSeleccionado1);
document.querySelector(".boton2").addEventListener("click",botonSeleccionado2);
document.querySelector(".boton3").addEventListener("click",botonSeleccionado3);


//Declarando variables

//Boton 1

boton1 = document.querySelector(".boton1");

//Boton 2

boton2 = document.querySelector(".boton2");

//Boton 3

boton3 = document.querySelector(".boton3");


function botonSeleccionado1() {
    boton1.classList.toggle('botonSeleccionado');
    boton2.classList.remove('botonSeleccionado');
    boton3.classList.remove('botonSeleccionado');
}

function botonSeleccionado2() {
    boton2.classList.toggle('botonSeleccionado');
    boton1.classList.remove('botonSeleccionado');
    boton3.classList.remove('botonSeleccionado');
}

function botonSeleccionado3() {
    boton3.classList.toggle('botonSeleccionado');
    boton1.classList.remove('botonSeleccionado');
    boton2.classList.remove('botonSeleccionado');
}

function ageValidate() {
    var age = parseInt(document.getElementById("age").value);
    if (age<1 || age > 99) {
        console.log("La edad ingresada es incorrecta.")
    }
}

// Seleccionar la red

const select = document.querySelector("#select");
const options = document.querySelector("#options");
const contenidoSelect = document.querySelector("#select .contenido-select");
const hiddenInput = document.querySelector("#selectionRed");

document.querySelectorAll("#options > .option").forEach((option)=>{
    option.addEventListener("click",(e) => {
        e.preventDefault();
        contenidoSelect.innerHTML = e.currentTarget.innerHTML;
        select.classList.toggle("active")
        options.classList.toggle("active")
        hiddenInput.value = e.currentTarget.querySelector(".titulo-box").innerText;
    })
})

select.addEventListener("click", ()=>{
    select.classList.toggle("active");
    options.classList.toggle("active");
})


