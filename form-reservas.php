<?php
require_once("header.php");
require_once("usuario.php");

?>
<div class="container text-center">
    <p class="display-4" id="msgBonita">Reserve seu laboratório com praticidade :)</p>
</div>

    <div class="container col-6">
        <form action="adiciona-reserva.php">
            <div class="form-group">
                <label for="data">Data da Reserva:</label>
                <input type="date" class="form-control">
            </div>
            <div class="form-group">
                <label for="turma">Turma:</label>
                <select name="turma" class="form-control">
                    <option value="Exemplo 1">Exemplo 1</option>
                    <option value="Exemplo 2">Exemplo 2</option>
                </select>
            </div>
            <div class="form-group">
                <label for="lab">Laboratório:</label>
                <select name="lab" class="form-control">
                    <option value="Exemplo 1">Exemplo 1</option>
                    <option value="Exemplo 2">Exemplo 2</option>
                </select>
            </div>
            <div class="form-group">
                <label for="horario">Horário:</label>
                <select name="horario" class="form-control">
                    <optgroup label="MATUTINO">
                            <option value="07:00 - 09:00"> 07:30 - 09:00 </option>
                            <option value="10:00 - 11:50"> 10:00 - 11:50 </option>
                            <option value="09:10 - 10:00"> 09:10 - 10:10 </option>
                            <option value="10:20 - 11:10"> 10:20 - 11:10 </option> 

                    <optgroup label="VESPERTINO">  

                            <option value="13:10 - 14:00"> 13:10 - 14:00 </option>                            
                            <option value="14:00 - 14:50"> 14:00 - 14:50 </option>
                            <option value="14:50 - 15:35"> 14:50 - 15:35 </option>                            
                            <option value="16:00 - 16:50"> 16:00 - 16:50 </option>
                            <option value="16:50 - 17:35"> 16:50 - 17:35 </option>

                    <optgroup label="VESPERTINO(TÉCNICO)">

                            <option value="13:10 - 15:15"> 13:10 - 15:15 </option>                              
                            <option value="15:35 - 17:40"> 15:35 - 17:40 </option>

                    <optgroup label="NOTURNO">

                            <option value="18:45 - 20:30"> 18:45 - 20:30 </option>
                            <option value="20:50 - 22:20"> 20:50 - 22:20 </option>       
                </select>
                <div class="form-group">
                    <label for="obs">Observações:</label>
                    <textarea class="form-control"></textarea>
                </div>

                <input type="submit" class="btn btn-primary" value="Enviar">
                
            </div>
        </form>
    </div>

<?php    
require_once("footer.php");
?>