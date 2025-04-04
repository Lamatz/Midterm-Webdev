<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles/form-style/registration-form.css">


  <title>Registration Form</title>
</head>

<body>


  <section class="p-3 p-md-4 p-xl-5">
    <div class="container">

      <!--First Section -->
      <div class="card border-light-subtle shadow-sm">
        <div class="row g-0">


          <div class="col-12 col-md-6 information-box">
            <div class="d-flex justify-content-center h-100">
              <div class="col-10 col-xl-8 pb-3">

                <!-- CONTENT HEADING -->
                <div class="row mb-1 pt-3 pt-md-4 pt-xl-5 ">
                  <div class="col-12">
                    <div class="mb-5 align-self">
                      <h2 class="h3">General Information</h2>
                      <h3 class="fs-6 fw-normal text-white m-0">Enter your details to register</h3>
                    </div>
                  </div>
                </div>

                <form action="#!">
                  <div class="row gy-3 gy-md-4 overflow-hidden">
                    <div class="col-6">
                      <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
                      <input type="email" class="form-control" name="firstName" id="firstName" placeholder="First Name"
                        required>
                    </div>
                    <div class="col-6">
                      <label for="lastName" class="form-label">Last Name <span class="text-danger">*</span></label>
                      <input type="email" class="form-control" name="lastName" id="lastName" placeholder="Last Name"
                        required>
                    </div>

                    <div class="col-12">
                      <label for="date-of-birth" class="form-label">Date of Birth <span
                          class="text-danger">*</span></label>
                      <input type="date" class="form-control" name="date-of-birth" id="date-of-birth" required>
                    </div>

                    <div class="col-12">
                      <p>Sex:<span class="text-danger">*</span></p>
                      <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="sex" id="male" value="Male" required>
                        <label for="male" class="form-check-label">Male</label>
                      </div>

                      <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="sex" id="female" value="Female" required>
                        <label for="female" class="form-check-label">Female</label>
                      </div>
                    </div>


                    <div class="col-12">
                      <label for="profilePicture" class="form-label">Profile Picture <span
                          class="text-danger">*</span></label>
                      <input class="form-control" type="file" id="profilePicture" name="profilePicture" accept="image/*"
                        required>
                    </div>



                  </div>
                </form>
              </div>
            </div>
          </div>


          <!-- SECOND SECTION -->
          <div class="col-12 col-md-6 registration-form-details">
            <div class="card-body p-3 p-md-4 p-xl-5">
              <div class="row">
                <div class="col-12">
                  <div class="mb-5">
                    <h2 class="h3">Account Details</h2>
                    <h3 class="fs-6 fw-normal text-secondary m-0">Enter your details to register</h3>
                  </div>
                </div>
              </div>
              <form action="#!">
                <div class="row gy-3 gy-md-4 overflow-hidden">
                  <div class="col-12">
                    <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username"
                      required>
                  </div>


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
                      <input class="form-check-input" type="checkbox" value="" name="iAgree" id="iAgree" required>
                      <label class="form-check-label text-secondary" for="iAgree">
                        I agree to the <a href="#!" class="link-primary text-decoration-none">terms and conditions</a>
                      </label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-grid">
                      <button class="btn bsb-btn-xl sign-up-button" type="submit">Sign up</button>
                    </div>
                  </div>
                </div>
              </form>
              <div class="row">
                <div class="col-12">
                  <hr class="mt-5 mb-4 border-secondary-subtle">
                  <p class="m-0 text-secondary text-center">Already have an account? <a href="login-form.html"
                      class="link-primary text-decoration-none">Sign in</a></p>
                </div>
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