<?php

require_once "./include/config.php";

class modele_authentificationAdmin {
    public $id; 
    public $administrateur; 
    public $mot_de_passe;
    public $courriel;

  
    public function __construct($id, $administrateur, $mot_de_passe, $courriel) {
        $this->id = $id;
        $this->administrateur = $administrateur;
        $this->mot_de_passe = $mot_de_passe;        
        $this->courriel = $courriel;
    }

    static function connecter() {
        
        $mysqli = new mysqli(Dd::$host, Dd::$username, Dd::$password, Dd::$database);

       
        if ($mysqli -> connect_errno) {
            echo "Échec de connexion à la base de données MySQL: " . $mysqli -> connect_error;   
            exit();
        } 

        return $mysqli;
    }

  
    public static function ObtenirUn($administrateur) {
        $mysqli = self::connecter();

        if ($requete = $mysqli->prepare("SELECT * FROM administrateur WHERE administrateur=?")) {  
            $requete->bind_param("s", $administrateur); 

            $requete->execute(); 

            $result = $requete->get_result(); 
            
            if($enregistrement = $result->fetch_assoc()) { 
                $administrateur = new modele_authentification($enregistrement['id'], $enregistrement['administrateur'], $enregistrement['mot_de_passe'], $enregistrement['courriel']);
            } else {
                
                return null;
            }   
            
            $requete->close(); 
        } else {
            echo "Une erreur a été détectée dans la requête utilisée : ";   
            echo $mysqli->error;
            return null;
        }

        return $administrateur;
    }

    public static function ajouter($administrateur, $mot_de_passe, $courriel) {
        $message = '';

        $mysqli = self::connecter();
        
       
        if ($requete = $mysqli->prepare("INSERT INTO administrateur(administrateur, mot_de_passe,  courriel) VALUES(?, ?, ?)")) {      

        /************************* ATTENTION **************************/
        /* On ne fait présentement peu de validation des données.     */
        /* On revient sur cette partie dans les prochaines semaines!! */
        /**************************************************************/

        // Pour débogage :
        //echo $mot_de_passe . "<br>";
        //echo password_hash("test", PASSWORD_DEFAULT) . "<br>";

        $mot_de_passe_crypte = password_hash($mot_de_passe, PASSWORD_DEFAULT);

        $requete->bind_param("sss", $administrateur, $mot_de_passe_crypte, $courriel);

        if($requete->execute()) { 
            $message = "administrateur ajouté";  
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
}

?>