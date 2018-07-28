<?php
require_once("header.php");
require_once("usuario.php");
?>
<div class="container text-center">
    <p class="display-4" id="msgBonita">Entre em contato conosco :)</p>
</div>

<div class="container col-6">
    <form action="enviaEmail.php" method="POST">
        <table class="table">
            <tr>                
                <td><input type="text" class="form-control" placeholder="Nome"></td>
            </tr>
            <tr>               
                <td><input type="text" class="form-control" placeholder="Email"></td>
            </tr>
            <tr>                
                <td><textarea class="form-control" placeholder="Escreva sua mensagem aqui"></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" class="btn btn-primary" value="Enviar"></td>
            </tr>
        </table>
    </form>
</div>
<?php
require_once("footer.php");
?>