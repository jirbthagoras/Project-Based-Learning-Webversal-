<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="/app/View/pemesanan/style5.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="bg" style="background-color: rgb(6, 6, 25);">

      <!--  -->
      <a class="navbar-brand" href="#">
        <img src="/app/View/asset/webversal.png" alt="logo webversal" class="logo">
      </a>
  <!--  -->

  <h2 class="title" 
  style=
  "  position: relative; 
  color: white; 
  font-family: inter; 
  top: 150px;
  margin-left: 400px;
  font-weight: bold;">
  Admin Panel
  </h2>

      <div class="container-fluid" 
      style="
      background-image: linear-gradient(to right bottom, #0e2140, #2e3956, #0b1324);
      border: none;
      border-radius: 10px;
      width: 70%;
      height: 400px;
      position: relative;
      top: 170px;">
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
                    margin-top: 90px;
                    font-size: 30px;">
                    Name : <?= $_SESSION['username'] ?>
                    </p>
                    <hr style="color: white; width: 90%; position: relative; left: 40px;">
                    <!-- NAMA = END -->


                    <!-- LIST MENU -->
                    <div class="tombol" 
                    style=
                    "display: 
                    flex; justify-content: center; 
                    gap: 80px; 
                    margin-bottom: 100px;
                    position: relative;
                    top: 100px;">

                        <div class="tombol-1">
                            <a href="/public/manageOrder" style="
                            color: white; 
                            text-decoration: none;       
                            background-image: linear-gradient(to right bottom, #1a3865, #2e3956); 
                            border-radius: 12px; 
                            border: none; 
                            font-family: sans-serif; 
                            font-weight: bold; 
                            font-size: 14px; 
                            width: 200px; 
                            display: flex; 
                            justify-content: center; 
                            align-items: center; 
                            justify-self: center; 
                            height: 60px; 
                            box-shadow: 1.5px 1.5px 10px rgba(0, 0, 0, 0.562); 
                            -webkit-transition-duration: 0.3s; 
                            transition-duration: 0.2s; 
                            -webkit-transition-property: box-shadow, transform; 
                            transition-property: box-shadow, transform;">
                            Manage Order
                            </a>
                        </div>

                        <div class="tombol-1">
                            <a href="/public/logout" style="
                            color: white;
                            text-decoration: none;
                            background-image: linear-gradient(to right bottom, #1a3865, #2e3956);
                            border-radius: 12px;
                            border: none;
                            font-family: sans-serif;
                            font-weight: bold;
                            font-size: 14px;
                            width: 200px;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            justify-self: center;
                            height: 60px;
                            box-shadow: 1.5px 1.5px 10px rgba(0, 0, 0, 0.562);
                            -webkit-transition-duration: 0.3s;
                            transition-duration: 0.2s;
                            -webkit-transition-property: box-shadow, transform;
                            transition-property: box-shadow, transform;">
                                Logout
                            </a>
                        </div>

                        
                    </div>
                    <!-- LIST MENU = END -->

                </div>
            </div>
        </div>
      </div>

</body>