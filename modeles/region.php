<?php

require_once "./include/config.php";

class modele_region {
    public $id; 
    public $nom; 
   


    public function __construct($id, $nom) {
        $this->id = $id;
        $this->nom = $nom;
        

    }    







    static function connecter() {
        
        $mysqli = new mysqli(Dd::$host, Dd::$username, Dd::$password, Dd::$database);

     
        if ($mysqli -> connect_errno) {
            echo "Échec de connexion à la base de données MySQL: " . $mysqli -> connect_error;   
            exit();
        } 

        return $mysqli;
    }

    
    public static function ObtenirTous() {
        $liste = [];
        $mysqli = self::connecter();

        $resultatRequete = $mysqli->query("SELECT id, nom FROM regions ORDER BY  nom");

        foreach ($resultatRequete as $enregistrement) {
            $liste[] = new modele_region($enregistrement['id'], $enregistrement['nom']);
        }

        return $liste;
    }

   

    public static function ObtenirTousRegion() {
        $liste = [];
        $mysqli = self::connecter();
        $id_region = $_GET['id'];

        $resultatRequete = $mysqli->query("SELECT id, nom  FROM regions  WHERE fk_region = $id_region ORDER BY nom");



        foreach ($resultatRequete as $enregistrement) {
            $liste[] = new modele_region($enregistrement['id'], $enregistrement['nom']);
        }

        return $liste;
    }

   
    public static function ObtenirUn($id) {
        $mysqli = self::connecter();

        if ($requete = $mysqli->prepare("SELECT * FROM regions WHERE id=?")) {   
            $requete->bind_param("i", $id); 

            $requete->execute(); 

            $result = $requete->get_result(); 
            
            if($enregistrement = $result->fetch_assoc()) { 
                $region = new modele_region($enregistrement['id'], $enregistrement['nom']);
            } else {
                
                return null;
            }   
            
            $requete->close();
        } else {
            echo "Une erreur a été détectée dans la requête utilisée : ";  
            echo $mysqli->error;
            return null;
        }

        return $region;
    }

    public static function ObtenirUnAleatoire() {
        $mysqli = self::connecter();
    
        if ($requete = $mysqli->prepare("SELECT * FROM regions  ORDER BY RAND() LIMIT 1")) {   
            $requete->execute(); 
    
            $result = $requete->get_result(); 
    
            if($enregistrement = $result->fetch_assoc()) { 
                $region = new modele_region($enregistrement['id'], $enregistrement['nom']);
            } else {
                return null;
            }   
    
            $requete->close();
        } else {
            echo "Une erreur a été détectée dans la requête utilisée : ";  
            echo $mysqli->error;
            return null;
        }
    
        return $region;
    }

    
    

   
    public static function ajouter($id, $nom) {
        $message = '';

        $mysqli = self::connecter();
        
       
        if ($requete = $mysqli->prepare("INSERT INTO regions(id, nom) VALUES(?, ?)")) {      



        $requete->bind_param("is",$id, $nom);

        if($requete->execute()) { 
            $message = "Régions ajouté";  
        } else {
            $message =  "Une erreur est survenue lors de l'ajout: " . $requete->error; 
        }

        $requete->close(); 

        } else  {
            echo "Une erreur a été détectée dans la requête utilisée : ";   
            echo $mysqli->error;
            echo "<br>";
            exit();
        }

        return $message;
    }

   
    public static function editer($id, $nom) {
        $message = '';

        $mysqli = self::connecter();
        
       
        if ($requete = $mysqli->prepare("UPDATE regions SET nom=? WHERE id=?")) {      

        

        $requete->bind_param("is",$id, $nom);

        if($requete->execute()) { 
            $message = "Région modifié";  
        } else {
            $message =  "Une erreur est survenue lors de l'édition: " . $requete->error;  
        }

        $requete->close(); 

        } else  {
            echo "Une erreur a été détectée dans la requête utilisée : ";
            echo $mysqli->error;
            echo "<br>";
            exit();
        }

        return $message;
    }

    
    public static function supprimer($id) {
        $message = '';

        $mysqli = self::connecter();
        
       
        if ($requete = $mysqli->prepare("DELETE FROM regions WHERE id=?")) {      

       
        $requete->bind_param("i", $id);

        if($requete->execute()) { 
            $message = "Régions supprimé"; 
        } else {
            $message =  "Une erreur est survenue lors de la suppression: " . $requete->error;  
        }

        $requete->close(); 

        } else  {
            echo "Une erreur a été détectée dans la requête utilisée : ";
            echo $mysqli->error;
            echo "<br>";
            exit();
        }

        return $message;
    }
}

?>