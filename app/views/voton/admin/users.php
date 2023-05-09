<?php $this->view("admin/header", $data);?>

<?php $this->view("admin/sidebar", $data);?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tabela Usuários</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Página Principal</a></li>
          <!--<li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
-->
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>
              
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Perfil</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if(is_array($users)):?>
                    <?php foreach($users as $user):?>
                      <tr>
                        <td><?=$user->name?></td>
                        <td><?=$user->email?></td>
                        <td><span class="<?=$user->rank=="admin"?"badge bg-success":"badge bg-primary"?>"><?=$user->rank?></span></td>
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