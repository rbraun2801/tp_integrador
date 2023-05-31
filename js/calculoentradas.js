function calcular(){
    var cantidad = document.getElementById("cantidad").value;
    var categoria = document.getElementById("categoria").value;
    var costo=200;
    var resultado;
    if(categoria=="estudiante"){
      resultado=cantidad*(costo-(costo*0.80));
    }else if(categoria=="trainee"){
      resultado=cantidad*(costo-(costo*0.50));
    }else if(categoria=="junior"){
      resultado=cantidad*(costo-(costo*0.15));
    }
    document.getElementById('total').innerHTML = resultado;
    }