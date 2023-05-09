<?php
class Magasin
{
    private $employes;
    private $nom;
    private $adresse;
    private $cp;
    private $ville;
    private $repas;

    public function __construct()
    {
        $this->employes = [];
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setCp($cp)
    {
        $this->cp = $cp;
    }

    public function getCp()
    {
        return $this->cp;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    public function getVille()
    {
        return $this->ville;
    }
    
    public function setRepas($repas)
    {
        $this->repas = $repas;
    }

    public function getRepas()
    {
        return $this->repas;
    }

    public function allocateEmployee(Employe $employe)
    {
        if (!$this->isEmployeeAllocated($employe)) {
            $this->employes[] = $employe;
            $employe->setMagasin($this);
        }
    }

    public function deallocateEmployee(Employe $employe)
    {
        $key = array_search($employe, $this->employes);
        if ($key !== false) {
            unset($this->employes[$key]);
            $employe->setMagasin(null);
        }
    }

    public function isEmployeeAllocated(Employe $employee)
    {
        return in_array($employee, $this->employes, true);
    }

    public function getAllocatedEmployees()
    {
        return $this->employes;
    }
}

?>