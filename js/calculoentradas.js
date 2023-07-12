var nombre, apellido,email;
var resultado;
function calcular(){
    var cantidad = document.getElementById('cantidad').value;
    var categoria = document.getElementById('categoria').value;
    var costo=200;
    if(categoria=="estudiante"){
      resultado=cantidad*(costo-(costo*0.80));
    }else if(categoria=="trainee"){
      resultado=cantidad*(costo-(costo*0.50));
    }else if(categoria=="junior"){
      resultado=cantidad*(costo-(costo*0.15));
    }
    document.getElementById('total').innerHTML = resultado;
    }

function imprimir_Resumen() {
    nombre= document.getElementById('nombre').value;
    apellido= document.getElementById('apellido').value;
    email= document.getElementById('email').value;
      alert('Entradas confirmadas a nombre de ' + nombre +' '+ apellido + ' por un valor de $ '+ resultado+'\n Seran enviadas al mail: ' +email)
    }