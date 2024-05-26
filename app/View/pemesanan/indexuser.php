<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Info</title>
  <link rel="stylesheet" href="/app/View/pemesanan/style3.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="bg" style="background-color: rgb(6, 6, 25);">

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

      <h2 class="title" 
      style=
      "color: white; 
      font-family: inter; 
      position: relative; 
      top: 60px;
      margin-left: 150px;">
      USER INFO
      </h2>

      <div class="jarjit container-fluid" 
      style="
      background-image: linear-gradient(to right bottom, #0e2140, #2e3956, #0b1324);
      border: none;
      border-radius: 10px;
      width: 85%;
      position: relative;
      top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- NAMA -->
                    <p class="isi-1" 
                    style=
                    "color: white; 
                    position: relative;
                    left: 40px;
                    font-family: inter;
                    font-weight: 700;
                    margin-top: 50px;
                    margin-bottom: 50px;">
                    Name : <?= $_SESSION['username'] ?>
                    </p>
                    <hr style="color: white; width: 90%; position: relative; left: 40px;">
                    <!-- NAMA = END -->


                    <!-- PHONE NUMBER -->
                    <p class="isi-2" 
                    style=
                    "color: white;
                    position: relative;
                    left: 40px;
                    font-family: inter;
                    font-weight: 700;
                    margin-top: 50px;
                    margin-bottom: 50px;">
                    Phone Number : <?= $_SESSION['phoneNumber'] ?>
                    </p>
                    <hr style="color: white; width: 90%; justify-content: center; position: relative; left: 40px;">
                    <!-- PHONE NUMBER = END -->


                    <!-- LIST MENU -->
                    <div class="tombol" 
                    style=
                    "display: 
                    flex; justify-content: center; 
                    gap: 80px; 
                    margin-bottom: 100px;
                    position: relative;
                    top: 50px;">

                        <div class="tombol-1">
                            <a href="/public/changePass" style="
                            color: white; 
                            text-decoration: none;       
                            background-image: linear-gradient(to right bottom, #1a3865, #2e3956); 
                            border-radius: 12px; 
                            border: none; 
                            font-family: sans-serif; 
                            font-weight: bold; 
                            font-size: 14px; 
                            width: 150px; 
                            display: flex; 
                            justify-content: center; 
                            align-items: center; 
                            justify-self: center; 
                            height: 50px; 
                            box-shadow: 1.5px 1.5px 10px rgba(0, 0, 0, 0.562); 
                            -webkit-transition-duration: 0.3s; 
                            transition-duration: 0.2s; 
                            -webkit-transition-property: box-shadow, transform; 
                            transition-property: box-shadow, transform;">
                            Change Password
                            </a>
                        </div>

                        <div class="tombol-2">
                            <a href="/public/changeNum" style="
                                color: white; 
                                text-decoration: none;     
                                background-image: linear-gradient(to right bottom, #1a3865, #2e3956); 
                                border-radius: 12px; 
                                border: none; 
                                font-family: sans-serif; 
                                font-weight: bold; 
                                font-size: 13px; 
                                width: 150px; 
                                display: flex; 
                                justify-content: center; 
                                align-items: center; 
                                justify-self: center; 
                                height: 50px; 
                                box-shadow: 1.5px 1.5px 10px rgba(0, 0, 0, 0.562); 
                                -webkit-transition-duration: 0.3s; 
                                transition-duration: 0.2s; 
                                -webkit-transition-property: box-shadow, transform; 
                                transition-property: box-shadow, transform;"
                                >
                                Change Phone Number
                            </a>
                        </div>

                        <div class="tombol-3">
                            <a href="/public/yourDrafts" style="
                                color: white; 
                                text-decoration: none;
                                background-image: linear-gradient(to right bottom, #1a3865, #2e3956); 
                                border-radius: 12px; 
                                border: none; 
                                font-family: sans-serif; 
                                font-weight: bold; 
                                font-size: 14px; 
                                width: 150px; 
                                display: flex; 
                                justify-content: center; 
                                align-items: center; 
                                justify-self: center; 
                                height: 50px; 
                                box-shadow: 1.5px 1.5px 10px rgba(0, 0, 0, 0.562); 
                                -webkit-transition-duration: 0.3s; 
                                transition-duration: 0.2s; 
                                -webkit-transition-property: box-shadow, transform; 
                                transition-property: box-shadow, transform;"
                                >
                                Your Draft
                            </a>
                        </div>

                        <div class="tombol-4">
                            <a href="/public/yourOrders" style="
                                color: white; 
                                text-decoration: none;
                                background-image: linear-gradient(to right bottom, #1a3865, #2e3956); 
                                border-radius: 12px; 
                                border: none; 
                                font-family: sans-serif; 
                                font-weight: bold; 
                                font-size: 14px; 
                                width: 150px; 
                                display: flex; 
                                justify-content: center; 
                                align-items: center; 
                                justify-self: center; 
                                height: 50px; 
                                box-shadow: 1.5px 1.5px 10px rgba(0, 0, 0, 0.562); 
                                -webkit-transition-duration: 0.3s; 
                                transition-duration: 0.2s; 
                                -webkit-transition-property: box-shadow, transform; 
                                transition-property: box-shadow, transform;"
                                >
                                Your Order
                            </a>
                        </div>

                        <div class="tombol-5">
                            <a href="/public/yourReceipts" style="
                                color: white; 
                                text-decoration: none;
                                background-image: linear-gradient(to right bottom, #1a3865, #2e3956); 
                                border-radius: 12px; 
                                border: none; 
                                font-family: sans-serif; 
                                font-weight: bold; 
                                font-size: 14px; 
                                width: 150px; 
                                display: flex; 
                                justify-content: center; 
                                align-items: center; 
                                justify-self: center; 
                                height: 50px; 
                                box-shadow: 1.5px 1.5px 10px rgba(0, 0, 0, 0.562); 
                                -webkit-transition-duration: 0.3s; 
                                transition-duration: 0.2s; 
                                -webkit-transition-property: box-shadow, transform; 
                                transition-property: box-shadow, transform;"
                                >
                                Transaction History
                            </a>
                        </div>
                        <div class="tombol-6 bi">
                            <a href="/public/logout" style="
                                color: white; 
                                text-decoration: none;
                                background-image: linear-gradient(to right bottom, #1a3865, #2e3956); 
                                border-radius: 12px; 
                                border: none; 
                                font-family: sans-serif; 
                                font-weight: bold; 
                                font-size: 14px; 
                                width: 150px; 
                                display: flex; 
                                justify-content: center; 
                                align-items: center; 
                                justify-self: center; 
                                height: 50px; 
                                box-shadow: 1.5px 1.5px 10px rgba(0, 0, 0, 0.562); 
                                -webkit-transition-duration: 0.3s; 
                                transition-duration: 0.2s; 
                                -webkit-transition-property: box-shadow, transform; 
                                transition-property: box-shadow, transform;"
                                >
                                Log Out
                            </a>
                        </div>
                    </div>
                    <!-- LIST MENU = END -->

                </div>
            </div>
        </div>
      </div>

</body>