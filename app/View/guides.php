<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebVersal</title>
    <link rel="stylesheet" href="/app/View/style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>

<body class="background">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
                <a class="property1 active" aria-current="page" href="/public"
                style=
                "
                text-decoration: none;
                color: white;
                width: 95px;
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
                <a class="property2 active" href="/public/guide"
                style=
                "
                text-decoration: none;
                color: white;
                font-family: sans-serif;
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
                <a class="property3 active" href="/public/about"
                style=
                "
                text-decoration: none;
                color: white;
                font-family: sans-serif;
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

      <div class="content">
        <img class="foto" src="/app/View/asset/Group 35.png" alt="" width="auto">
      </div>