<?php $this->view("admin/header", $data);?>

<?php $this->view("admin/sidebar", $data);?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">

        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Floating labels Form</h5>

              <!-- Floating Labels Form -->
              <form method="POST"  enctype="multipart/form-data" class="row g-3">
                <div class="col-md-12">
                  <div class="form-floating">
                    <input style="display: none;" name="id" value="<?=isset($partido)?$partido[0]->id:''?>" type="text">
                    <input type="text" name="nome" value="<?=isset($partido)?$partido[0]->nome:''?>" class="form-control" id="floatingName" placeholder="Nome do Partido" required>
                    <label for="floatingName">Partido</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" name="presidente" value="<?=isset($partido)?$partido[0]->presidente:''?>" class="form-control" id="floatingEmail" placeholder="Nome do Presidente" required>
                    <label for="floatingEmail">Presidente</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" name="vicepresidente" value="<?=isset($partido)?$partido[0]->vicepresidente:''?>" class="form-control" id="floatingPassword" placeholder="Vice Presidente" required>
                    <label for="floatingPassword">Vice-Presidente</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input class="form-control" name="lema" value="<?=isset($partido)?$partido[0]->lema:''?>" placeholder="Lema do Partido" id="floatingTextarea" style="height: 100px;" required>
                    <label for="floatingTextarea">Lema</label>
                  </div>
                </div>
                <div class="col-md-10">
                  <div class="col-md-12">
                    <div class="form-floating">
                      <input type="text" name="sede" value="<?=isset($partido)?$partido[0]->sede:''?>" class="form-control" id="floatingCity" placeholder="Sede do Partido" required>
                      <label for="floatingCity">Sede</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                <div class="col-md-12">
                    <div class="form-floating">
                      <input name="qtdmembros" value="<?=isset($partido)?$partido[0]->qtdmembros:''?>" min=1 type="number" class="form-control" id="m" required>
                      <label for="m">Qtd.Membros</label>
                    </div>
                  </div>
                </div>
                <div class="col-sm-10">
                    <label for="formFile">Logotipo</label>
                    <input class="form-control" type="file" name="logo" value="<?=isset($partido)?$partido[0]->logo:''?>" id="formFile" required>
                  </div>
                <div class="text-center">
                  <?php if(isset($partido)):?>
                    <button type="submit" name="update" class="btn btn-primary">Atualizar</button>
                  <?php else: ?>
                    <button type="submit" name="add" class="btn btn-primary">Submit</button>
                  <?php endif;?>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  <?php $this->view("admin/footer", $data);?>