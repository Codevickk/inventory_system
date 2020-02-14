<?php
class Computer
{
    private $conn;
    private $table_name = 'computers';

    public $computer_id;
    public $item;
    public $type;
    public $model;
    public $serial_no;
    public $campus;
    public $housing;
    public $cap_date;
    public $relo_date;
    public $new_location;
    public $new_housing;


    public function __construct($db)
    {
        $this->conn = $db;        
    }

    public function countAll() {
        $sql = "select * from ".$this->table_name;

        $stmt = $this->conn->query($sql);
        return $stmt->rowCount();
    }

    public function readAll($from_record_num, $records_per_page)
    { 
        $sql = "select * from ".$this->table_name." ORDER BY computer_id DESC LIMIT {$from_record_num}, {$records_per_page}";

        $stmt = $this->conn->prepare($sql);

        if ($stmt->execute()) {
            return $stmt;
        }
    }

    public function readOne()
    {
        $sql = "select * from ".$this->table_name."computer_id = :computer_id";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":computer_id", $this->computer_id);

        if ($stmt->execute()) {
            return $stmt;
        }
    }

    public function insert()
    {
        $sql = "INSERT into ".$this->table_name." ( item, type, model, serial_no, campus, housing, cap_date, relo_date, new_location, new_housing) VALUES(:item, :type, :model, :serial_no, :campus, :housing, :cap_date, :relo_date, :new_location, :new_housing)";
        $stmt = $this->conn->prepare($sql);

        // $this->computer_id = htmlspecialchars(strip_tags($this->computer_id));
        $this->item = htmlspecialchars(strip_tags($this->item));
        $this->type = htmlspecialchars(strip_tags($this->type));
        $this->model = htmlspecialchars(strip_tags($this->model));
        $this->serial_no = htmlspecialchars(strip_tags($this->serial_no));
        $this->campus = htmlspecialchars(strip_tags($this->campus));
        $this->housing = htmlspecialchars(strip_tags($this->housing));
        $this->cap_date = htmlspecialchars(strip_tags($this->cap_date));
        $this->relo_date = htmlspecialchars(strip_tags($this->relo_date));
        $this->new_location = htmlspecialchars(strip_tags($this->new_location));
        $this->new_housing = htmlspecialchars(strip_tags($this->new_housing));
        

        $stmt->bindParam(":item", $this->item);
        $stmt->bindParam(":type", $this->type);
        $stmt->bindParam(":model", $this->model);
        $stmt->bindParam(":serial_no", $this->serial_no);
      $stmt->bindParam(":campus", $this->campus);
        $stmt->bindParam(":housing", $this->housing);
        $stmt->bindParam(":cap_date", $this->cap_date);
        $stmt->bindParam(":relo_date", $this->relo_date);
        $stmt->bindParam(":new_location", $this->new_location);
        $stmt->bindParam(":new_housing", $this->new_housing);


        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function delete()
    {
        $sql = "delete from ".$this->table_name. " where computer_id = :computer_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":computer_id", $this->computer_id);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function edit()
    {
        $sql = "update ".$this->table_name." set item=:item, type=:type, model=:model, serial_no=:serial_no, campus=:campus, housing=:housing, cap_date=:cap_date, relo_date=:relo_date, new_location=:new_location, new_housing=:new_housing where computer_id = :computer_id";

        $stmt = $this->conn->prepare($sql);

        $this->item = htmlspecialchars(strip_tags($this->item));
        $this->type = htmlspecialchars(strip_tags($this->type));
        $this->model = htmlspecialchars(strip_tags($this->model));
        $this->serial_no = htmlspecialchars(strip_tags($this->serial_no));
        $this->campus = htmlspecialchars(strip_tags($this->campus));
        $this->housing = htmlspecialchars(strip_tags($this->housing));
        $this->cap_date = htmlspecialchars(strip_tags($this->cap_date));
        $this->relo_date = htmlspecialchars(strip_tags($this->relo_date));
        $this->new_location = htmlspecialchars(strip_tags($this->new_location));
        $this->new_housing = htmlspecialchars(strip_tags($this->new_housing));
        

        $stmt->bindParam(":computer_id", $this->computer_id);
        $stmt->bindParam(":item", $this->item);
        $stmt->bindParam(":type", $this->type);
        $stmt->bindParam(":model", $this->model);
        $stmt->bindParam(":serial_no", $this->serial_no);
        $stmt->bindParam(":campus", $this->campus);
        $stmt->bindParam(":housing", $this->housing);
        $stmt->bindParam(":cap_date", $this->cap_date);
        $stmt->bindParam(":relo_date", $this->relo_date);
        $stmt->bindParam(":new_location", $this->new_location);
        $stmt->bindParam(":new_housing", $this->new_housing);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
