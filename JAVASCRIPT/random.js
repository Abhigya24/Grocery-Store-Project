function check(){



    var Username=document.forms['form']['Username'].value; 
    var Password=document.forms['form']['Password'].value;
    

    if(Username=="" || Password=="")
    {
        alert("Empty Field Found."); //is appeared when any of the required filed is found empty
    }
    else
    {
        alert("Logging In."); //is appeared when all the information are filled
    }
}


var x = document.getElementById("login");
var y = document.getElementById("Register");
var z = document.getElementById("boot");

    function Register()
    {
        x.style.left ="-400px";
        y.style.left ="50px";
        z.style.left ="110px";
    }
    function login()
    {
        x.style.left ="50px";
        y.style.left ="450px";
        z.style.left ="0px";
    }