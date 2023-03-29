<?php $this->view("admin/header", $data);?>

<?php $this->view("admin/sidebar", $data);?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Datatables</h5>
              <?php if(isset($_SESSION['success'])): ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                <?=$_SESSION['success']?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <?php unset($_SESSION['success']); endif;?>
              <a href="<?=ROOT?>admin/cadastrar_partidos"><button type="button" class="btn btn-primary"><i class="bi bi-star me-1"></i> Cadastrar Partido</button></a>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Logo</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Presidente</th>
                    <th scope="col">Vice-Presidente</th>
                    <th scope="col">Lema</th>
                    <th scope="col">Sede</th>
                    <th scope="col">Qtd.Membros</th>
                    <th scope="col">Ações</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(is_array($partidos)):?>
                    <?php foreach($partidos as $partido):?>
                      <tr>
                        <th scope="row"><img src="<?=ROOT.$partido->logo?>" class="circle" width="70" height="70" alt=""></th>
                        <td><?=$partido->nome?></td>
                        <td><?=$partido->presidente?></td>
                        <td><?=$partido->vicepresidente?></td>
                        <td><?=$partido->lema?></td>
                        <td><?=$partido->sede?></td>
                        <td><?=$partido->qtdmembros?></td>
                        <td><a href="<?=ROOT?>admin/cadastrar_partidos?id=<?=$partido->id?>"><button type="button" class="btn btn-success"><i class="bi bi-check-circle"></i></button></a> <a href="<?=ROOT?>admin/partidos?delete=<?=$partido->id?>"><button type="button" class="btn btn-danger"><i class="bi bi-exclamation-octagon"></i></button></a></td>
                      </tr>
                    <?php endforeach;?>
                  <?php endif;?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php $this->view("admin/footer", $data);?>