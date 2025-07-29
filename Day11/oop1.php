<?php
class Book{
    public $title;
    public function read(){
        echo "hello, Your book title is $this->title";
    }
}
$student1= new Book();
$student1->title="عبقرية عمر";
$student1->read();

?>