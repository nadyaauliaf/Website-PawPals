function All(){
    if(email && password()){
        confirm("are you sure want to sign up?");
        alert ("Sign Up Success!");
        return true;
    }
    return false;
}

function email(){
    var email = document.getElementById("email").value;
    if(email == ""){
        alert("Please fill your Email");
        return false;
    }
    var len = email.length - 1;
    var amulet = email.indexOf("@");
    var dot = email.indexOf(".");
    if(amulet == -1){
        alert("Missing '@' for Email format");
        return false;
    }
    else if(email[0] == "@" || email[len] == "@" || email[0] == "." || email[len] == "."){
        alert("Email must not starts or ends with '@' or '.'");
        return false;
    }
    else if(email.indexOf("@", amulet + 1) != -1){
        alert("Email must contain only a single '@'");
        return false;
    }
    else if(amulet + 1 == dot || amulet - 1 == dot){
        alert("'@' and '.' must not be adjacent");
        return false;
    }
    else if(!email.endsWith(".com") && !email.endsWith(".id")){
        alert("Missing Email's domain");
        return false;
    }
    return true;
}

function password(){
    var pass = document.getElementById('password').value;
    if(pass == ""){
        alert("Please fill your password");
        return false;
    }

    else if(pass.length < 8){
        alert("Password's length must not less than 8 characters");
        return false;
    }
    return true;
}