
<?php
// L'objet c'est un unité symbolique souvent appartenant au monde réel qui contient  des informations  manipulés  dans le  programme
//la classe est une description des caractéristiques d'un ou de plusieurs objets. Chaque objet créé à partir de cette classe est une instance de la classe en question.
include_once('Auteur.php');
class Livre //ensemble des comportements et des proprietés liés à le livre
{
    private string $_titre;
    private int $_nombredespages;
    private int $_prix;
    private DateTime $_anneedeparution;
    private Auteur $_auteur;// objet de la cklasse auteur
//Une méthode est une suite d'instructions qui manipule les caractéristiques et l'état d'un objet.
    //création de constructeur
    public function __construct(Auteur $_auteur,string $_titre,int $_nombredespages, string $_anneedeparution , int $_prix){
        $this->_auteur=$_auteur;
        $this->_titre=$_titre;
        $this->_nombredespages=$_nombredespages;
        $this->_prix=$_prix;
        $this->_anneedeparution= new DateTime($_anneedeparution) ;
        $this->_auteur->ajouterLivre($this);

    }
    // création de geteur; permet acceder à la valeur de propriété
    public function getTitre(){
        return $this->_titre;
    }
    public function getPrix(){
            return $this->_prix;
    }
    public function getAnneDeParution(){
            return $this->_anneedeparution;
    }
    public function getNombreDesPages(){
            return $this->_nombredespages;
    }

    //création de setteur; permet modifier la valeur de proprieté
   public function setTitre($titre){
       $this->_titre=$titre;
   } 
   public function setNombreDesPages($nombredespages){
    $this->_nombredespages=$nombredespages;
    }  
    public function setPrix($prix){
    $this->_prix=$prix;
    } 
    public function setAnneeDeParution($anneedeparution){
        $this->_anneedeparution=$anneedeparution;
    }   
    public function __toString(){
        //return $this->_titre." ".$this->_nombredespages." ".$this->_anneedeparution." ".$this->_prix;
       return $this->_titre;
    }
    
}