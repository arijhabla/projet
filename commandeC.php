<?php
/**
 * Created by PhpStorm.
 * User: ignitedev
 * Date: 4/26/19
 * Time: 10:46 AM
 */
include "../config.php";
session_start();

class commandeC
{

    function insertnewcommande()
    {
        $db = config::getConnexion();
        $item_total = 0;
        foreach ($_SESSION["cart_item"] as $item) {
            $item_total += ($item["prix"] * $item["quantite"]);
        }

        $sql = "insert into commande (idClient,prTotal,nom,prenom,email,adresse,tel,etatCom) values
                (:idclient,:prTotal,:nom,:prenom,:email,:adresse,:tel,:etatCom)";
        try {

            $req = $db->prepare($sql);
            $nom = $_POST['last-name'];
            $prenom = $_POST['first-name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $tel= $_POST['tel'];
            $req->bindValue(':idclient', 1111);
            $req->bindValue(':nom', $nom);
            $req->bindValue(':prenom', $prenom);
            $req->bindValue(':email', $email);
            $req->bindValue(':adresse', $address);
            $req->bindValue(':tel', $tel);
            $req->bindValue(':etatCom', "En Cours");
            $req->bindValue(':prTotal', $item_total);
            $req->execute();


            $req1 = $db->query("select * from commande where idClient=1111 ORDER BY idCom DESC LIMIT 1");
            $id = $req1->fetchAll();
            //var_dump($id);

            foreach ($_SESSION["cart_item"] as $item) {
                if (!in_array($_SESSION["cart_item"], array())) {
                    if (isset($item['id'])) {
                        $req = $db->query("insert into LigneCommande (idCommande,idProduit,Quantite) Values ('" . $id[0]["idCom"] . "','" . $item["id"] . "','" . $item["quantite"] . "')");
                    }
                }
            }
            unset($_SESSION["cart_item"]);
            echo "<script>document.location.href ='index.php';</script>";

        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }




    public function addpanier($id)
    {
        $db = config::getConnexion();
        $req1 = $db->query("SELECT * FROM catalogue WHERE id_article= $id ");

        $prods = $req1->fetchAll();
        var_dump($_SESSION["cart_item"]);

        foreach ($prods as $prod) {
            $prix = $prod['prix'];
            $image = $prod['image'];
            $description = $prod['type'];
            $nom = $prod['nom'];
            $exist = 0;
            if (!empty($_SESSION["cart_item"])) {
                foreach ($_SESSION["cart_item"] as $k => $v) {
                    if ($_GET['id'] == $_SESSION["cart_item"][$k]['id']) {
                        $_SESSION["cart_item"][$k]["quantite"] += $_GET["quantite"];
                        $exist = 1;
                    }
                }
                if ($exist == 0) {
                    array_push($_SESSION["cart_item"], array('id' => $_GET["id"], 'nom' => $nom, 'image' => $image, 'type' => $description, 'prix' => $prix, 'quantite' => $_GET["quantite"]));
                }

            } else {
                    array_push($_SESSION["cart_item"], array('id' => $_GET["id"], 'nom' => $nom, 'image' => $image, 'type' => $description, 'prix' => $prix, 'quantite' => $_GET["quantite"]));
            }
        }


    }

    public function getProductFrompanier($id)
    {
        $db = config::getConnexion();
        $req1 = $db->query("SELECT * FROM Panier_favoris WHERE ID_Produit= $id and Nom_Client=1111");
        return $req1->fetchAll();
    }


    public function getProducts()
    {
        $db = config::getConnexion();
        $req1 = $db->query("SELECT * FROM catalogue");
        return $req1->fetchAll();
    }


    public function InsertProductTopanier($id)
    {
        $db = config::getConnexion();
        $req = $db->query("insert into Panier_favoris (Nom_Client,ID_Produit) Values (1111,'" . $id . "')");

    }


    public function GetListFavoris()
    {
        $db = config::getConnexion();
        $req = $db->query("SELECT * FROM Panier_favoris INNER JOIN catalogue ON Panier_favoris.ID_Produit=catalogue.id_article WHERE Nom_Client = 1111");
        return $req->fetchAll();
    }

    public function deletefromFavoris($id)
    {
        $db = config::getConnexion();
        $req = $db->query("DELETE FROM Panier_Favoris WHERE ID_Produit=$id AND Nom_Client=1111");

    }


}