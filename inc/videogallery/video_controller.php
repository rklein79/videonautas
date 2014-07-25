<?php
extract($_POST);
require('gallery.php');
$gal = new gallery();
$vd = $gal->getVideos($id);
$nextvd = $gal->getVideos(++$id);

echo
'<!DOCTYPE html>'.
'<html>'.
'<body>'.
//'<iframe width="629" height="383" src="//www.youtube.com/embed/'.$vd["video_id"].'?enablejsapi=1&autoplay=1&autohide=1?rel=0" frameborder="0" allowfullscreen></iframe>'.
'<div id="player"></div>'.
"<script>".
    "var tag = document.createElement('script');" .
        "tag.src = 'https://www.youtube.com/iframe_api';" .
        "var firstScriptTag = document.getElementsByTagName('script')[0];" .
        "firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);" .
        "var player;".
        "function onYouTubeIframeAPIReady() {".
        "    player = new YT.Player('player', {".
        "        height: '390',".
        "        width: '640',".
        "        videoId: '".$vd["video_id"]."',".
        "        playerVars: { 'autoplay': 1, 'controls': 1, 'autoride': 1 },".
        "        events: {".
        "            'onReady': onPlayerReady,".
        "            'onStateChange': onPlayerStateChange".
        "        }".
        "    });".
        "}".
        "function onPlayerStateChange(event) {".
        "    if (event.data == YT.PlayerState.ENDED) {".
        "        trazVideo(".$id.");".
        "    }".
        "}".
        "function onPlayerReady(event) {".
        "    event.target.playVideo();".
        "}".
        "function stopVideo() {".
        "    player.stopVideo();".
        "} onYouTubeIframeAPIReady();".
    "</script>".
"</body>".
"</html>";

?>