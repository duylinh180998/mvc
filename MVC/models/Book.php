<?php
require_once "models/Model.php";
class Book extends Model{
    public $connection;
    public function getAll(){
        $connection=$this->OpenConnect();
        $querySelect="SELECT * FROM books";
        $resutls=mysqli_query($connection,$querySelect);
        $books=[];
        if(mysqli_num_rows($resutls)>0){
            $books=mysqli_fetch_all($resutls,MYSQLI_ASSOC);
        }
        return $books;
    }
    public function addBook($id,$name){
            $connection=$this->OpenConnect();
            $queryInsert="INSERT INTO books(`id`,`name`) VALUES ('$id','$name')";
            $is_insert=mysqli_query($connection,$queryInsert);
            if ($is_insert){
                return true;
            }
            return false;

    }
}