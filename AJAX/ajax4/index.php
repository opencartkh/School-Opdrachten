<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="stylesheet" href="style.css" />
    <title>Opdracht 4</title>
    <script>
    function showCountry(str, typeSearch, id) {
    //type=list type=detail
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        if(typeSearch == "list") {
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "getcountry.php?q=" + str + "&type=list", true);
            xmlhttp.send();
        } else if(typeSearch == "answer") {
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "getcountry.php?q=" + id + "&type=answer", true);
            xmlhttp.send();
        }
    }
}

function showTable(table) {
    window.alert(table);
    var table = document.getElementById(table);
    table.style.display = null;
}
    </script>
  </head>
  <body>
    <h1>AJAX Opdracht 4</h1>
    <form>
         <input name="users" type="text" onkeyup="showCountry(this.value, 'list', 0)">
     </form>
     <br>
     <div id="txtHint">Hier komt de informatie te staan</div>


  </body>
</html>
