<?php

require_once "./include/config.php";

class modele_chalet {
    public $id; 
    public $nom; 
    public $description;
    public $personnes_max;
    public $prix_haute_saison;
    public $prix_basse_saison;
    public $actif;
    public $promo;
    public $date_inscription;
    public $fk_region;

    public $nom_region;



    public function __construct($id, $nom, $description, $personnes_max, $prix_haute_saison, $prix_basse_saison, $actif, $promo, $date_inscription, $fk_region) {
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
        $this->personnes_max = $personnes_max;
        $this->prix_haute_saison = $prix_haute_saison;
        $this->prix_basse_saison = $prix_basse_saison;
        $this->actif = $actif;
        $this->promo = $promo;
        $this->date_inscription = $date_inscription;
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

        $resultatRequete = $mysqli->query("SELECT id, nom, description, personnes_max, prix_haute_saison, prix_basse_saison, actif, promo, date_inscription, fk_region FROM chalets WHERE actif=1 ORDER BY fk_region, nom");

        foreach ($resultatRequete as $enregistrement) {
            $liste[] = new modele_chalet($enregistrement['id'], $enregistrement['nom'], $enregistrement['description'],$enregistrement['personnes_max'], $enregistrement['prix_haute_saison'], $enregistrement['prix_basse_saison'], $enregistrement['actif'], $enregistrement['promo'], $enregistrement['date_inscription'], $enregistrement['fk_region']);
        }

        return $liste;
    }

    public static function ObtenirTousPromo() {
        $liste = [];
        $mysqli = self::connecter();

        $resultatRequete = $mysqli->query("SELECT id, nom, description, personnes_max, prix_haute_saison, prix_basse_saison, actif, promo, date_inscription, fk_region FROM chalets WHERE promo=1 && actif=1 ORDER BY fk_region, nom");

        foreach ($resultatRequete as $enregistrement) {
            $liste[] = new modele_chalet($enregistrement['id'], $enregistrement['nom'], $enregistrement['description'],$enregistrement['personnes_max'], $enregistrement['prix_haute_saison'], $enregistrement['prix_basse_saison'], $enregistrement['actif'], $enregistrement['promo'], $enregistrement['date_inscription'], $enregistrement['fk_region']);
        }

        return $liste;
    }

    public static function ObtenirTousRegion() {
        $liste = [];
        $mysqli = self::connecter();
        $id_region = $_GET['id'];

        $resultatRequete = $mysqli->query("SELECT id, nom, description, personnes_max, prix_haute_saison, prix_basse_saison, actif, promo, date_inscription, fk_region FROM chalets WHERE fk_region = $id_region ORDER BY nom");



        foreach ($resultatRequete as $enregistrement) {
            $liste[] =  $liste[] = new modele_chalet($enregistrement['id'], $enregistrement['nom'], $enregistrement['description'],$enregistrement['personnes_max'], $enregistrement['prix_haute_saison'], $enregistrement['prix_basse_saison'], $enregistrement['actif'], $enregistrement['promo'], $enregistrement['date_inscription'], $enregistrement['fk_region']);
        }

        return $liste;
    }
    

   
    public static function ObtenirUn($id) {
        $mysqli = self::connecter();

        if ($requete = $mysqli->prepare("SELECT * FROM chalets WHERE id=?")) {   
            $requete->bind_param("i", $id); 

            $requete->execute(); 

            $result = $requete->get_result(); 
            
            if($enregistrement = $result->fetch_assoc()) { 
                $chalet = new modele_chalet($enregistrement['id'], $enregistrement['nom'], $enregistrement['description'],$enregistrement['personnes_max'], $enregistrement['prix_haute_saison'], $enregistrement['prix_basse_saison'], $enregistrement['actif'], $enregistrement['promo'], $enregistrement['date_inscription'], $enregistrement['fk_region']);
            } else {
                
                return null;
            }   
            
            $requete->close();
        } else {
            echo "Une erreur a été détectée dans la requête utilisée : ";  
            echo $mysqli->error;
            return null;
        }

        return $chalet;
    }

    public static function ObtenirUnAleatoire() {
        $mysqli = self::connecter();
    
        if ($requete = $mysqli->prepare("SELECT * FROM chalets WHERE promo=1  && actif=1 ORDER BY RAND() LIMIT 1")) {   
            $requete->execute(); 
    
            $result = $requete->get_result(); 
    
            if($enregistrement = $result->fetch_assoc()) { 
                $chalet = new modele_chalet($enregistrement['id'], $enregistrement['nom'], $enregistrement['description'],$enregistrement['personnes_max'], $enregistrement['prix_haute_saison'], $enregistrement['prix_basse_saison'], $enregistrement['actif'], $enregistrement['promo'], $enregistrement['date_inscription'], $enregistrement['fk_region']);
            } else {
                return null;
            }   
    
            $requete->close();
        } else {
            echo "Une erreur a été détectée dans la requête utilisée : ";  
            echo $mysqli->error;
            return null;
        }
    
        return $chalet;
    }

    
    

   
    public static function ajouter($id, $nom, $description, $personnes_max, $prix_haute_saison, $prix_basse_saison, $actif, $promo, $date_inscription, $fk_region) {
        $message = '';

        $mysqli = self::connecter();
        
       
        if ($requete = $mysqli->prepare("INSERT INTO chalets(id, nom, description, personnes_max, prix_haute_saison, prix_basse_saison, actif, promo, date_inscription, fk_region) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")) {      



        $requete->bind_param("issiiiiisi",$id, $nom, $description, $personnes_max, $prix_haute_saison, $prix_basse_saison, $actif, $promo, $date_inscription, $fk_region);

        if($requete->execute()) { 
            $message = "Chalets ajouté";  
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

   
    public static function editer($id, $nom, $description, $personnes_max, $prix_haute_saison, $prix_basse_saison, $actif, $promo, $date_inscription, $fk_region) {
        $message = '';

        $mysqli = self::connecter();
        
       
        if ($requete = $mysqli->prepare("UPDATE chalets SET nom=?, description=?, personnes_max=?, prix_haute_saison=?, prix_basse_saison=?, actif=?, promo=?, date_inscription=?, fk_region=?  WHERE id=?")) {      

        

        $requete->bind_param("issiiiiisi",$id, $nom, $description, $personnes_max, $prix_haute_saison, $prix_basse_saison, $actif, $promo, $date_inscription, $fk_region);

        if($requete->execute()) { 
            $message = "chalet modifié";  
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
        
       
        if ($requete = $mysqli->prepare("DELETE FROM chalets WHERE id=?")) {      

       
        $requete->bind_param("i", $id);

        if($requete->execute()) { 
            $message = "chalet supprimé"; 
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