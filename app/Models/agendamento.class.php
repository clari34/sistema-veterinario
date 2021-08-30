<?php

	class Agendamento
	{
		private $pdo;
		public $msgErro = "";

		private $data;
		private $hora;
		private $vacina;

		public function __construct($data, $hora, $vacina)
		{
			this->$data = $data;
			this->$hora = $hora;
			this->$vacina = $vacina;
		}

		public function agendar()
		{
			global $pdo;
			//verificar se, em uma mesma data, o horário já foi agendado

			$sql = $pdo->prepare
			(
				"SELECT id_usuario
				FROM usuarios u, agendamento a
				WHERE u.id_usuario = a.usuario_agenda_fk AND a.hora = :h AND a.data_agendamento = :d"
			);

			$sql->bindValue(":h",$hora);
			$sql->bindValue(":d",$data);
			$sql->execute();

			if($sql->rowCount() > 0)
			{
				return false; //horário indisponível
			}
			else
			{
				//Caso não, agendar
				$sql = "INSERT INTO agendamento(data_agendamento, hora, vacina) VALUES (:d, :h, :v)";
				$conexao = Database::getInstancia();
				$stmt = $conexao->prepare($sql);
				$stmt->bindValue(":d", this->getData);
				$stmt->bindValue(":h", this->getHora);
				$stmt->bindValue(":v", this->getVacina);
				return $stmt->execute();
			}
		}

		public function getData()
		{
			return $this->data;
		}

		public function getHora()
		{
			return $this->hora;
		}

		public function getVacina()
		{
			return $this->vacina;
		}

		public function setData(Int $data)
		{
			$this->data = $data;
			return $this;
		}

		public function setHora(Int $hora)
		{
			$this->hora = $hora;
			return $this;
		}

		public function setVacina(Int $vacina)
		{
			$this->vacina = $vacina;
			return $this;
		}
	}

?>