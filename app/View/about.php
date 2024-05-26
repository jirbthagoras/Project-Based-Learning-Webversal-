
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebVersal</title>
    <link rel="stylesheet" href="/app/View/style3.css">
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

      <div class="aboutus">
        <!-- Card Putra -->
        <div class="putra card" style="width: 250px;">
          <img src="/app/View/asset/putro.jpg" class="card-img-top" alt="Gambar Putra">
          <div class="card-body">
            <h5 class="card-title1"
            style="
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: inter;
            font-weight: 800;">
              Front End
            </h5>
  
            <h5 class="card-title2"
            style="
            display: flex;
            justify-content: center;
            align-items: center;"
            >M. Putra D. W
            </h5>
            
            <p class="card-text">Berubahlah menjadi lebih baik, selagi bisa.</p>
            
            <div class="dropdown" 
            style=
            "display: flex; 
            justify-content: center; 
            align-items: center;">

              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                More Details
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"></a></li>
                <li>
                  <a class="other1 dropdown-item" href="https://www.instagram.com/mas.muhh_?igsh=NXB1bDQxaXB0bTRx" target="_blank">
                  <ion-icon name="logo-instagram"></ion-icon>
                  mas.muhh_
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">
                    <ion-icon name="logo-whatsapp"></ion-icon>
                    +62 895424022411
                  </a>
                </li>
              </ul>
            </div>

          </div>
        </div>
        <!-- Card Putra -->


        <!-- Card Fiko -->
        <div class="putra card" style="width: 250px;">
          <img src="/app/View/asset/mbahe.jpg" class="card-img-top" alt="Gambar Putra">
          <div class="card-body">
            <h5 class="card-title1"
            style="
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: inter;
            font-weight: 800;">
              Front End
            </h5>
  
            <h5 class="card-title2"
            style="
            display: flex;
            justify-content: center;
            align-items: center;">
            Rizki Fiko F.
            </h5>
            
            <p class="card-text">Jangan sia-sia kan hidup mu, karena hidup itu hanya sekali.</p>

            <div class="dropdown" 
            style=
            "display: flex; 
            justify-content: center; 
            align-items: center;">

              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                More Details
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"></a></li>
                <li>
                  <a class="other1 dropdown-item" href="https://www.instagram.com/pikaksonice?igsh=OW5hOHczZHMxempu" target="_blank">
                  <ion-icon name="logo-instagram"></ion-icon>
                  pikaksonice
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">
                    <ion-icon name="logo-whatsapp"></ion-icon>
                    +62 83837230205
                  </a>
                </li>
              </ul>
            </div>

          </div>
        </div>
        <!-- Card Fiko -->


        <!-- Card Jabriel -->
        <div class="putra card" style="width: 250px;">
          <img src="/app/View/asset/windah.jpg" class="card-img-top" alt="Gambar Putra">
          <div class="card-body">
            <h5 class="card-title1"
            style="
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: inter;
            font-weight: 800;">
              Back End
            </h5>
  
            <h5 class="card-title2"
            style=
            "display: flex; 
            justify-content: center; 
            align-items: center;">
            Jabriel Hans T.
            </h5>
            
            <p class="card-text">Jangan lihat dunia dari dalam teropong</p>

            <div class="dropdown" 
            style=
            "display: flex; 
            justify-content: center; 
            align-items: center;">

              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                More Details
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"></a></li>
                <li>
                  <a class="other1 dropdown-item" href="https://www.instagram.com/jirbthagoras?igsh=MTBxbDlraHk1NHF6NA==" target="_blank">
                  <ion-icon name="logo-instagram"></ion-icon>
                  jirbthagoras
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">
                    <ion-icon name="logo-whatsapp"></ion-icon>
                    +62 87850646620
                  </a>
                </li>
              </ul>
            </div>

          </div>
        </div>
        <!-- Card Jabriel -->

      </div>  

<br>
        
      <!-- Card Dilla -->
      <div class="aboutus2">
        <div class="putra card" style="width: 250px;">
          <img src="/app/View/asset/aplh1.jpg" class="card-img-top" alt="Gambar Putra">
          <div class="card-body">
            <h5 class="card-title1"
            style="
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: inter;
            font-weight: 800;">
              UI/UX
            </h5>
  
            <h5 class="card-title2"
            style=
            "display: flex; 
            justify-content: center; 
            align-items: center;">
            Fadilla Rachmasari N.
            </h5>
            
            <p class="card-text">Jangan biarkan rasa takut menentukan masa depanmu.</p>

            <div class="dropdown" 
            style=
            "display: flex; 
            justify-content: center; 
            align-items: center;">

              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                More Details
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"></a></li>
                <li>
                  <a class="other1 dropdown-item" href="https://www.instagram.com/dwill_aaa/" target="_blank">
                  <ion-icon name="logo-instagram"></ion-icon>
                  dwill_aaa
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">
                    <ion-icon name="logo-whatsapp"></ion-icon>
                    +62 88229535428
                  </a>
                </li>
              </ul>
            </div>

          </div>
        </div>
        <!-- ??? -->

        <!-- Card Agista -->
        <div class="putra card" style="width: 250px;">
          <img src="/app/View/asset/aplh2.jpg" class="card-img-top" alt="Gambar Putra">
          <div class="card-body">
            <h5 class="card-title1"
            style="
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: inter;
            font-weight: 800;">
              UI/UX
            </h5>
  
            <h5 class="card-title2"
            style=
            "display: flex; 
            justify-content: center; 
            align-items: center;">
            Agista Dwi C.
            </h5>
            
            <p class="card-text">Mulailah setiap hari dengan pikiran positif.</p>

            <div class="dropdown" 
            style=
            "display: flex; 
            justify-content: center; 
            align-items: center;">

              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                More Details
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"></a></li>
                <li>
                  <a class="other1 dropdown-item" href="https://www.instagram.com/adcchyy_/" target="_blank">
                  <ion-icon name="logo-instagram"></ion-icon>
                  adcchyy_
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">
                    <ion-icon name="logo-whatsapp"></ion-icon>
                    +62 85724879990
                  </a>
                </li>
              </ul>
            </div>

          </div>
        </div>
        <!-- ??? -->

        <!-- Card Zaskia -->
        <div class="putra card" style="width: 250px;">
          <img src="/app/View/asset/aplh3.jpg" class="card-img-top" alt="Gambar Putra">
          <div class="card-body">
            <h5 class="card-title1"
            style="
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: inter;
            font-weight: 800;">
              UI/UX
            </h5>
  
            <h5 class="card-title2"
            style=
            "display: flex; 
            justify-content: center; 
            align-items: center;">
            Zaskia Vadya A. Y
            </h5>
            
            <p class="card-text">Jangan berhenti ketika lelah. Berhentilah ketika selesai.</p>

            <div class="dropdown" 
            style=
            "display: flex; 
            justify-content: center; 
            align-items: center;">

              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                More Details
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"></a></li>
                <li>
                  <a class="other1 dropdown-item" href="https://www.instagram.com/feat.vadya/" target="_blank">
                  <ion-icon name="logo-instagram"></ion-icon>
                  feat.vadya
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">
                    <ion-icon name="logo-whatsapp"></ion-icon>
                    +62 81575894066
                  </a>
                </li>
              </ul>
            </div>

          </div>
        </div>
        <!-- ??? -->

      </div>