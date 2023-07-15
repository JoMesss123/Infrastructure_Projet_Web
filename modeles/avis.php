<?php

require_once "./include/config.php";

class modele_avis {
    public $id; 
    public $nom; 
    public $prenom;
    public $date_avis;
    public $description;    
    public $id_activite;
    public $nom_activite;



    public function __construct($id, $nom, $prenom, $date_avis, $description, $id_activite) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_avis = $date_avis;
        $this->description = $description;
        $this->id_activite = $id_activite;
        $this->nom_activite = $this->getNomActivite($id_activite);

    }


    private function getNomActivite($id_activite) {      
       $mysqli = self::connecter();
        if ($requete = $mysqli->prepare("SELECT nom_activite FROM activites WHERE id = ?")) {
            $requete->bind_param("i", $id_activite);

            $requete->execute(); 

        $result = $requete->get_result();

        if ($enregistrement = $result->fetch_assoc()) {
             return $enregistrement['nom_activite'];
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

        $resultatRequete = $mysqli->query("SELECT id, nom, prenom, date_avis, description, id_activite FROM avis ORDER BY  id_activite");

        foreach ($resultatRequete as $enregistrement) {
            $liste[] = new modele_avis($enregistrement['id'], $enregistrement['nom'], $enregistrement['prenom'],$enregistrement['date_avis'], $enregistrement['description'], $enregistrement['id_activite']);
        }

        return $liste;
    }

   

    public static function ObtenirTousActivite() {
        $liste = [];
        $mysqli = self::connecter();

        $resultatRequete = $mysqli->query("SELECT id, nom, prenom, date_avis, description, id_activite FROM avis  WHERE id_activite=? ORDER BY nom");

        foreach ($resultatRequete as $enregistrement) {
            $liste[] = new modele_avis($enregistrement['id'], $enregistrement['nom'], $enregistrement['prenom'],$enregistrement['date_avis'], $enregistrement['description'], $enregistrement['id_activite']);
        }

        return $liste;
    }

   
    public static function ObtenirUn($id) {
        $mysqli = self::connecter();

        if ($requete = $mysqli->prepare("SELECT * FROM avis WHERE id=?")) {   
            $requete->bind_param("i", $id); 

            $requete->execute(); 

            $result = $requete->get_result(); 
            
            if($enregistrement = $result->fetch_assoc()) { 
                $avis = new modele_avis($enregistrement['id'], $enregistrement['nom'], $enregistrement['prenom'],$enregistrement['date_avis'], $enregistrement['description'], $enregistrement['id_activite']);
            } else {
                
                return null;
            }   
            
            $requete->close();
        } else {
            echo "Une erreur a été détectée dans la requête utilisée : ";  
            echo $mysqli->error;
            return null;
        }

        return $avis;
    }

    public static function ObtenirUnAleatoire() {
        $mysqli = self::connecter();
    
        if ($requete = $mysqli->prepare("SELECT * FROM avis  ORDER BY RAND() LIMIT 1")) {   
            $requete->execute(); 
    
            $result = $requete->get_result(); 
    
            if($enregistrement = $result->fetch_assoc()) { 
                $avis = new modele_avis($enregistrement['id'], $enregistrement['nom'], $enregistrement['prenom'],$enregistrement['date_avis'], $enregistrement['description'], $enregistrement['id_activite']);
            } else {
                return null;
            }   
    
            $requete->close();
        } else {
            echo "Une erreur a été détectée dans la requête utilisée : ";  
            echo $mysqli->error;
            return null;
        }
    
        return $avis;
    }

    
    

   
    public static function ajouter($id, $nom, $prenom, $date_avis, $description, $id_activite) {
        $message = '';

        $mysqli = self::connecter();
        
       
        if ($requete = $mysqli->prepare("INSERT INTO avis(id, nom, prenom, date_avis, description, id_activite) VALUES(?, ?, ?, ?, ?, ?)")) {      



        $requete->bind_param("issssi",$id, $nom, $prenom, $date_avis, $description, $id_activite);

        if($requete->execute()) { 
            $message = "Avis ajouté";  
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

   
    public static function editer($id, $nom, $prenom, $date_avis, $description, $id_activite) {
        $message = '';

        $mysqli = self::connecter();
        
       
        if ($requete = $mysqli->prepare("UPDATE avis SET nom=?, prenom=?, date_avis=?, dexcription=?, id_activite=?  WHERE id=?")) {      

        

        $requete->bind_param("issssi",$id, $nom, $prenom, $date_avis, $description, $id_activite);

        if($requete->execute()) { 
            $message = "avis modifié";  
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
        
       
        if ($requete = $mysqli->prepare("DELETE FROM avis WHERE id=?")) {      

       
        $requete->bind_param("i", $id);

        if($requete->execute()) { 
            $message = "avis supprimé"; 
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