<?php
require_once "controllers/Controller.php";
require_once "models/Book.php";

class BookController extends Controller {
    public function index(){
        $book=new Book();
        $books=$book->getAll();
        require_once 'views/books/index.php';
    }
    public function add(){
        print_r($_GET);
        if(isset($_GET['save'])){
            $book=new Book();
            $id=$_GET['id'];
            $name=$_GET['name'];
            $insert=$book->addBook($id,$name);
            print_r($_GET['name']);
            header("Location:index.php?controller=book&action=index");
            require_once 'views/books/add.php';
        }
    }
}