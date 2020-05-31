<br><br><br><br>
<div class="col-md-10 offset-md-2" id="Painel_body">
    <div class="row">
        <div class="col-md-12 last-game">
            <div class="coluna">
                <h2 class="main-title swing">Proximos Jogos</h2>
                <br>
                <?php 
                  for($i = 0;$i < 5;$i++){
                    include "inc/Painel/Game.php";
                    echo "<hr class='bar-last'>";
                  }
                ?>
            </div>
        </div>
        <div class="col-md-12">
            <div class="coluna">
                Ultimos Jogos
            </div>
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-md-12">
            <div class="coluna">
                Historico
            </div>
        </div>
    </div>
</div>