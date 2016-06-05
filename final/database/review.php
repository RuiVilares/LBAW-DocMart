<?php

	function addComment($id_artigo, $email, $comment, $stars) {
		$id = getId($email);
		if ($id === false) {
			return false;
		}

		global $conn;
		$stmt = $conn->prepare('INSERT INTO "Comentario" (id_artigo,id_cliente,descricao,classificacao) VALUES (:idArtigo, :idCliente, :comment, :stars);');
		$stmt->bindParam(':idArtigo', $id_artigo, PDO::PARAM_INT);
		$stmt->bindParam(':idCliente', $id, PDO::PARAM_INT);
		$stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
		$stmt->bindParam(':stars', $stars, PDO::PARAM_INT);
		try {
			return $stmt->execute();
		} catch (PDOException $e) {
			return false;
		}
	}

	function updateComment($id_artigo, $email, $comment, $stars) {
		$id = getId($email);
		if ($id === false) {
			return false;
		}

		global $conn;
		$stmt = $conn->prepare('UPDATE "Comentario" SET descricao = :comment, classificacao = :classificacao WHERE id_artigo = :idArtigo AND id_cliente = :idCliente;');
		$stmt->bindParam(':idArtigo', $id_artigo, PDO::PARAM_INT);
		$stmt->bindParam(':idCliente', $id, PDO::PARAM_INT);
		$stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
		$stmt->bindParam(':classificacao', $stars, PDO::PARAM_INT);
		try {
			return $stmt->execute();
		} catch (PDOException $e) {
			return false;
		}
	}

	function getId($email) {
		global $conn;
		$stmt = $conn->prepare('SELECT "Cliente".id_cliente FROM "Cliente"
								INNER JOIN "Utilizador"
								ON "Utilizador".id="Cliente".id_cliente AND "Utilizador".email = :email;');
		$stmt->bindParam(':email', $email, PDO::PARAM_STR);
		try {
			$stmt->execute();
			return $stmt->fetch()['id_cliente'];
		} catch (PDOException $e) {
			return false;
		}
	}

?>