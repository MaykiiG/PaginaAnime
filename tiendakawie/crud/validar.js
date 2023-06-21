function login(){
    var user,pass;

    user=document.getElementById("usuario").value;
    pass=document.getElementById("password").value;
    
    if(user=="admin" && pass=="admin"){
        alert("Bienvenido ADMINISTRADOR")
        window.location="datos.php";

    }
    else{
        alert("DATOS INCORRECTOS")
    }
}



function introducir(){
 alert("REGISTRO EXITOSO !!")
    

}