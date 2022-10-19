<?php
include "./models/Db.php";

class UrmoBaze
{
    public $id;
    public $name;
    public $sales_field;
    public $accepts_card;
    public $items_quantity;

    public function __construct($id = null, $name = null, $sales_field = null, $accepts_card = null, $items_quantity = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->sales_field = $sales_field;
        $this->accepts_card = $accepts_card;
        $this->items_quantity = $items_quantity;
    }

    public static function all()
    {
        $urmoBaze = [];
        $db = new Db();
        $sql = "SELECT * FROM `shops`";
        $result = $db->conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            $urmoBaze[] = new UrmoBaze($row['id'], $row['name'], $row['sales_field'], $row['accepts_card'], $row['items_quantity']);
        }

        $db->conn->close();
        return $urmoBaze;
    }

    public static function create()
    {
        $db = new Db();
        $stmt = $db->conn->prepare("INSERT INTO `shops`(`name`, `sales_field`, `accepts_card`, `items_quantity`) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssii", $_POST['name'], $_POST['sales_field'], $_POST['accepts_card'], $_POST['items_quantity']);
        $stmt->execute();
        $stmt->close();
        $db->conn->close();
    }

    public static function find($id)
    {
        $urmoBaze = new UrmoBaze;
        $db = new Db();
        $sql = "SELECT * FROM `shops` WHERE `id` = " . $id;
        $result = $db->conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            $urmoBaze = new UrmoBaze($row['id'], $row['name'], $row['sales_field'], $row['accepts_card'], $row['items_quantity']);
        }

        $db->conn->close();
        return $urmoBaze;
    }

    public static function update()
    {
        $db = new Db();
        $stmt = $db->conn->prepare("UPDATE `shops` SET `name`=?,`sales_field`=?,`accepts_card`=?,`items_quantity`=? WHERE `id` = ?");
        $stmt->bind_param("ssiii", $_POST['name'], $_POST['sales_field'], $_POST['accepts_card'], $_POST['items_quantity'], $_POST['id']);
        $stmt->execute();
        $stmt->close();
        $db->conn->close();
    }

    public static function destroy($id)
    {
        $db = new Db();
        $stmt = $db->conn->prepare("DELETE FROM `shops` WHERE `id` = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
        $db->conn->close();
    }

    public static function sort() 
    {
        $urmoBaze = [];
        $db = new Db();
        $end = "";
        switch ($_GET['sort']) {
            case 'items_quantity asc':
                $end = "`items_quantity` asc";
                break;
            case 'items_quantity desc':
                $end = "`items_quantity` desc";
                break;  
        }
    

        $sql = "SELECT * FROM `shops` ORDER BY " . $end;
        $result = $db->conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            $urmoBaze[] = new UrmoBaze($row['id'], $row['name'], $row['sales_field'], $row['accepts_card'], $row['items_quantity']);
        }

        $db->conn->close();
        return $urmoBaze;
    }

}
