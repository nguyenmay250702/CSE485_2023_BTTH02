<?php
require_once('config/database.php');
require_once('models/Author.php');
class AuthorService{

    public function getAll($sql){
        $database = new Database;
        $conn = $database->getConn();   //khởi tạo đối tượng PDO
        $stmt = $conn->query($sql);

        $authors = [];
        while($row = $stmt->fetch()){
            $author = new Author($row['ma_tgia'],$row['ten_tgia'],$row['hinh_tgia']);
            array_push($authors,$author);
        }
        $conn=null; //đóng kết nối
        return $authors;
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