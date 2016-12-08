<html>
<head>
  <link rel="apple-touch-icon" href="/lab_icon.png">
  <link rel="apple-touch-startup-image" href="/lab_icon_startup.png">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="transparent">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
    <?php include 'css/style.css' ?>
</style>
    <?php include 'includes/scripts.php' ?>

  </head>
  <body>
    <header>
        <?php include 'includes/header.php' ?>
    </header>
    <nav role="navigation">
      <ul>
        <li><a href="#view_1"><div class="square img_1-1"></div></a></li>
        <li><a href="#view_2"><div class="square img_1-2"></div></a></li>
        <li><a href="#view_3"><div class="square img_1-3"></div></a></li>
        <li><a href="#view_4"><div class="square img_2-1"></div></a></li>
        <li><a href="#view_5"><div class="square img_2-2"></div></a></li>
        <li><a href="#view_6"><div class="square img_2-3"></div></a></li>
      </ul>
    </nav>
    <main role="main">

    
      <div id="view_2">
        <?php include 'html/view2.php' ?>
      </div>
      <div id="view_3">
        <h1>View 3</h1>
      </div>
      <div id="view_4">
        <h1>View 4</h1>
      </div>
      <div id="view_5">
        <h1>View 5</h1>
      </div>
      <div id="view_6">
        <h1>View 6</h1>
      </div>
      <!-- first view goes last, so its enabled by default -->
        <?php include 'html/view1.php' ?>
    </main>
    <footer>
        <?php include 'includes/footer.php' ?>        
    </footer>

  </body>
</html>
