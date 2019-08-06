<?php 
include 'db.php';

$mar_att = $_REQUEST['marque'];
$selectM = $db->query("SELECT `id_marque`, `mar_name`, `mar_views`, `mar_note` FROM `marques` where id_marque=.$mar_att");
$marque = $selectM->fetchAll();


$data = '{
	"id": $marque['id_marque']
	"name": $marque['mar_name'],
	"views": $marque['mar_views'],
	"note": $marque['mar_note'],
	"scale": 10
}';

$index = json_encode($data);

// $mar->id = $marque['id_marque'];
// $mar->name = $marque['mar_name'];
// $mar->views = $marque['mar_views'];
// $mar->mar_note = $marque['mar_note'];

// $mar = json_encode($mar);

// echo $mar;

?>