$name=document.getElementById("name").value;
$telefono=document.getElementById("telefono").value;
$fechanac=document.getElementById("fechanac").value;
$email=document.getElementById("email").value;
$img=document.getElementById("img").value;
$password=document.getElementById("password").value;
$password-confirm=document.getElementById("password-confirm").value;

function validacion(){
    if ($name==null || $name.length==0 || /^\s+$/.test($name)) {
        alert('[ERORR] el campo nombre es obligatorio');
        return false;
    }else if (!(/^\d{10}$/.test($telefono))) {
        alert('[ERORR] este campo requiere 10 numeros consecutivos');
        return false;
    }else if (!isNaN($fechanac)) {
        alert('[ERORR]');
        return false;
    }else if (!(/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)/.test($email))) {
        alert('[ERORR] el mail no cumple el formato valido');
        return false;
    }else if ($img==null ) {
        alert('[ERORR] la foto de perfil es obligatoria');
        return false;
    }else if ($password==null || $password.length==0 || /^\s+$/.test($password) || $password!=$password-confirm) {
        alert('[ERORR] la contraseña no es valida o no coincide la confirmacion');
        return false;
    }
    return true;
}