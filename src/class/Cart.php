<?php
class Cart{

    private $database;

    public function __construct($db){
        $this->database = $db;
    }

    public function getCart($userID) {
        $cart = $this->database->query("SELECT * FROM cart WHERE userID = '$userID' ");
        return $cart;
    }

    public function add($product_id, $user_id){
        $exist = $this->database->query("SELECT * FROM cart WHERE productID = '$product_id' AND userID = $user_id");
        if(empty($exist)){
            $sql = "INSERT INTO cart VALUES(0, :productID, :userID, :quantity)";
            $params = array("productID" => $product_id, "userID" => $user_id, "quantity" => 1);
            $statement = $this->database->create($sql, $params);
            echo "Le produit a été ajouté pour la première fois";
        }else {
            $ID = intval($exist[0]["ID"]);
            $quantity = intval($exist[0]["quantity"]);
            $quantity = ++$quantity;
            $update = $this->database->update("UPDATE cart SET quantity = '$quantity' WHERE ID = '$ID' ");
            echo "La quantité a bien été mise à jour";
        }
       
    }

    public function removeProduct($ID){
        $exist = $this->database->query("SELECT * FROM cart WHERE ID = '$ID'");
        if(empty($exist)){
            die("Erreur le produit n'est pas dans le panier");
        }
        $quantity = $exist[0]["quantity"];
        if($quantity > 1){
            --$quantity;
            $this->database->update("UPDATE cart SET quantity = '$quantity' WHERE ID = $ID");
            echo "Quantité mise à jour";
        }else {
            $this->database->remove("DELETE FROM cart WHERE ID = $ID");
            echo "Produit supprimé du panier"; 
        }

    }





}
?>
