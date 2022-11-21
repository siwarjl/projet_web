function nameValidation ()
{ var nom=document.getElementById("nom").value
var exp = new RegExp("^[a-zA-Z]*$","g")
if (exp.test(nom)==false)
{document.getElementById("erreurnom").innerHTML="incorrect";
document.getElementById('erreurnom').style.color = '#f00';}
else
{document.getElementById("erreurnom").innerHTML="correct";
document.getElementById("erreurnom").style.color = "green";
} if (nom.length<1)document.getElementById("erreurnom").innerHTML="";
}
function prenameValidation ()
{ var nom=document.getElementById("prenom").value
var exp = new RegExp("^[a-zA-Z]*$","g")
if (exp.test(nom)==false)
{document.getElementById("erreurnom1").innerHTML="incorrect";
document.getElementById('erreurnom1').style.color = '#f00';}
else
{document.getElementById("erreurnom1").innerHTML="correct";
document.getElementById("erreurnom1").style.color = "green";
} if (nom.length<1)document.getElementById("erreurnom1").innerHTML="";
}
function Telephone(){
var num=document.getElementById("tel").value
var reg = new RegExp("^[0-9]*$")
var long=num.length
var test = reg.test(num);  //Test phone string against the regular expression
if(!test){
document.getElementById("msg2").innerHTML= "le numero ne doit contenir que des chiffres";
document.getElementById("msg2").style.color = "red";
}
else{document.getElementById("msg2").innerHTML= "";
} 
if (long!==8)
document.getElementById("msg3").innerHTML= "le numero  doit contenir 8 chiffres";
else document.getElementById("msg3").innerHTML= "";

document.getElementById("msg3").style.color = "red";


}
function Age(){
    var num=document.getElementById("age").value
    var reg = new RegExp("^[0-9]*$")
    var long=num.length
    var test = reg.test(num);  //Test phone string against the regular expression
    if(!test){
    document.getElementById("msg").innerHTML= "Attention l'age est un chiffre";
    document.getElementById("msg").style.color = "red";
    }
    else{document.getElementById("msg").innerHTML= "";
    } 
   }
   