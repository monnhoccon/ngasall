<!--
 C : ibnusyawall
 T : 407 Authentic Exploit
   B E L A J A R _ php _ D A S A R
 Y : TCP PORT SCAN
-->

<html>
<head>
<title> Information GitHub  </title>
<link rel="stylesheet" href='../style/semantic.min.css' type="text/css">
</head>

<body>

  <?php
    echo '<h3 style="text-align: center;"> TCP PORT SCAN </h3>'
  ?>

<div class="ui grid">
  <div class="four wide column">
    <div class="ui vertical fluid tabular menu">

      <a href="/" class="item">
        InfoGithub
      </a>

      <a href="tcpscan.php" class="active item"> TCP Port Scan </a>

      <a id="modal" class="item">
        About
      </a>
      <a class="item">
        Contact
      </a>


<div id="modal" class="ui basic modal">
  <div class="ui icon header">
    <i class="archive icon"></i>
    Archive Old Messages
  </div>
  <div class="content">
    <p>Your inbox is getting full, would you like us to enable automatic archiving of old messages?</p>
  </div>
  <div class="actions">
    <div class="ui red basic cancel inverted button">
      <i class="remove icon"></i>
      No
    </div>
    <div class="ui green ok inverted button">
      <i class="checkmark icon"></i>
      Yes
    </div>
  </div>
</div>



    </div>
  </div>

  <div class="twelve wide stretched column">
    <div class="ui segment">

      <div class="ui form">
      <div class="field">

      <form method="post" action="#">
        <input name="pcs" type="text" placeholder="Hostname / Ip " required></input>
      </form>

      </div></div>

<?php include "../src/tcp.php" ?>


    </div>
  </div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-h>
<script type="text/javascript" src="../style/semantic.min.js"></script>

<script type="text/javascript">

$('#modal.ui.basic.modal')
  .modal('show')
;
//$('.ui.dropdown').dropdown('show');

</script>

</body>
</html>
