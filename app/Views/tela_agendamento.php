<?php

?>

<html lang="pt-br">
    <head>

        <meta charset="utf-8">
        <title>Agendar vacinação</title>
        <link rel="stylesheet" href="../Estilo/estilo2.css">
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
        <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>

    </head>

    <body>

        <form class="formulario" action="?class=agendamento&action=agendar" method="POST">

            <h1>Agendar vacinação</h1>

            <div >
                <label for="data">Escolha uma data</label>
                <br>
                <input name="data" type="text" id="calendario"/>
            </div>
            <br>
            <div>
                <label for="horario">Escolha um intervalo do dia</label>
                <br>
                <small>Funcionamento: 08:00 às 18:00</small>
                <br>
                <input type="time" id="hora" name="hora" min="08:00" max="18:00" required>
            </div>
            <br>
            <div>
                <label for="vacina">Escolha a(s) vacina(s)</label>
                <br>
                <select class="vacinas">
                    <option value="vacina1">V-8</option>
                    <option value="vacina2">V-10</option>
                    <option value="vacina3">Antirrábica</option>
                </select>
            </div>
            <br>
            <div>
                <input type="submit">
                <br><br>
                <button class="sair">Sair</button>
            </div>

        </form>

    </body>
</html>

<script>
    $(function() {
        $("#calendario").datepicker({
            dateFormat: 'dd-mm-yy',
            changeMonth: true,
            changeYear: true,
            dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
            dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
            dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
            monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
            monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
        });
    });
</script>