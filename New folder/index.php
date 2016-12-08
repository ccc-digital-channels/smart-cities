<html>
<head>
  <link rel="apple-touch-icon" href="/lab_icon.png">
  <link rel="apple-touch-startup-image" href="/lab_icon_startup.png">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="transparent">
  <script type="application/javascript" src="/fastclick.js"></script>
  <style>
/* Single Page App Navigation */
  nav li {
    display: inline-block;
  }
  main > * {
    display: none;
  }
  main > *:last-child {
    display: block;
  }
  main > *:target {
    display: block;
  }
  main > *:target ~ * {
    display: none;
  }
/* Mobile First */
@media (max-width: 1000px) {
  .square {
    float:left;
    position: relative;
    width: 295px;
    height: 295px;
    margin: 4px;
    border-radius: 20px;
  }
  .rect {
    float:left;
    position: relative;
    width: 939px;
    height: 297px;
    margin:1.25%;
    border-radius: 20px;
  }
  .rect2 {
    float:left;
    position: relative;
    width: 615px;
    height: 297;
    margin:1.25%;
    border-radius: 20px;
  }
}
/* Notebook/Desktop */
@media (min-width: 1000px) {
  .square {
    float:left;
    position: relative;
    width: 100px;
    height: 100px;
    margin: 4px;
    border-radius: 10px;
  }
  .rect {
    float:left;
    position: relative;
    width: 939px;
    height: 297px;
    margin:1.25%;
    border-radius: 10px;
  }
  .rect2 {
    float:left;
    position: relative;
    width: 615px;
    height: 297;
    margin:1.25%;
    border-radius: 10px;
  }
}


/* Mobile Colours */
.img_1-1{
  /*background: -webkit-linear-gradient(bottom, red, rgb(255, 100, 50));
  opacity: 0.8;
  border-radius: 20px;*/
  border: solid 1px gray;
}
.img_1-2{
  /*background: -webkit-linear-gradient(bottom, rgb(0, 160, 210), rgb(0, 175, 225));
  opacity: 0.8;
  border-radius: 20px;*/
  border: solid 1px gray;
}
.img_1-3{
  /*background: -webkit-linear-gradient(bottom, rgb(150, 100, 170), rgb(175, 125, 190));
  opacity: 0.8;
  border-radius: 20px;*/
  border: solid 1px gray;
}
.img_2-1{
  /*background: -webkit-linear-gradient(bottom, rgb(255, 155, 0), rgb(285, 185, 30));
  opacity: 0.8;
  border-radius: 20px;*/
  border: solid 1px gray;
}
.img_2-2{
  /*background: -webkit-linear-gradient(bottom, rgb(255, 225, 50), rgb(270, 240, 65));
  opacity: 0.8;
  border-radius: 20px;*/
  border: solid 1px gray;
}
.img_2-3{
  /*background: -webkit-linear-gradient(bottom, rgb(80, 195, 45), rgb(95, 210, 60));
  opacity: 0.8;
  border-radius: 20px;*/
  border: solid 1px gray;
}
</style>





  </head>
  <body>
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
        <h1>View 2</h1>

  <div class="rect img_1-2">
  </div>
  <div class="square img_1-2">
  </div>
  <div class="square img_1-2">
  </div>
  <div class="square img_1-2">
  </div>
  <div class="rect2 img_1-2">
  </div>
  <div class="square img_1-2">
  </div>

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
      <div id="view_1">
        <h1>View 1</h1>
          <div class="rect img_1-1">
          </div>
          <div class="square img_1-1">
          </div>
          <div class="square img_1-1">
          </div>
          <div class="square img_1-1">
          </div>
          <div class="rect2 img_1-1">
          </div>
          <div class="square img_1-1">
          </div>
      </div>
    </main>
    <script>
      if ('addEventListener' in document) {
        document.addEventListener('DOMContentLoaded', function() {
          FastClick.attach(document.body);
        }, false);
      }
    </script>
  </body>
</html>
