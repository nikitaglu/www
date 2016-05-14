<?php
$dir = 'images/';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $dir . 
	$_FILES['userfile']['name'])) {
    print "Great!";
} else {
    print "There are some errors!";
}
$dir = "images/";
    $files = scandir($dir);
    
    foreach($files as $key=>$val)
    {
    
        if($val != "." && $val != "..")
        {
            $pieces = explode(".", $val);
 
            if(strtolower ($pieces[1])== "jpg" || strtolower ($pieces[1])== "jpeg")
            {
    
                list($width, $height) = getimagesize("images/".$val);
                if($width>$height)
                {
                    $image = 'width = "600"';
                }
                else
                {
                    $image = 'height = "600"';
                }
        
            echo
            '<br/>
			<div style="float:left;width:610px;height:620px; border:1px solid red;" align="center">
                <img '.$image.' src="images/'.$val.'" />
                <br/>
                <b style="font:10px Verdana;">'.$val.'</b>
            </div>';
            }
        }
    }
	unlink("Z:/home/Project/www/1.txt");
	$f = fopen("Z:/home/Project/www/1.txt", "w");
	fwrite($f, "Z:/home/Project/www/images/"); 
    fwrite($f, $val);
	fclose($f);
?>