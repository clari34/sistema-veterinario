<?php

class Agendamento
{
    private $pdo;
    public $msgErro = "";

    private $data;
    private $hora;
    private $vacina;

    public function conectar($nome, $host, $usuario, $senha)
    {
        global $pdo;
		try 
		{
			$pdo = new PDO("mysql:dbname=".$nome,$usuario,$senha);
		} 
		catch (PDOException $e) 
		{
			$msgErro = $e->getMessage();
		}
    }

    public function agendar($data, $hora, $vacina)
    {
        global $pdo;
		//verificar se o limite de 6 agendamentos por hora foi atingido

		$sql = $pdo->prepare
        (
            "SELECT id_usuario
            FROM usuarios u, agendamento a
            WHERE u.id_usuario = a.usuario_agenda_fk AND hora = :h"
        );

		$sql->bindValue(":h",$hora);
		$sql->execute();

		if($sql->rowCount() > 6)
		{
			return false; //limite atingido
		}
        else
		{
			//Caso não, agendar
			$sql = $pdo->prepare("INSERT INTO agendamento(data_agendamento, hora, vacina) VALUES (:d, :h, :v)");
			$sql->bindValue(":d",$data);
			$sql->bindValue(":h",$hora);
			$sql->bindValue(":v",$vacina);
			$sql->execute();
			return true; //Tudo ok
		}
    }
}

?>