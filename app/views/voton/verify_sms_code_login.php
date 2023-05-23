<?php $this->view("admin/header", $data);?>

<body>

  <main>
  
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
            <img src="<?=ASSETS.THEME?>images/Logoitel.jpg " width="90px"; height ="200px"; class="logo-image img-fluid" alt="templatemo pod talk">
                  <h3>PAP-2022/2023</h3>
                  
              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <span class="d-none d-lg-block ">VotoON</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">verificação de codigo </h5>
                    <p class="text-center small">Mandamos um sms no seu numero de telefone</p>
                    <span style="font-size: 18px; color: red;"><?php check_error() ?></span><br>
                  </div>

                  <form method="POST" class="row g-3 needs-validation" novalidate>

                    <div class="col-12">
                      <label for="yourCode" class="form-label">SMS CODE</label>
                      <div class="input-group has-validation">
                        <input type="text" name="sms_code" value="" class="form-control" id="yourCode" required>
                        <div class="invalid-feedback">Introduza aqui o codigo.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Verificar</button>
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
  <script src="<?=ASSETS.THEME?>admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?=ASSETS.THEME?>admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=ASSETS.THEME?>admin/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="<?=ASSETS.THEME?>admin/assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?=ASSETS.THEME?>admin/assets/vendor/quill/quill.min.js"></script>
  <script src="<?=ASSETS.THEME?>admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?=ASSETS.THEME?>admin/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?=ASSETS.THEME?>admin/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=ASSETS.THEME?>admin/assets/js/main.js"></script>

</body>

</html>