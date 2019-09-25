<!DOCTYPE html>
<html>
<head>
    <?php include("head.php"); ?>
</head>
<body>
  <!-- burger menu mobile-->
  <nav role="navigation">
      <?php include("nav-mobile.php"); ?>
      </nav>
      <!-- fin burger menu mobile-->  
  <div class="sidebar">
      <?php include("sidebar.php"); ?>
  </div>
      <!-- fin de la sidebar-->

<!--Début du code pour le parallax-->
  <!--Page 1-->
<div class="container">
    <div id="title" class="slide header">
        <?php include("header.php") ?>
    </div>
  <!--Page 2-->
  <div id="slide2" class="slide">
      <?php include("eleve.php"); ?>
  </div>
  <!--Page 3-->
  <div id="slide3" class="slide">
      <?php include("frame.php"); ?>
  </div>
  <!-- Dernière page - Footer-->
  <div id="slide4" class="slide header">
    <?php include("form.php"); ?>
  </div>
  <footer>
    <?php include("footer.php"); ?>
  </footer>
</div>
</body>
</html>
