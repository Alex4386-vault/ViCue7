<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php if (isset($og['title'])) { echo $og['title']." - "; } ?><?=$config['name']?></title>
<?php if (isset($common['preload'])) { echo $common['preload']; } ?>
<style>
  @font-face {
  font-family: 'Spoqa';
  font-weight: 100;
  src: local('Spoqa Han Sans Thin'),
  url(<?=$config['font_root']?>/SpoqaHanSans-Thin.woff2) format('woff2'),
  url(<?=$config['font_root']?>/SpoqaHanSans-Thin.woff) format('woff'),
  url(<?=$config['font_root']?>/SpoqaHanSans-Thin.ttf) format('truetype');
}
@font-face {
  font-family: 'Spoqa';
  font-weight: 400;
  src: local('Spoqa Han Sans Regular'),
  url(<?=$config['font_root']?>/SpoqaHanSans-Regular.woff2) format('woff2'),
  url(<?=$config['font_root']?>/SpoqaHanSans-Regular.woff) format('woff'),
  url(<?=$config['font_root']?>/SpoqaHanSans-Regular.ttf) format('truetype');
}
@font-face {
  font-family: 'emoji';
  font-weight: 300;
  src: url(<?=$config['font_root']?>/fontello.woff2) format('woff2'),
  url(<?=$config['font_root']?>/fontello.woff) format('woff'),
  url(<?=$config['font_root']?>/fontello.ttf) format('truetype');
}
</style>
<script>
const baseurl = "<?=$config['root']?>";
</script>
<link rel="stylesheet" href="<?=$config['root']?>/common/stylesheets/common.css?rev=1">
</head>
<body>
<article>
