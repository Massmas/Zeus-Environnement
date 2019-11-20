
function verifIdentiteNom()
{
    var nom = document.getElementById("nom").value;
    var reg = "^[a-zA-Z-éèâêà' -]{1,50}$";
    if(nom.match(reg))
    {
    document.getElementById("nom").style.color = "black";
    document.getElementById("nom").style.borderWidth = "3px";
    document.getElementById("nom").style.borderColor = "green";

    nom=nom.toUpperCase();
    document.getElementById("nom").value=nom;
    }else{
    document.getElementById("nom").style.color = "red";
    document.getElementById("nom").style.borderWidth = "3px";
    document.getElementById("nom").style.borderColor = "red";
    }
}

function verifIdentitePrenom()
{
    var prenom = document.getElementById("prenom").value;
    var reg = "^[a-zA-Z-éèâêà' -]{1,50}$";
    if(prenom.match(reg))
    {
    document.getElementById("prenom").style.color = "black";
    document.getElementById("prenom").style.borderWidth = "3px";
    document.getElementById("prenom").style.borderColor = "green";

    prenom=prenom.charAt(0).toUpperCase() + prenom.substring(1).toLowerCase();
    document.getElementById("prenom").value=prenom;
    
    }else{
    document.getElementById("prenom").style.color = "red";
    document.getElementById("prenom").style.borderWidth = "3px";
    document.getElementById("prenom").style.borderColor = "red";
    }
    
    
}

function verifMail()
{
    var mail = document.getElementById("mail").value;
    var reg = "^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$";
    if(mail.match(reg))
    {
    document.getElementById("mail").style.color = "black";
    document.getElementById("mail").style.borderWidth = "3px";
    document.getElementById("mail").style.borderColor = "green";
    }else{
    document.getElementById("mail").style.color = "red";
    document.getElementById("mail").style.borderWidth = "3px";
    document.getElementById("mail").style.borderColor = "red";
    }
    
    
}


function verifAge()
{
    var dn = document.getElementById("dn").value;
    var reg = /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/;
    if(dn.match(reg))
    {
    document.getElementById("dn").style.color = "black";
    document.getElementById("dn").style.borderWidth = "3px";
    document.getElementById("dn").style.borderColor = "green";
    }else{
    document.getElementById("dn").style.color = "red";
    document.getElementById("dn").style.borderWidth = "3px";
    document.getElementById("dn").style.borderColor = "red";
    }
}


function verifURL()
{
    var url = document.getElementById("url").value;
    var reg =/^(?:http(s)?:\/\/)?[\w.-]+(?:\.[\w\.-]+)+[\w\-\._~:/?#[\]@!\$&'\(\)\*\+,;=.]+$/g;
    if(url.match(reg))
    {
    document.getElementById("url").style.color = "black";
    document.getElementById("url").style.borderWidth = "3px";
    document.getElementById("url").style.borderColor = "green";
    }else{
    document.getElementById("url").style.color = "red";
    document.getElementById("url").style.borderWidth = "3px";
    document.getElementById("url").style.borderColor = "red";
    }
}

function verifNote()
{
    var note = document.getElementById("note").value;
    var reg = /^(?:[0-9]|0[0-9]|10)$/;
    if(note.match(reg))
    {
        document.getElementById("note").style.color = "black";
        document.getElementById("note").style.borderWidth = "3px";
        document.getElementById("note").style.borderColor = "green";
    }else{
    document.getElementById("note").style.color = "red";
    document.getElementById("note").style.borderWidth = "3px";
    document.getElementById("note").style.borderColor = "red";
    }

}

function verifDate()
{
    var date = document.getElementById("date").value;
    var reg = /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/;
    if(date.match(reg))
    {
    document.getElementById("date").style.color = "black";
    document.getElementById("date").style.borderWidth = "3px";
    document.getElementById("date").style.borderColor = "green";
    }else{
    document.getElementById("date").style.color = "red";
    document.getElementById("date").style.borderWidth = "3px";
    document.getElementById("date").style.borderColor = "red";
    }
}

function protection()
{
    var comm = document.getElementById("commentaire").value;
    var reg = /<\s*script\s*[a-zA-Z]*>/;
    if(comm.match(reg) || comm == "")
    {
    document.getElementById("commentaire").style.color = "red";
    document.getElementById("commentaire").style.borderWidth = "3px";
    document.getElementById("commentaire").style.borderColor = "red";
    }else{
    document.getElementById("commentaire").style.color = "black";
    document.getElementById("commentaire").style.borderWidth = "3px";
    document.getElementById("commentaire").style.borderColor = "green";
    }
}


function setCookie(cname,cvalue,exdays) 
{
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires=" + d.toGMTString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(a) 
{
    var name = a + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) 
    {
      var c = ca[i];
      while (c.charAt(0) == ' ') 
      {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) 
      {
        document.getElementById(""+a+"").value = c.substring(name.length, c.length);
        return c.substring(name.length, c.length);
      }
    }
    return "";
}

function deleteAllCookies() 
{
    document.cookie.split(";").forEach(function(c) 
    {
        document.cookie = c.replace(/^ +/, "").replace(/=.*/, "=;expires=" + new Date().toUTCString() + ";path=/"); 
    });
    document.location.href="index.html";
}

function resultatFinal()
{
    /*var nom = document.getElementById('nom').value;
    setCookie("nom",nom,"15");
    var prenom = document.getElementById('prenom').value;
    setCookie("prenom",prenom,"15");
    var mail = document.getElementById('mail').value;
    setCookie("mail",mail,"15");
    var dn = document.getElementById('dn').value;
    setCookie("dn",dn,"15");
    var civilite = document.getElementById('civilite').value;
    setCookie("civilite",civilite,"15");*/

    var radio1 = document.querySelector('input[name="radio1"]:checked').value;
    setCookie("radio1",radio1,"15");
    var radio2 = document.querySelector('input[name="radio2"]:checked').value;
    setCookie("radio2",radio2,"15");
    var radio3 = document.querySelector('input[name="radio3"]:checked').value;
    setCookie("radio3",radio3,"15");
    var radio4 = document.querySelector('input[name="radio4"]:checked').value;
    setCookie("radio4",radio4,"15");

    var select1 = document.getElementById('select1').value;
    setCookie("select1",select1,"15");
    var select2 = document.getElementById('select2').value;
    setCookie("select2",select2,"15");

    /*var url = document.getElementById('url').value;
    setCookie("url",url,"15");
    var note = document.getElementById('note').value;
    setCookie("note",note,"15");
    var date = document.getElementById('date').value;
    setCookie("date",date,"15");

    var commentaire = document.getElementById('commentaire').value;
    setCookie("commentaire",commentaire,"15");*/

    var satisfaction = parseInt(radio1) + parseInt(radio2) + parseInt(radio3) + parseInt(radio4) + parseInt(select1) + parseInt(select2);

    if(satisfaction <=10) {
        return "peu";
    }
    else if(satisfaction <=14) {
        return "moyen";
    }
    else if(satisfaction >14) {
        return "tres";
    }
    else {
        document.write("Erreur");
    }
}


function fill()
{
    getCookie("nom");
    getCookie("prenom");
    getCookie("mail");
    getCookie("dn");
    getCookie("civilite");
    getCookie("radio1");
    getCookie("radio2");
    getCookie("radio3");
    getCookie("radio4");
    getCookie("select1");
    getCookie("select2");
    getCookie("url");
    getCookie("note");
    getCookie("date");
    getCookie("commentaire");
}