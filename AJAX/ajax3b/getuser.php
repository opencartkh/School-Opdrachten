<?php

$con = mysqli_connect('localhost','kampm_nl_school','96LbAXakhX3v','kampmeijer_nl_school');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($con, $_POST["query"]);
 $query = "
   SELECT * FROM w3c_ajax_demo
   WHERE FirstName LIKE '%".$search."%'
   OR LastName LIKE '%".$search."%'
  ";
 }
 else
 {
  $query = "
   SELECT * FROM w3c_ajax_demo (display=none)
  ";
 }
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
   <table>
    <tr>
     <th>FirstName</th>
     <th>LastName</th>
     <th>Age</th>
     <th>Hometown</th>
     <th>Job</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["FirstName"].'</td>
    <td>'.$row["LastName"].'</td>
    <td>'.$row["Age"].'</td>
    <td>'.$row["Hometown"].'</td>
    <td>'.$row["Job"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Er is niks gevonden';
}

?>
