<?php
  // YeoidoTech ViCue7 Engine Configuration
  // Copyright (c) YeoidoTech, Alex4386

  ini_set("display_errors",1);

  // Set display name
  $config['name'] = "ViCue7 Test";
  
  //Automatic Recognition of root directory where ViCue7 engine is located
  $config['root'] = preg_replace('/\/common$/', '', preg_replace('/'.str_replace("/","\/",$_SERVER['DOCUMENT_ROOT']).'/','',dirname(__FILE__),1));

  //font location
  $config['font_root'] = $config['root']."/common/fonts";
?>