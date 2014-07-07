<?php
extract($_GET);
?>
<!DOCTYPE html>
<html>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="js/busca.js"></script>
<head>
    <style>
        body{padding:0; margin:0;}
    </style>
</head>
<body>
<div id="player"></div>
    <script>
        var tag = document.createElement('script');
        tag.src = 'https://www.youtube.com/iframe_api';
        var firstScriptTag = document.getElementsByTagName('script')[0];firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        var player;
        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                height: '383',
                width: '629',
                videoId: '<?php echo $video; ?>',
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }
            });
        }
        function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.ENDED) {
                trazVideo('<?php echo $nextvideo; ?>','<?php echo $busca; ?>');
            }
        }
        function onPlayerReady(event) {
            event.target.playVideo();
        }
        function stopVideo() {
            player.stopVideo();
        }
    </script>
</body>
</html>
