<?php
include("banco/conecta.php");

$data = $_POST["data"];
$turma = $_POST["turma"];
$lab = $_POST["lab"];
$horario = $_POST["horario"];
$obs = $_POST["obs"];

/*$query = "insert into reserva (data, turma, lab, horarios, obs) 
values ($data, '$turma', '$lab', '$horario', '$obs')";

$resultado = mysqli_query($conexao, $query);
$reserva = mysqli_fetch_assoc($resultado);

if ($reserva == true) {
    $_SESSION["success"] = "Reserva Realizada com sucesso";
}else{
    $_SESSION["danger"] = "Erro ao realizar a reserva";
}

//header("Location: form-reservas.php");
*/
?>

<pre>
    <span>
        Dados recebidos: 
        <br>
        <p>data: <?=$data?></p>
        <p>turma: <?=$turma ?></p>
        <p>lab: <?=$lab?></p>
        <p>horario: <?=$horario?></p>
        <p>obs: <?=$obs?></p>

        <button onclick=window.history.back()>Voltar</button>
    </span>
</pre>
