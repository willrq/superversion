<?PHP

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Content-Type: application/json");

 $items []= array("version_actual" => "1.0.3");
  
        
echo json_encode($items);

?>