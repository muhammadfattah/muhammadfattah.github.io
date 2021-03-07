<?php 
$base_url = 'http://localhost/portopolio';

function base_url($url = ''){
    global $base_url;
  return trim($base_url,'/').'/'.trim($url,'/');
}
?>