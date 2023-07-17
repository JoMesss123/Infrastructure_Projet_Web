<?php

require_once "./include/config.php";

class modele_activite {
    public $id; 
    public $nom_activite; 
    public $description_activite;
    public $hiver_activite;
    public $ete_activite;
    
    public $fk_region;

    public $nom_region;



    public function __construct($id, $nom_activite, $description_activite, $hiver_activite, $ete_activite, $fk_region) {
        $this->id = $id;
        $this->nom_activite = $nom_activite;
        $this->description_activite = $description_activite;
        $this->hiver_activite = $hiver_activite;
        $this->ete_activite = $ete_activite;
        $this->fk_region = $fk_region;
        $this->nom_region = $this->getNomRegion($fk_region);

    }


    private function getNomRegion($fk_region) {      
       $mysqli = self::connecter();
        if ($requete = $mysqli->prepare("SELECT nom FROM regions WHERE id = ?")) {
            $requete->bind_param("i", $fk_region);

            $requete->execute(); 

        $result = $requete->get_result();

        if ($enregistrement = $result->fetch_assoc()) {
             return $enregistrement['nom'];
            }
                }
        
                
        
               
        return '';
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

        $resultatRequete = $mysqli->query("SELECT id, nom_activite, description_activite, hiver_activite, ete_activite, fk_region FROM activites ORDER BY fk_region, nom_activite");

        foreach ($resultatRequete as $enregistrement) {
            $liste[] = new modele_activite($enregistrement['id'], $enregistrement['nom_activite'], $enregistrement['description_activite'],$enregistrement['hiver_activite'], $enregistrement['ete_activite'], $enregistrement['fk_region']);
        }

        return $liste;
    }

   

    public static function ObtenirTousRegion() {
        $liste = [];
        $mysqli = self::connecter();

        $resultatRequete = $mysqli->query("SELECT id, nom_activite, description_activite, hiver_activite, ete_activite, fk_region  FROM activites  WHERE id=? ORDER BY nom");

        foreach ($resultatRequete as $enregistrement) {
            $liste[] = new modele_activite($enregistrement['id'], $enregistrement['nom_activite'], $enregistrement['description_activite'],$enregistrement['hiver_activite'], $enregistrement['ete_activite'], $enregistrement['fk_region']);
        }

        return $liste;
    }

   
    public static function ObtenirUn($id) {
        $mysqli = self::connecter();

        if ($requete = $mysqli->prepare("SELECT * FROM activites WHERE id=?")) {   
            $requete->bind_param("i", $id); 

            $requete->execute(); 

            $result = $requete->get_result(); 
            
            if($enregistrement = $result->fetch_assoc()) { 
                $activite = new modele_activite($enregistrement['id'], $enregistrement['nom_activite'], $enregistrement['description_activite'],$enregistrement['hiver_activite'], $enregistrement['ete_activite'], $enregistrement['fk_region']);
            } else {
                
                return null;
            }   
            
            $requete->close();
        } else {
            echo "Une erreur a été détectée dans la requête utilisée : ";  
            echo $mysqli->error;
            return null;
        }

        return $activite;
    }

    public static function ObtenirUnAleatoire() {
        $mysqli = self::connecter();
    
        if ($requete = $mysqli->prepare("SELECT * FROM activites  ORDER BY RAND() LIMIT 1")) {   
            $requete->execute(); 
    
            $result = $requete->get_result(); 
    
            if($enregistrement = $result->fetch_assoc()) { 
                $activite = new modele_activite($enregistrement['id'], $enregistrement['nom_activite'], $enregistrement['description_activite'],$enregistrement['hiver_activite'], $enregistrement['ete_activite'], $enregistrement['fk_region']);
            } else {
                return null;
            }   
    
            $requete->close();
        } else {
            echo "Une erreur a été détectée dans la requête utilisée : ";  
            echo $mysqli->error;
            return null;
        }
    
        return $activite;
    }

    
    

   
    public static function ajouter( $nom_activite, $description_activite, $hiver_activite, $ete_activite, $fk_region) {
        $message = '';

        $mysqli = self::connecter();
        
       
        if ($requete = $mysqli->prepare("INSERT INTO activites( nom_activite, description_activite, hiver_activite, ete_activite,  fk_region) VALUES(?, ?, ?, ?, ?, ?)")) {      



        $requete->bind_param("ssiiii", $nom_activite, $description_activite, $hiver_activite, $ete_activite, $fk_region, $id);

        if($requete->execute()) { 
            $message = "Activitée ajouté";  
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

   
    public static function editer($id, $nom_activite, $description_activite, $hiver_activite, $ete_activite, $fk_region) {
        $message = '';

        $mysqli = self::connecter();
        
       
        if ($requete = $mysqli->prepare("UPDATE activites SET nom_activite=?, description_activite=?, hiver_activite=?, ete_activite=?, fk_region=?  WHERE id=?")) {      

        

        $requete->bind_param("issiii",$id, $nom_activite, $description_activite, $hiver_activite, $ete_activite, $fk_region);

        if($requete->execute()) { 
            $message = "activitée modifié";  
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
        
       
        if ($requete = $mysqli->prepare("DELETE FROM activites WHERE id=?")) {      

       
        $requete->bind_param("i", $id);

        if($requete->execute()) { 
            $message = "activitée supprimé"; 
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