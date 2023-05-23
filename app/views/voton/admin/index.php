<?php $this->view("admin/header", $data);?>

<?php $this->view("admin/sidebar", $data);?>
  

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Página Principal</a></li>
          <!--<li class="breadcrumb-item active">Dashboard</li>
-->
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Hoje</a></li>
                    <li><a class="dropdown-item" href="#">Este Mês</a></li>
                    <li><a class="dropdown-item" href="#">Este Ano</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Partidos <span><?=is_array($partidos)?count($partidos):'0'?></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="ri ri-bookmark-2-line"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?=is_array($partidos)?count($partidos):'0'?></h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Hoje</a></li>
                    <li><a class="dropdown-item" href="#">Este Mês</a></li>
                    <li><a class="dropdown-item" href="#">Este Ano</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Total de Votos <span>| <?=is_array($votos)?count($votos):'0'?></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="ri ri-line-chart-line"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?=is_array($votos)?count($votos):'0'?>%</h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Hoje</a></li>
                    <li><a class="dropdown-item" href="#">Este Mês</a></li>
                    <li><a class="dropdown-item" href="#">Este Ano</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Usuários <span>| <?=is_array($users)?count($users):'0'?></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?=is_array($users)?count($users):'0'?></h6>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Reports -->
            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Hoje</a></li>
                    <li><a class="dropdown-item" href="#">Este Mês</a></li>
                    <li><a class="dropdown-item" href="#">Este Ano</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Relatório <span>/Hoje</span></h5>

                  <!-- Line Chart -->
                  <div>
                  <canvas id="myChart"></canvas>
                  </div>
                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->

            <!-- Recent Sales -->
            <?php if(is_array($voto_usuarios)):?>
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Hoje</a></li>
                    <li><a class="dropdown-item" href="#">Este Mês</a></li>
                    <li><a class="dropdown-item" href="#">Este Ano</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">VOTOS <span>| TOTAL</span></h5>
                  
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Partidos</th>
                        <th scope="col">Presidente</th>
                        <th scope="col">Total de Votos</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($partidos as $partido):?>
                        <tr>
                          <td><?=$partido->nome?></td>
                          <td><a href="#" class="text-primary"><?=$partido->presidente?></a></td>
                          <td><span class="badge bg-primary"><?=$partido->totalvotos?></span></td>
                        </tr>
                      <?php endforeach;?>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->
            <?php endif;?>
          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Hoje</a></li>
                <li><a class="dropdown-item" href="#">Este Mês</a></li>
                <li><a class="dropdown-item" href="#">Este Ano</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Actividade Recente <span>| Hoje</span></h5>

              <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label">32 min</div>
                  <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                  <div class="activity-content">
                    Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">56 min</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                    Voluptatem blanditiis blanditiis eveniet
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">2 hrs</div>
                  <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                  <div class="activity-content">
                    Voluptates corrupti molestias voluptatem
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">1 dia</div>
                  <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                  <div class="activity-content">
                    Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                  </div>
                </div><!-- End activity item-->
                <div class="activity-item d-flex">
                  <div class="activite-label">2 dias</div>
                  <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                  <div class="activity-content">
                    Est sit eum reiciendis exercitationem
                  </div>
                </div><!-- End activity item-->
                <div class="activity-item d-flex">
                  <div class="activite-label">4 Semana</div>
                  <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                  <div class="activity-content">
                    Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                  </div>
                </div><!-- End activity item-->

              </div>

            </div>
          </div><!-- End Recent Activity -->

          <!-- Website Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Hoje</a></li>
                <li><a class="dropdown-item" href="#">Este Mês</a></li>
                <li><a class="dropdown-item" href="#">Este Mês</a></li>
              </ul>
            </div>
                      
            <div class="card-body pb-0">
              <h5 class="card-title">Website Traffic <span>| Today</span></h5>

              <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Access From',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: 1048,
                          name: 'Search Engine'
                        },
                        {
                          value: 735,
                          name: 'Direct'
                        },
                        {
                          value: 580,
                          name: 'Email'
                        },
                        {
                          value: 484,
                          name: 'Union Ads'
                        },
                        {
                          value: 300,
                          name: 'Video Ads'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Website Traffic -->
        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php $this->view("admin/footer", $data);?>
  <script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['MPLA','UNITA','FNLA','CASACE','PRS','P-NJANGO','PDP-ANA','APN','PADDA-AP','PALMA','PPA','PNSA'],
        datasets: [{
          label: '# Total',
          data: [<?=is_array($MPLA)?count($MPLA):'0'?>, <?=is_array($UNITA)?count($UNITA):'0'?>,<?=is_array($FNLA)?count($FNLA):'0'?>, <?=is_array($CASACE)?count($CASACE):'0'?>, <?=is_array($PRS)?count($PRS):'0'?>,<?=is_array($PNJANGO)?count($PNJANGO):'0'?>,<?=is_array($PDPANA)?count($PDPANA):'0'?>,<?=is_array($APN)?count($APN):'0'?>,<?=is_array($PADDAAP)?count($PADDAAP):'0'?>,<?=is_array($PALMA)?count($PALMA):'0'?>,<?=is_array($PPA)?count($PPA):'0'?>,<?=is_array($PNSA)?count($PNSA):'0'?>],
          borderWidth: 1,
          backgroundColor: ['#0d6efd', '#0d6efd', '#0d6efd', '#0d6efd', '#0d6efd', '#0d6efd', '#0d6efd', '#0d6efd', '#0d6efd', '#0d6efd', '#0d6efd', '#0d6efd'],
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        },
        legend: {
          display: false
        },
        tooltips: {
          callbacks: {
            label: function(tooltipItem) {
              return tooltipItem.yLabel;
            }
          }
        }
      }
    });
  </script>