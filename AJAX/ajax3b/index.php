<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Opdracht 3B</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <style>
  body {
    background-color: #40c656;
  }
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
 </head>
 <body>
   <br />
   <h2>AJAX Opdracht 3B</h2><br />
     <input type="text" name="search_text" id="search_text" placeholder="Vul wat in"/>
   <br /><br /><br /><br />
   <div id="result"></div>
 </body>
</html>


<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"getuser.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
