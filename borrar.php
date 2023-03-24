<?php
setcookie("pelicula1",false,time()-1);
setcookie("pelicula2",false,time()-1);
setcookie("pelicula3",false,time()-1);
setcookie("error",false,time()-1);
header("location:index.php");
?>