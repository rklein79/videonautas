<?php
extract($_POST);
require('gallery.php');
$gal = new gallery();
echo '"'.$gal->getVideos($id)["video_busca"].'"';
?>