<?php
class Personnage 
{
    private $nom;
    private $prenom;
    private $age;
    private $sexe;

    public function setNom($monNom) {
        $this->nom = $monNom;
    }

    public function getNom() {
        echo $this->nom;
    }

    public function setPrenom($monPrenom) {
        $this->prenom = $monPrenom;
    }

    public function getPrenom() {
        echo $this->prenom;
    }

    public function setAge($monAge) {
        $this->age = $monAge;
    }

    public function getAge() {
        echo $this->age;
    }

    public function setSexe($monSexe) {
        $this->sexe = $monSexe;
    }

    public function getSexe() {
        echo $this->sexe;
    }
}
?>