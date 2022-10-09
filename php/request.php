<form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="POST"> 
  <input type="text" name="username" />
  <input type="submit" value="send" />

</form>

<?php

if ($_SERVER['REQUEST_METHOD']=='POST'){

   //echo "good you are using post ";
   //echo $_SERVER['REQUEST_METHOD'];
   echo $_REQUEST['username'];

}else {
    echo "error";
}
//echo $_POST['username'];