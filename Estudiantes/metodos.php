<?php
include_once('connection.php');

class consulta extends connection
{
    public function __construct(){
        $this->db=parent::__construct();
    }
    public function getmaterias(){
        $row = null;
        $statement = $this->db->prepare("SELECT * FROM materias");
        $statement->execute();
        while($result = $statement->fetch()){
            $row[]=$result;
        }
        return $row;
    }
    public function getdocente()
    {
        $row = null;
        $statement = $this->db->prepare("SELECT * FROM docentes");
        $statement->execute();
        while($result = $statement->fetch()){
            $row[]=$result;
        }
        return $row;
    }
}

?>