<?php $this->view("header", $data);?>


        <header class="site-header d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center">

                        <h2 class="mb-0">Percentagens de Votos</h2>
                    </div>

                </div>
            </div>
        </header>


        <section class="about-section section-padding" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <div class="pb-5 mb-5">
                            <div class="section-title-wrap mb-4">
                                <h4 class="section-title">Percentagens de Votos</h4>
                            </div>

                            <!-- Line Chart -->
                            <div>
                                <canvas id="myChart"></canvas>
                            </div>
                            <!-- End Line Chart -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php $this->view("footer", $data);?>

<script src="<?=ASSETS.THEME?>js/chartjs.js"></script>
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