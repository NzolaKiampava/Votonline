<!-- Votar -->
<div class="modal fade" id="votar">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><b>Tens Certeza que queres votar...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>PARTIDO</p>
                    <h2 class="bold nome"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cancelar</button>
              <button type="submit" class="btn btn-success btn-flat" name="votar"><i class="fa fa-trash"></i> Votar</button>
              </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="info" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title h4" id="exampleModalFullscreenLabel">Informação do Partido</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>PARTIDO</p><h2 class="bold nome"></h2>
        <p>Nome do Candidato</p>
        <h5 class="presidente"></h5>
        <p>Lema do Partido</p>
        <h5 class="lema"></h5>
        <p>Quantidade de membros</p>
        <h5 class="qtdmembros"></h5>
        <p>Se do Partido</p>
        <h5 class="sede"></h5>
        <p>Total de Votos</p>
        <h5 class="totalvotos"></h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
     
     
