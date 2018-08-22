<?php
include "common/config.php";
$common['preload'] = '
<link rel="stylesheet" href="'.$config['root'].'/common/stylesheets/splash.css">
';
include "common/header.php";
?>
<div class="welcome">
<div class="title">Welcome to ViCue7</div>
<div class="subtitle">Your personal cue system for best event experience</div>
<hr />
<div class="event"><b>현재 진행 중인 행사 : </b><span id="eventname"><?=$config['name']?></span></div>
<br>
<div class="signin-wrapper">
<a href="login/" class="btn transition rightaligned"><b>로그인</b> &#xE001;</a>
</div>
<br>
<br>
</div>
<script src="'.$config['root'].'/common/scripts/load.js"></script>
<script>
loadEventToId("eventname");
</script>
</article>
<footer>
Copyright &copy; YeoidoTech and Alex4386 - This program is distributed under MIT License, <a href="//github.com/Alex4386/ViCue7">GitHub</a>
</footer>
</head>
</html>