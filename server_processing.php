<?php 
include("db.php");

$reqCount = $db->prepare("SELECT id FROM users");
$reqCount->execute();
$allRow = $reqCount->fetchAll();

$recordsTotal = count($allRow);

$length = $_GET["length"];
$start = $_GET["start"];

$sql = "SELECT id, nom, prenom, email, phone FROM users";

if(isset($_GET["search"]) && !empty($_GET["search"]["value"])){
    
    $search = $_GET["search"]["value"];
    $sql .= " WHERE id like '%$search%' OR nom like '%$search%' OR prenom like '%$search%' OR email like '%$search%' OR phone like '%$search%'";
}

$sql .= " LIMIT $start, $length" ;

$query = $db->prepare($sql);
$query->execute();

$result = [];

while($row = $query->fetch(PDO::FETCH_OBJ)){
    $result[] = [
        $row->id,
        $row->nom,
        $row->prenom,
        $row->email,
        $row->phone,
        "<a href=''>Supprimer</a>"
        
    ];
}


echo json_encode([
    'draw'=>$_GET['draw'],
    'recordsTotal' => $recordsTotal,
    'recordsFiltered' => $recordsTotal,
    'data' => $result
])


?>