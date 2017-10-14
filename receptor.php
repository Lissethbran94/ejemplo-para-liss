
<html>
<head>
	
	
    <title>Receptor de Imagenes </title>
</head>


<body>
     <?php
	      $ruta="img/";
		  $nombre_archivo=$_FILES["file"]["name"];
		  move_uploaded_file($_FILES["file"]["tmp_name"], $ruta.$nombre_archivo);
	 ?>



</body>







</html>