<?php

?>

<html lang="pt-br">
    <head>

        <meta charset="utf-8">
        <title>Agendar vacinação</title>
        <link rel="stylesheet" href="../public/Formatacao/estilo.css">
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
        <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>

    </head>

    <body>

        <form class="formulario" action="" method="">

            <h1>Agendar vacinação</h1>

            <div>
                <label for="data">Escolha uma data</label>
                <br>
                <input type="text" id="calendario" />
            </div>
            <br>
            <div>
                <label for="horario">Escolha um intervalo do dia</label>
                <br>
                <select class="horarios">
                    <option value="horario1">08:00 - 09:00</option>
                    <option value="horario2">09:00 - 10:00</option>
                    <option value="horario3">10:00 - 11:00</option>
                    <option value="horario4">11:00 - 12:00</option>
                    <option value="horario5">14:00 - 15:00</option>
                    <option value="horario6">15:00 - 16:00</option>
                    <option value="horario7">16:00 - 17:00</option>
                    <option value="horario8">17:00 - 18:00</option>
                </select>
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
                <button class="agendar">Agendar</button>
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