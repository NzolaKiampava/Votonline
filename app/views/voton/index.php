<?php $this->view("header", $data);?>


        <section class="hero-section">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="text-center mb-5 pb-2">
                            <h1 class="text-white">SEJA BEM-VINDO AO VOTO.ON</h1>

                            <p class="text-white"> Votar! determinar na decisão do destino de um país,
                                                    como cidadão precisamos exercer um dos direitos da
                                                     cidadania,o direito de votar !
                                                      No sentido etimológico da palavra,
                                                          cidadão deriva da palavra civita, 
                                                        que em latim significa cidade,e que tem
                                                       seu correlato grego na palavra politikos
                                                     – aquele que habita na cidade.
                                                    Cidadania é o direito de ter uma idéia e poder
                                                    expressa-la. È poder votar em quem quiser sem constrangimento.</p>

                            <a href="" class="btn custom-btn smoothscroll mt-3" data-toggle="modal" data-target="#exampleModal">Votar, um direito de cidadania</a>
                        </div>

                        <div class="owl-carousel owl-theme">
                            <?php if(is_array($partidos)):?>
                                <?php foreach($partidos as $partido): ?>
                                    <div class="owl-carousel-info-wrap item">
                                        <img src="<?=ROOT.$partido->logo?>"
                                            class="owl-carousel-image img-fluid" style="height: 450px; " alt="">
                                        <div class="owl-carousel-info">
                                            <h4 class="mb-2">
                                                <?=$partido->nome?>
                                                
                                            <?php 
                                                $db = Database::getInstance();
                                                $user_id = $user_data->id;
                                                $partido_id = $partido->id;
                                                $query = "select * from votos where user_id = '$user_id' and partido_id = '$partido_id'";
                                                $select = $db->read($query);
                                                if($select):
                                            ?>
                                                <img src="<?=ASSETS.THEME?>images/verified.png" class="owl-carousel-verified-image img-fluid"
                                                    alt="">
                                            <?php endif;?>
                                            </h4>
                                            <span style="cursor: pointer;" class="badge success votar" data-id="<?=$partido->id?>">VOTAR</span>
                                        </div>

                                        <div class="social-share">
                                            <ul class="social-icon">
                                                <li class="social-icon-item">
                                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                                </li>

                                                <li class="social-icon-item">
                                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                <?php endforeach;?>
                            <?php endif;?>

                        </div>
                    </div>

                </div>
            </div>
        </section>




        <section class="topics-section section-padding pb-0" id="section_3">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Todos os Partidos</h4>
                        </div>
                    </div>

                    <?php if(is_array($partidos)):?>
                        <?php foreach($partidos as $partido):?>
                            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 info" data-id="<?=$partido->id?>">
                                <div class="custom-block custom-block-overlay">
                                    <a href="#" class="custom-block-image-wrap" title="Clica para ver informações">
                                        <img src="<?=ROOT.$partido->logo?>"
                                            class="custom-block-image img-fluid" alt="">
                                    </a>

                                    <div class="custom-block-info custom-block-overlay-info">
                                        <h5 class="mb-1">
                                            <a href="listing-page.html">
                                                <?=$partido->nome?>
                                            </a>
                                        </h5>
                                        <?php $decimal = $partido->totalvotos;
                                            $percentagem = $decimal * 0.01;
                                        ?>
                                        <p class="badge mb-0"><?=$partido->totalvotos?></p>
                                        <p><?=$percentagem?>%</p>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach;?>
                    <?php endif;?>
                </div>
            </div>
        </section>

        <?php if(is_array($top3)):?>
        <section class="trending-podcast-section section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Top 3 mais votados</h4>
                        </div>
                    </div>

                    <?php foreach($top3 as $top):?>
                    <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                        <div class="custom-block custom-block-full">
                            <div class="custom-block-image-wrap">
                                <a href="detail-page.html">
                                    <img src="<?=ROOT.$top->logo?>" class="custom-block-image img-fluid"
                                        alt="">
                                </a>
                            </div>

                            <div class="custom-block-info">
                                <h5 class="mb-2">
                                    <a href="detail-page.html">
                                        <?=$top->nome?>
                                    </a>
                                </h5>

                                <div class="profile-block d-flex">
                                    <img src="<?=ASSETS.THEME?>images/user_default.jfif"
                                        class="profile-block-image img-fluid" alt="">

                                    <p><?=$top->presidente?>
                                        <strong>Presidente</strong>
                                    </p>
                                </div>

                                <p class="mb-0"><?=$top->lema?></p>

                                <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                    

                                    <a href="#" class="bi-heart me-1">
                                        <span><?=$top->totalvotos?></span>
                                    </a>

                                </div>
                            </div>

                            <div class="social-share d-flex flex-column ms-auto">
                                <a href="#" class="badge ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge ms-auto">
                                    <i class="bi-bookmark"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </section>
        <?php endif;?>
    </main>

<!-- Button trigger modal -->
<!-- Button trigger modal -->
    <!-- MODAL -->
    <!-- Button trigger modal -->
<!-- Modal -->
<?php include 'includes/votar.php'; ?>

<?php $this->view("footer", $data);?>
<script>
  $(function(){

    $(document).on('click', '.votar', function(e){
        console.log("nsndsnd")
      e.preventDefault();
      $('#votar').modal('show');
      var id = $(this).data('id');
      getRow(id);
    });

    $(document).on('click', '.info', function(e){
      e.preventDefault();
      $('#info').modal('show');
      var id = $(this).data('id');
      getRow(id);
    });

  });

  function getRow(id){
    console.log(id)
    $.ajax({
      type: 'POST',
      url: '<?=ROOT?>partidos_row',
      data: {id:id},
      dataType: 'json',
      success: function(response){
        //console.log(response);
        $('.id').val(response[0].id);    
        $('.nome').html(response[0].nome);
        $('.lema').html(response[0].lema);
        $('.qtdmembros').html(response[0].qtdmembros);
        $('.presidente').html(response[0].presidente);
        $('.vicepresidente').html(response[0].vicepresidente);
        $('.sede').html(response[0].sede);
        $('.totalvotos').html(response[0].totalvotos);
      }
    });
  }
</script>
