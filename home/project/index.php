<!--
 C : ibnusyawall
 T : 407 Authentic Exploit
   B E L A J A R _ php _ D A S A R
-->

<html>
<head>
<title> Information GitHub  </title>
<?php include "src/css.php" ?>
</head>

<body>

  <?php
    echo '<h3 style="text-align: center;"> Information GitHub </h3>'
  ?>

<div class="ui grid">
  <div class="four wide column">
    <div class="ui vertical fluid tabular menu">

      <a href="" class="active item">
        InfoGithub
      </a>

      <a href="tools/tcpscan.php" class="item"> TCP PortScan </a>

      <a class="item">
        About
      </a>
      <a class="item">
        Contact
      </a>

    </div>
  </div>

  <div class="twelve wide stretched column">
    <div class="ui segment">

      <div class="ui form">
      <div class="field">

      <form method="post" action="#">
        <input name="dnslok" type="text" placeholder="Masukan Username" required></input>
      </form>

      </div></div>

<?php include "src/post.php" ?>

     <div class="ui link card">
       <div class="content">
         <div class="header"><?php echo $parse["name"]; ?></div>
           <div class="meta">
            <span class="category"><?php echo $parse["type"]; ?></span>
           </div>
           <div class="description">
            <p></p>
           </div>
          </div>
        <div class="extra content">
         <div class="right floated author">
          <img class="ui avatar image" src="<?php echo $parse['avatar_url']; ?>"/> <?php echo $parse["login"]; ?>
         </div>
       </div>
   </div>

    </div>
  </div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-h>
<script type="text/javascript" src="style/semantic.min.js"></script>

<script type="text/javascript">

//$('.ui.dropdown').dropdown('show');

</script>

</body>
</html>
