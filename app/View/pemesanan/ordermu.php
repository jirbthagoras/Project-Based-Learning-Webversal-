<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Order</title>
    <link rel="stylesheet" href="/app/View/pemesanan/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Great+Vibes&family=Inter:wght@100..900&family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Sacramento&display=swap" rel="stylesheet">
</head>
<body style="background-color: rgb(6, 6, 25);">
    
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

      <h2 class="text" style="position: relative; color: white; top: 100px; margin-right: 200px;">YOUR ORDER</h2>


    <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="konten" style=
        "background-color: rgb(255, 255, 255);
        width: 80%;
        border-radius: 20px;
        position: relative;
        top: 100px;
        height: 600px;
        overflow-x: auto;">

        <div class="row">
            <div style="text-align: center" class="col-12">

                <?php if($model["result"] != null): ?>
                
                <table class="table table-border" style="border-collapse: collapse; width: 100%; margin-top: 20px;">
                    <thead>
                        <tr style="font-size: 12px;">

                            <th>Name</th>
                            <th>Code</th>
                            <th style="width: 400px;">Description</th>
                            <th>Created At</th>
                            <th>Verified At</th>
                            <th>Verified</th>
                        </tr>
                    </thead>
                    <tr style="font-size: 10px;">
                    <?php foreach($model['result'] as $set): ?>
                        <tr>
                            <td><?= $set['name'] ?></td>
                            <td><?= $set['code'] ?></td>
                            <td>
                                <div style="text-wrap: auto">
                                    <?= $set['description'] ?>
                                </div>
                            </td>
                            <td><?= $set['created_at'] ?></td>
                            <td><?= $set['verified_at'] ?></td>
                            <td><?php

                                if($set['verify'] == 0){

                                    ?> <strong style="color: red">Not Verfied</strong> <?php
                                } else
                                {
                                    ?> <strong style="color: green">Verified</strong> <?php
                                }

                                ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <?php else:?>

                <h1 style="padding-top: 25%"><strong>You Have No Orders Right Now.</strong></h1>

                <?php endif; ?>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
