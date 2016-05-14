<?php 
if($handle = opendir('images/'))
{
while(false !== ($file = readdir($handle)))
if($file != "." && $file != "..") unlink('images/'.$file);
closedir($handle); 
}
print "Editing finished!";
?>