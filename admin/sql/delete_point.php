<?php

$sql = 'DELETE FROM `points` WHERE `id` = :id';
$query = mysqlConnect()->prepare($sql);
$query->execute(['id' => $id]);
$delete = $query->fetch(PDO::FETCH_OBJ);
