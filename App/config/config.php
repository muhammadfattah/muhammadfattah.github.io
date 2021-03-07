<?php 
$base_url = 'https://muhammadfattah.github.io/';

function base_url($url = ''){
    global $base_url;
  return trim($base_url,'/').'/'.trim($url,'/');
}
?>
