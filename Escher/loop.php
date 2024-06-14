<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetição PHP</title>
</head>
<body>
    <h1>Looping PHP</h1>
    <form id="form" method="post">
        <label for="datasemana">Digite o dia da semana</label>
        <select name="datasemana" id="datasemana">
            <option value="domingo">Domingo</option>
            <option value="segunda">Segunda</option>
            <option value="terça">Terça</option>
            <option value="quarta">Quarta</option>
            <option value="quinta">Quinta</option>
            <option value="sexta">Sexta</option>
            <option value="sabado">Sábado</option>
        </select>

        <h3>Selecione uma mensagem referente ao dia</h3>
        <label for="mensagemdodia">Mensagem do dia</label>
        <select name="mensagemdodia" id="mensagemdodia">
            <option value="Tente sempre">Tente Sempre</option>
            <option value="você consegue">Você Consegue</option>
        </select>

        <h3>Informe um Nome</h3>
        <label for="nome">Informe o nome</label>
        <input type="text" id="nome" name="nome">

        <h3>Quantidade de vezes que o código irá se repetir</h3>
        <label for="repeticoes">Quantidade de repetições</label>
        <input type="number" id="repeticoes" name="repeticoes" min="1" max="10">
    
        
        <button type="button" onclick="submitForm()">botao</button>
    </form>
    <?php
if(isset($_POST["botao"]))
{
    $dias = $_POST["dia"];
    $mensagemdodia = $_POST["mensagem"];
    $informeseunome = $_POST["nome"];
    $quantidadederepeticao = $_POST["repeticao"];

echo "hr size ='3' color = 'red'>";
echo "<strong>datasemana</strong>" .$dias;
echo "<strong>mensagemdodia</strong>" .$mensagemdodia;
echo "<strong>Informeseunome</strong>" .$informeseunome;
echo "<strong>quantidadederepeticao</strong>" .$repeticao;




}
?>
</body>
</html>