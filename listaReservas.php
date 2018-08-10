<?php
require_once("header.php");
require_once("logica-usuario.php");
?>
<div class="container text-center">
    <p class="display-4" id="msgBonita">Verifique as reservas em vigor :)</p>
</div>

<div class="container col-11 table-responsive">
    <table class="table table-borderless table-light table-hover">
        <caption>Lista de Reservas em vigor</caption>
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Lab</th>
                <th>Para</th>
                <th>Horario</th>
            </tr>
        </thead>       
    </table>
</div>

<?php
require_once("footer.php");
?>