<?php
// require_once('config/database.php');
require_once('services/ArticleService.php');
require_once('services/CategoryService.php');
require_once('services/AuthorService.php');

class HomeController
{

    // public function __construct()
    // {
    //     $articleService = new ArticleService();
    //     $categoryService = new CategoryService();
    //     // $this->author = new ArticleService();
    // }

    public function index()
    {
        $articleService = new ArticleService();
        $categoryService = new CategoryService();
        include("views/homes/index.php");
    }

    public function login()
    {
        include("views/homes/login.php");
    }

    public function register()
    {
        include("views/homes/register.php");
    }

    public function detail()
    {
        $articleService = new ArticleService();
        $categoryService = new CategoryService();
        $authorService = new AuthorService();

        include("views/homes/detail.php");
    }




}
?>