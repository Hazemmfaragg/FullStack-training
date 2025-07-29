<?php
class Course{
    private $instructor;
    private $title;

    
    function __construct($inst,$tit)
    {
        $this->instructor=$inst;
        $this->title=$tit;
    }
    public function describe(){
        echo "instructor name: ".$this->instructor;
        echo "<br>course title: ".$this->title;
        
    }


}

$Course= new Course("Hazem Farag","sql course");

echo $Course->describe();









?>