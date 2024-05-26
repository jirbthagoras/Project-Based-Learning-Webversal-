<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="/app/View/login%20page/style4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Great+Vibes&family=Inter:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Sacramento&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-color: #070D1A;">

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

      <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
      </svg>

    <?php if(isset($model['error'])): ?>
      <div class="alert alert-danger d-flex align-items-center" role="alert" style="margin: 0 auto; top: 50px; width: 80%; justify-content: center; justify-self: center;">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div class="danger-text" style="font-size: 20px;">
            <?= $model['error'] ?>
        </div>
      </div>
    <?php endif; ?>


    <div class="container d-flex justify-content-center align-items-center">
        <div class="card border-0 bg-dark" style="width: 686px; top: 100px;">
            <div class="card-header text-center border-0" style="margin-top: 10px;">
                <h2>Sign Up</h2>
            </div>
            <div class="card-body mx-auto">
                <form action="/public/register" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label text-white">Username</label>
                        <input type="text" name="username" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label text-white">Create password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label text-white">Phone number</label>
                        <input type="tel"  name="phoneNumber" placeholder="Masukkan: 08xx-xxxx-xxxx" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" class="form-control" id="confirmPassword">
                    </div>
                    <div class="d-grid gap-2">
                       <button type="submit" class="btn btn-primary" style="background-color: #0EA5E9; border-radius: 12px; border: none; font-family: sans-serif; font: bold; width: 130px; margin-top: 10px; display: flex; justify-content: center; justify-self: center;">
                        Submit
                    </button>
                    </div>
                </form>
                <div class="text-center mt-4">
                    <p class="text-white" style="color: #A19A9A !important;">Already have an account? <a href="/public/login" class="text-white text-decoration-none">Log in</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
