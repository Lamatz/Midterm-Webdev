<?php

session_start();

?>


<!doctype html>
<html lang="en-US">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>TrooLife</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">




  <link rel="stylesheet" href="styles/footer-style.css">
  <link rel="stylesheet" href="styles/header-style.css">
  <link rel="stylesheet" href="styles/homebanner-style.css">


  <link rel="stylesheet" href="styles/about-style/team-section.css">

  <style>
    .section .account-details .single-form p {
      /* display: flex; */

      text-align: center;
      justify-content: center;
      align-items: center;
    }
  </style>



</head>



<body>


  <?php include 'header.php'; ?>




  <!-- ACCOUNT DETAILS -->
  <div class="section section-padding-02 " style="margin: 100px 0 300px 0;">
    <div class="container">
      <div class="tab-pane " id="pills-account">
        <!-- My Account Details End -->
        <h4 class="account-title">Account Details</h4>
        <div class="my-account-details account-wrapper">

          <div class="account-details px-3 py-4">
            <div class="row g-3">

              <!-- DISPLAY NAME -->
              <div class="col-12 col-md-6 mb-3">
                <div class="single-form">
                  <label class="form-label fw-bold">Display Name</label>
                  <div class="form-control-plaintext">
                    <p><?php echo isset($_SESSION['name']) ? htmlspecialchars($_SESSION['name']) : 'N/A'; ?></p>
                  </div>
                </div>
              </div>

              <!-- USER NAME -->
              <div class="col-12 col-md-6 mb-3">
                <div class="single-form">
                  <label class="form-label fw-bold">User Name</label>
                  <div class="form-control-plaintext">
                    <p><?php echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'N/A'; ?></p>
                  </div>
                </div>
              </div>

              <!-- BIRTHDATE -->
              <div class="col-12 col-md-6 mb-3">
                <div class="single-form">
                  <label class="form-label fw-bold">Birth Date</label>
                  <div class="form-control-plaintext">
                    <?php
                    // Optional: Format the date if it's stored in a standard format
                    $birthdate = $_SESSION['birthday'] ?? null;
                    if ($birthdate) {
                      try {
                        $date = new DateTime($birthdate);
                        $displayDate = $date->format('F j, Y'); // e.g., January 1, 1990
                      } catch (Exception $e) {
                        $displayDate = htmlspecialchars($birthdate); // Display as is if format fails
                      }
                    } else {
                      $displayDate = 'N/A';
                    }
                    ?>
                    <p><?php echo $displayDate; ?></p>
                  </div>
                </div>
              </div>

              <!-- GENDER -->
              <div class="col-12 col-md-6 mb-3">
                <div class="single-form">
                  <label class="form-label fw-bold">Gender</label>
                  <div class="form-control-plaintext">
                    <p><?php echo isset($_SESSION['gender']) ? htmlspecialchars(ucfirst($_SESSION['gender'])) : 'N/A'; // Optional: Capitalize first letter 
                        ?></p>
                  </div>
                </div>
              </div>

              <!-- EMAIL -->
              <div class="col-12 col-md-6 mb-3">
                <div class="single-form">
                  <label class="form-label fw-bold">Email Address</label>
                  <div class="form-control-plaintext">
                    <p><?php echo isset($_SESSION['user_email']) ? htmlspecialchars($_SESSION['user_email']) : 'N/A'; ?></p>
                  </div>
                </div>
              </div>

              <!-- PASSWORD -->
              <div class="col-12 col-md-6 mb-3">
                <div class="single-form">
                  <label class="form-label fw-bold">Password</label>
                  <div class="form-control-plaintext">
                    <p><?php echo $_SESSION['password'] ?? 'N/A'; ?></p>
                  </div>
                </div>
              </div>

              <!-- IMAGE -->
              <div class="col-md-12">
                <div class="single-form">
                  <label class="form-label fw-bold">Profile Picture</label>
                  <div class="form-control-plaintext d-flex justify-content-center align-items-center" style="min-height: 200px;">
                    <?php if (!empty($_SESSION['img_dir'])): ?>
                      <img src="<?php echo htmlspecialchars($_SESSION['img_dir']); ?>"
                        alt="Profile Image"
                        class="img-fluid rounded"
                        style="max-height: 180px;">
                    <?php else: ?>
                      <div class="text-muted">
                        <i class="bi bi-person-square fs-1"></i>
                        <p class="mt-2 mb-0">No image uploaded</p>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
              </div>


              <!-- Optional: Add an Edit Button -->
              <div class="col-12 mt-4 d-flex justify-content-end">
                <a href="index.php" class="btn btn-primary bg-primary text-white px-3">Back to Home</a>

              </div>


            </div>
          </div>
        </div>
        <!-- My Account Details End -->
      </div>
    </div>
  </div>
  <!-- ACCOUNT DETAILS END-->


  <?php include 'footer.php'; ?>
  <button id="backBtn" class="back-to-top"><i class="icofont-simple-up"></i></button>
  <!--Back To End-->

  </div>
</body>



</html>