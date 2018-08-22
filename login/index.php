<?php
include "../common/config.php";
include "../common/loadme.php";
$common['preload'] = '
<link rel="stylesheet" href="'.$config['root'].'/common/stylesheets/splash.css">
';
include "../common/header.php";
?>
<div class="welcome">
<?php
if(isset($_POST['username']) && isset($_POST['password'])) {
if (passwordchk($_POST['username'], $_POST['password'])) {
    $_SESSION['username'] = $_POST['username'];
    header("Location: ../");
} else {
    ?>
    <div class="title">로그인</div>
    <div class="subtitle">아이디나 비밀번호가 틀렸습니다. 다시 시도하세요.</div>
    <hr />
    <form method="POST">
        <button class="btn transition" type="submit">로그인 &#xE001;</button>
    </form>
    <?php
}
} else {
?>
<div class="title">로그인</div>
<div class="subtitle">ViCue7, Your personal cue system for best event experience</div>
<hr />
<form method="POST">
    <input type="text" name="username" placeholder="아이디"/> <br>
    <input type="password" name="password" placeholder="패스워드"/> <br>
    <button class="btn transition" type="submit">로그인 &#xE001;</button>
</form>
<?php
}
?>
</div>
<br>
<br>
</div>
</article>
<footer>
Copyright &copy; YeoidoTech and Alex4386 - This program is distributed under MIT License, <a href="//github.com/Alex4386/ViCue7">GitHub</a>
</footer>
</head>
</html>