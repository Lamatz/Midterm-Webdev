<?php

session_start();
$error = isset($_SESSION['error']) ? $_SESSION['error'] : "";
unset($_SESSION['error']); // Clear error after displaying
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="styles/form-style/login-form.css">



</head>

<body>


  <section class="p-3 p-md-4 p-xl-5">
    <div class="container">
      <div class="card border-light-subtle shadow-sm">
        <div class="row g-0">

          <!-- INFO-SECTION -->
          <div class="col-12 col-md-6 information-box">
            <div class="d-flex align-items-center justify-content-center h-100 py-5">
              <div class="col-10 col-xl-8 py-3">

                <!-- LOGO -->
                <h1 class="text-center text-white">Tr<span class="border-bottom-yellow">oo</span>life</h1>
                <!-- LOGO -->
                <hr class="border-primary-subtle mb-4">
                <h2 class="h1 mb-4">We make digital products that drive you to stand out.</h2>
                <p class="lead m-0">We write words, take photos, make videos, and interact with artificial intelligence.
                </p>
              </div>
            </div>
          </div>



          <!-- LOGIN - FORM - SECTION -->
          <div class="col-12 col-md-6 login-form">
            <div class="card-body p-3 p-md-4 p-xl-5">
              <div class="row">
                <div class="col-12">
                  <div class="mb-5">
                    <h3>Log in</h3>
                  </div>
                </div>
              </div>
              <form action="assets/php/login.php" method="POST">
                <div class="row gy-3 gy-md-4 overflow-hidden ">
                  <!-- Display Error Message -->
                  <?php if (!empty($error)) : ?>
                    <p style="color: red;"><?php echo $error; ?></p>
                  <?php endif; ?>

                  <div class="col-12">
                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com"
                      required>
                  </div>
                  <div class="col-12">
                    <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" name="password" id="password" value="" required>
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" name="remember_me" id="remember_me">
                      <label class="form-check-label text-secondary" for="remember_me">
                        Keep me logged in
                      </label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-grid">
                      <button class="btn login-button" type="submit" name="submit">Log in now</button>
                    </div>
                  </div>
                </div>
              </form>
              <div class="row">
                <div class="col-12">
                  <hr class="mt-5 mb-4 border-secondary-subtle">
                  <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end">
                    <a href="registration-form.php" class="link-secondary text-decoration-none">Create new account</a>

                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>


</body>

</html>