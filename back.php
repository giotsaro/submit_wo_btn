<?php
include_once './db.php';
class Products{
    public function __construct(){
        $this->db = new database; 
    }
 //sku existence check 
 public function checksku($sku){
    
    $query = "SELECT * FROM product_list WHERE `sku` = :sku ";
    $sql = $this->db->pdo->prepare($query);
    $sql->bindValue(':sku', $sku);
    $sql->execute();

    if($sql->rowCount() > 0){
        $x=1;
       // return $x;
        return true;
    }else{
        $x=0;
        return $x;

        return false;
    }
}

public $db;
public $sku;
}

$products =new Products();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['text'])) {
$sku = $_POST['text'];
   //because of includes it returns empty fields 
 $checkresult= $products->checksku($sku);
   if($checkresult ===true){
       // retun array to solve problem
       echo json_encode($arr =[1]) ;
       //or return int
     //  echo  $response = 1;
   }else{
     // retun array to solve problem
     echo  json_encode($arr =[0]) ;
     //or return int
    //echo $response = 0;
   }

}
?>