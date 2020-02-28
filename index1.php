<!DOCTYPE html>

<html>
  <head>
    <title>Deep Learning Demo</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style type="text/css">
      a:link {
        color: white;
      }
      a:visited {
        color: white;
      }
      a:active {
        color: white;
      }
      a:hover {
        color: white;
      }
    </style>
    <style>
      * {
        box-sizing: border-box;
      }
      body {
        font-family: cursive, "Malgun Gothic", serif;
      }
      header {
        background-color: #ccc;
        padding: 30px;
        text-align: center;
        font-size: 35px;
        color: black;
      }
      nav {
        float: left;
        width: 20%;
        height: 600px;
        background: #666;
        font-size: 15px;
        padding: 20px;
      }
      nav ul {
        list-style-type: none;
        padding: 10px;
      }
      .cities {
        background-color: black;
        color: white;
        margin: 5px;
        padding: 5px;
      }
      article {
        float: left;
        padding: 20px;
        width: 80%;
        background-color: #f1f1f1;
        height: 600px;
      }
      section:after {
        content: "";
        display: table;
        clear: both;
      }
      footer {
        background-color: rgb(231, 230, 230);
        padding: 0;
        text-align: left;
        color: black;
      }
      @media (max-width: 600px) {
        nav,
        article {
          width: 100%;
          height: auto;
        }
      }
    </style>
    
  </head>
  <body>
    <header>
      <h2>Deep Learning Playground</h2>
    </header>
    <section>
      <nav>
        <div class="cities">
          <h3><a href="#">Jongja Poomjong</a></h3>
          <p style="font-size:11px" ;>Write the detail someday</p>
        </div>
        <div class="cities">
          <h3><a href="#">BuyngHaeChoong</a></h3>
          <p style="font-size:11px" ;>Write the detail someday</p>
        </div>
        <div class="cities">
          <h3>Dangdo</h3>
          <p style="font-size:11px" ;>Write the detail someday</p>
        </div>
        <div class="cities">
          <h3>Maneul</h3>
          <p style="font-size:11px" ;>Write the detail someday</p>
        </div>
        <div class="cities">
          <h3>Oi</h3>
          <p style="font-size:11px" ;>Write the detail someday</p>
        </div>
      </nav>
      <article>
        <h1>README</h1>
        <p>Use your picture to test our deep learning models!</p>

        <div class="img_wrap">
          <img id="img" />
        </div>

        <?php
        $filename = "./pictures/".$_FILES["input_img"]["name"];
        if($_FILES["input_img"]["size"]!=0){
          if(move_uploaded_file($_FILES["input_img"]["tmp_name"],$filename) == true){
            exec('python3 ResNet50RetinaNet.py');
            echo "<h2>Output Image:</h2>";
            echo "<img src = './result/final.jpg'>";
          }
        }
        ?>
      </article>
    </section>
    <footer>
      <p><img src="./logo.PNG" style="width:67%; height:auto;" /></p>
    </footer>
  </body>
</html>
