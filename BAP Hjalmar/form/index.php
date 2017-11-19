<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Random Website</title>
  </head>
  <body>
  <?php
  require("main/connectvars.php");

  if(isset($_GET['message'])) {
      $message = $_GET['message'];
      switch ($message) {
          case "nomatch":
              echo "<div class=\"alert\">username or password is incorrect, please try again</div>";
              break;
          case "empty":
              echo "<div class=\"alert\">No empty input please</div>";
              break;
      }
  }
  ?>
    <h1>Random Website</h1>
    <form method="post" action="search.php">
        <label>Search:</label>
        <input type="text" name="search" id="search">
        <input type="submit" name="submit" id="submit" value="search">
        <input type="hidden" name="_token" value="<?php echo $_SESSION['_token']; ?>">
    </form> <br><br>
    <form method="post" action="login.php">
      <label>Username:</label>
      <input type="text" name="username" id="username" /> <br />
      <label>Password:</label>
      <input type="password" name="password" id="password" /> <br>
      <input type="submit" name="submit" id="submit" value="submit" />
      <input type="hidden" name="_token" value="<?php echo $_SESSION['_token']; ?>">
    </form>
  </body>
</html>
