<?php

    class AgendamentoController
    {
        public function efetuarAgendamento()
        {
            $agendamento = new Agendamento($_POST["data"], $_POST["hora"], $_POST["vacina"]);
            if($agendamento = $agendamento->agendar())
            {
                echo "Agendamento efetuado";
            }
            else
            {
                echo "Erro";
            }
        }
    }

?>