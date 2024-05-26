<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebVersal</title>
    <link rel="stylesheet" href="/app/View/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>

<body class="background">

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="/app/View/asset/webversal.png" alt="logo webversal" class="logo">
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="apalah navbar-nav ms-auto mb-2 mb-lg-3">
              <li class="info1 nav-item mx-3">
                <a class="property1 nav-link active" aria-current="page" href="/public"
                style=
                "width: 95px;
                height: 38px;
                justify-content: center;
                align-items: center;
                display: flex;
                font-family: sans-serif;
                font-size: 18px;
                cursor: pointer;">
                Home</a>
              </li>

              <li class="info2 nav-item mx-3">
                <a class="property2 nav-link active" href="/public/guide"
                style=
                "font-family: sans-serif;
                font-size: 18px;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 95px;
                height: 38px;
                cursor: pointer;">
                Guides</a>
              </li>

              <li class="info3 nav-item mx-3">
                <a class="property3 nav-link active" href="/public/about"
                style=
                "font-family: sans-serif;
                font-size: 18px;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 95px;
                height: 38px;
                cursor: pointer;"
                >About us
              </a>
              </li>

              <li class="info5 nav-item mx-3">
                <a class="property5 active"

                   <?php

                   if(isset($_SESSION['user_id'])){

                       if ($_SESSION['admin'] == 1) {

                           ?> href="/public/adminPanel" <?php

                       }

                       ?> href="/public/userInfo" <?php

                   } elseif(!isset($_SESSION['user_id'])){

                       ?> href="/public/login" <?php

                   }

                   ?>


                >
                  <ion-icon name="person-circle-outline"
                  style=
                  "
                  font-size: 50px;
                  position: relative;
                  bottom: 10px;
                  color: white;
                  "
                  >
                </ion-icon>
                </a>
                
            </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container-fluid">
        <div class="konten container">
           <div class="row">
            <div class="isi col-12">

              <div class="text">
                <div class="text1">
                  Find The Best
                </div>
  
                <div class="text2">
                  Website Creation
                </div>
  
                <div class="text3">
                  Platform
                </div>

                
                <div class="text4">
                  Create your marketplace in the form of
                  a website
                </div>

                <button class="tombol">
                  <a

                      <?php

                      if(isset($_SESSION['user_id'])){

                          ?> href="/public/order/create" <?php

                      } elseif(!isset($_SESSION['user_id'])){

                          ?> href="/public/login" <?php

                      }

                      ?>

                          style="color: white; text-decoration: none;">Order Now</a>
                </button>
              </div>

              <div class="image">
                <img src="/app/View/asset/74a81a8fcb9c0cf5598b9ebfd009c56e-removebg-preview.png" alt="logo-isi"
                style="width: 300px;
                position: relative;
                right: 80px;
                top: 40px;">
              </div>
             
            </div>
          </div>
        </div>
         
        </div>
      </div>


   

<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>