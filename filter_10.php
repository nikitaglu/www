<?php 
$WshShell = new COM("WScript.Shell"); 
$oExec = $WshShell->Run("C:\Users\Нарек\AppData\Roaming\uTorrent\uTorrent.exe", 0, false); 
print "Your photo has been edited!";
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
	?> 