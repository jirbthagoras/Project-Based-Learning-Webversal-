<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Now</title>
  <link rel="stylesheet" href="/app/View/pemesanan/style2.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body style="background-color: rgb(4, 4, 46);">
  <div class="wrapper">
    <div class="box">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>

  <!--  -->
      <a class="navbar-brand" href="#">
        <img src="/app/View/asset/webversal.png" alt="logo webversal" class="logo">
      </a>
  <!--  -->

  <?php if(isset($model['success'])): ?>

  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
      </symbol>
  </svg>

  <div class="alert alert-success d-flex align-items-center" role="alert" style="margin: 0 auto; top: 50px; width: 80%; justify-content: center; justify-self: center;">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Succes:"><use xlink:href="#check-circle-fill"/></svg>
      <div class="danger-text" style="font-size: 20px;">
          <?= $model['success']?>
      </div>
  </div>

  <?php endif; ?>

  <?php if(isset($model['error'])): ?>

  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </symbol>
  </svg>


  <div class="alert alert-danger d-flex align-items-center" role="alert" style="margin: 0 auto; top: 40px; width: 80%; justify-content: center; justify-self: center;">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <div class="danger-text" style="font-size: 20px;">
      <?= $model['error']?>
    </div>
  </div>

  <?php endif; ?>

  <h2 class="title" style=
  "color: white;
  font-family: inter;
  font-size: 30px;
  font-weight: 800;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  position: relative;
  top: 100px;
  ">
  Order Your Website Now!
  </h2>

  
  <div class="container-fluid" 
  style=
  "background-color: white;
  width: 90%;
  border-radius: 10px;
  position: relative;
  top: 100px;">

    <div class="container">
      <div class="row">
          <form action="/public/order/create" method="post">
        <div class="col-12">
          <div class="isi-1">

            <label class="judul-1" style="color: black; margin-top: 20px;">Your Website Name :</label>
              <input type="text" name="name" class="form-control" id="password" required>

            <hr class="line-1" 
            style=
            "color: black;
            position: relative; 
            bottom: 15px;">
          </div>

          <div class="isi-2">
            <label class="judul-2" style="color: black;">Describe Your Website :</label>
            <textarea cols="30" rows="10" name="description"  id="text" class="desk-2" required
            style=
            "color: black; 
            border: none; 
            width: 100%;
            resize: none;
            height: 80px; 
            margin-top: 5px;"></textarea>

            <hr class="line-2" 
            style=
            "color: black; 
            position: relative;
            bottom: 15px;">
          </div>


          <!-- PAYMENT -->
          <p class="payment" 
          style=
          "
          color: black;
          font-weight: bold;
          margin-bottom: 50px;
          font-family: inter;
          "
          >Payment Method :
          </p>

          <select name="payment_method" id="" style="position: relative; bottom: 40px; font-size: 20px;">
            <option value="cash">Cash</option>
            <option value="transfer">Transfer</option>
          </select>
          <!-- PAYMENT = END -->

          <!-- TOMBOL-TOMBOL -->
          <div class="tombol" style="display: flex; justify-content: space-between;">
            <input type="submit" value="Create Order" class="tombol-1 btn btn-success" style="width: 150px;  position: relative; bottom: 20px; font-weight: bold;">

            <button type="button" class="tombol-2 btn btn-secondary" style="width: 100px;  position: relative; bottom: 20px; font-weight: bold;">
              <a href="/public/" style="text-decoration: none; color: white;">Back</a>
            </button>
          </div>
        </div>
          </form>
          <!-- TOMBOL-TOMBOL = END -->
        </div>
      </div>
    </div>
  </div>

</body>
</html>
  </div>
    