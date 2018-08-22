<?php
include "common/config.php";
$common['preload'] = '
<link rel="stylesheet" href="'.$config['root'].'/common/stylesheets/splash.css">
';
include "common/header.php";
?>
<div class="welcome">
<div class="title">Welcome to ViCue7</div>
<hr />
<div class="event"><b>현재 진행 중인 행사 : </b><span id="eventname"><?=$config['name']?></span></div>
</div>
<?php
$common['postload'] = '
<script src="'.$config['root'].'/common/scripts/load.js"></script>
<script>
console.log("start");
loadEventToId("eventname");
</script>
';
include "common/footer.php";
?>