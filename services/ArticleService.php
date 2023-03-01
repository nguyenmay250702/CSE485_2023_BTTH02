<?php
require_once('config/database.php');
require_once('models/Article.php');
class ArticleService{

    public function getAll($sql){
        $database = new Database;
        $conn = $database->getConn();   //khởi tạo đối tượng PDO
        $stmt = $conn->query($sql);

        $articles = [];
        while($row = $stmt->fetch()){
            $article = new Article($row['ma_bviet'],$row['tieude'],$row['ten_bhat'],$row['ma_tloai'],$row['tomtat'],$row['noidung'],$row['ma_tgia'],$row['ngayviet'],$row['hinhanh']);
            array_push($articles,$article);
        }
        $conn=null; //đóng kết nối
        return $articles;
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