<?php

include "curl.php";

       if ( isset($_POST["pcs"]) ) {
         $url = req('https://api.hackertarget.com/nmap/?q='. $_POST["pcs"]);
         $parse = json_decode($url, true);
          print_r($url);
       }

/*
if ( isset($_POST["pcs"]) ) {
         $url = req('https://api.hackertarget.com/nmap/?q='. $_POST["pcs"]);
         $parse = json_decode($url, TRUE);
         echo '<div class="ui top attached label"> <div class="ui form"> <div class="two fields"> <d>
          echo '<input placeholder=';
          print_r($parse);
         echo 'readonly="" type="text"> </div> </div> </div> </div>';
       }

*/
?>
