<?php
include_once('Livre.php');
class Auteur
{
    private string $_nom;
    private  string $_prenom;
    private DateTime $_datedenaissance;
    private array $livres;
 
//creation de constructeur
public function __construct( string $nom,string $prenom,string $datedenaissance){
        
    $this->_nom=$nom;
    $this->_prenom=$prenom;
    $this->_datedenaissance= neW DateTime($datedenaissance);
    $this->livres=[];
}
// création de geteur
public function getNom(){
    return $this->_nom;
}
public function getPrénom(){                                                                                                                                                                                                                                     
        return $this->_prénom;
    }
    public function getDateDeNaissance(){                                                                                                                                                                                                                                     
        return $this->_datedenaissance;
    }
    public function getLivres(){                                                                                                                                                                                                                                     
        return $this->_livres;
    }
   
 // construction de seteur
 public function setNom($nom){
    $this->_nom=$nom;
 } 
public function setPrenom($prenom){
    $this->_prenom=$prenom;
} 
public function setDateDeNaissance($datedenaissance){
    $this->_datedenaissance=$datedenaissance;

}
// fonction personalisé  calculant l'âge de la personne
public function calculerAge(){
    $datedenaissance= $this->getDateDeNaissance();
    $date= new DateTime();
    $interval= $datedenaissance->diff($date);

    return $interval->format('%Y');
}
public function ajouterLivre(Livre $livre){
    array_push($this->livres,$livre);
}
  public function afficherLivres(){
      $result="<h1>Livres de $this</h1><ul>";
      foreach($this->livres as $livre){
    $result.="<li>$livre</li>";
      }
      $result.="</ul>";
      return $result;
  }
public function __toString(){
    return $this->_nom;
}

} // fin autheur class