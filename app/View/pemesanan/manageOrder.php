<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Order</title>
    <link rel="stylesheet" href="/app/View/pemesanan/style6.css">
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


<?php if(isset($model['error'])): ?>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
    </svg>


    <div class="alert alert-danger d-flex align-items-center" role="alert" style="margin: 0 auto; top: 40px; width: 80%; justify-content: center; justify-self: center;">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div class="danger-text" style="font-size: 20px;">
            <?= $model['error'] ?>
        </div>
    </div>

<?php endif; ?>

<h2 class="text" style="position: relative; color: white; top: 100px; margin-right: 200px;">MANAGE ORDER</h2>


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
                        <tr style="font-size: 12px">

                            <th>Username</th>
                            <th>Phone Number</th>
                            <th>Website Name</th>
                            <th>Code</th>
                            <th class="desc">Description</th>
                            <th>Created At</th>
                            <th>Verified At</th>
                            <th style="width: 400px;">Price</th>
                            <th>Payment Method</th>
                            <th>Verified</th>

                        </tr>
                        </thead>
                        <tr style="font-size: 10px;">
                            <?php foreach($model['result'] as $set): ?>
                        <tr>
                            <td><?= $set['username'] ?></td>
                            <td><?= $set['phone_number'] ?></td>
                            <td><?= $set['name'] ?></td>
                            <td><?= $set['code'] ?></td>
                            <td>
                                <div style="text-wrap: auto">
                                    <?= $set['description'] ?>
                                </div>
                            </td>
                            <td><?= $set['created_at'] ?></td>
                            <td><?= $set['verified_at'] ?></td>
                            <td>Rp. <?= $set['price'] ?></td>
                            <td><?= $set['payment_method'] ?></td>
                            <td><?php

                                if($set['verify'] == 0){

                                    ?> <strong style="color: red">Not Verfied</strong> <?php
                                } else
                                {
                                    ?> <strong style="color: green">Verified</strong> <?php
                                }

                                ?></td>
                            <?php if($set['price'] != null && $set['verify'] == 0): ?>
                            <td class="tom">
                                <a href="/public/verify/code/<?= $set['code'] ?>"><button style="background: rgba(96, 112, 255, 0.2); border: none; border-radius: 5px; font-family: sans-serif; width: 140px;
                            ">Verify Order</button></a>
                            </td>
                            <?php endif; ?>

                            <?php if($set['verify'] == 0): ?>
                            <td class="tom">
                                <a href="/public/setPrice/<?= $set['code'] ?>"><button style="background: rgba(96, 112, 255, 0.2); border: none; border-radius: 5px; font-family: sans-serif; width: 140px;
                            ">Set Price</button></a>
                            </td>
                            <?php endif; ?>

                            <?php if($set['verify'] == 0): ?>
                                <td class="tom">
                                    <a href="/public/cancel/<?= $set['code'] ?>"><button style="background: rgba(96, 112, 255, 0.2); border: none; border-radius: 5px; font-family: sans-serif; width: 140px;
                            ">Cancel Order</button></a>
                                </td>
                            <?php endif; ?>

                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>

                    <h1 style="padding-top: 25%"><strong>There is no order at this point</strong></h1>

                <?php endif;?>

            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
