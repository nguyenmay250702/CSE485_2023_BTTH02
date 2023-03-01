<?php
require_once('config/database.php');
require_once('models/Category.php');
class CategoryService{

    public function getAll($sql){
        $database = new Database;
        $conn = $database->getConn();   //khởi tạo đối tượng PDO
        $stmt = $conn->query($sql);

        $categories = [];
        while($row = $stmt->fetch()){
            $categorie = new Category($row['ma_tloai'],$row['ten_tloai']);
            array_push($categories,$categorie);
        }
        $conn=null; //đóng kết nối
        return $categories;
    }

    public function getById(){
        
    }

    public function insert(){

    }

    public function update(){

    }

    public function delete(){

    }
}
?>