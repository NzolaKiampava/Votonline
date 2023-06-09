<?php $this->view("admin/header", $data);?>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">VotoON</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Criar uma Conta</h5>
                    <p class="text-center small">Introduza seus dados pessoais para criar uma conta</p>
                    
                    <span style="font-size: 18px; color: red;"><?php check_error() ?></span><br>
                  </div>

                  <form method="POST" class="row g-3 needs-validation" novalidate>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Seu nome</label>
                      <input type="text" name="name" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Seu Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">palavra-Passe</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Verificar palavra-Passe</label>
                      <input type="password" name="password2" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                   
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Criar conta</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Já tem uma conta? <a href="pages-login.html">Iniciar Sessão</a></p>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?=ASSETS.THEME?>>admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?=ASSETS.THEME?>>admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=ASSETS.THEME?>>admin/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="<?=ASSETS.THEME?>>admin/assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?=ASSETS.THEME?>>admin/assets/vendor/quill/quill.min.js"></script>
  <script src="<?=ASSETS.THEME?>>admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?=ASSETS.THEME?>>admin/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?=ASSETS.THEME?>>admin/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=ASSETS.THEME?>>admin/assets/js/main.js"></script>

</body>

</html>