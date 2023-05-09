<?php
class Employe
{
    private $nom;
    private $prenom;
    private $dateEmbauche;
    private $fonction;
    private $salaire;
    private $service;
    private $magasin;
    private $cheque;
    private $enfant;

    public function setNom($monNom)
    {
        $this->nom = $monNom;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setPrenom($monPrenom)
    {
        $this->prenom = $monPrenom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setDateEmbauche($maDateEmbauche)
    {
        $this->dateEmbauche = $maDateEmbauche;
    }

    public function getDateEmbauche()
    {
        return $this->dateEmbauche;
    }

    public function setFonction($maFonction)
    {
        $this->fonction = $maFonction;
    }

    public function getFonction()
    {
        return $this->fonction;
    }

    public function setSalaire($monSalaire)
    {
        $this->salaire = $monSalaire;
    }

    public function getSalaire()
    {
        return $this->salaire;
    }

    public function setService($monService)
    {
        $this->service = $monService;
    }

    public function getService()
    {
        return $this->service;
    }

    public function setMagasin(?Magasin $magasin)
    {
        $this->magasin = $magasin;
    }

    public function getMagasin()
    {
        return $this->magasin;
    }

    public function setCheque($cheque)
    {
        $this->cheque = $cheque;
    }

    public function getCheque()
    {
        return $this->cheque;
    }

    public function setEnfant($enfant)
    {
        $this->enfant = $enfant;
    }

    public function getEnfant()
    {
        return $this->enfant;
    }

    public function calculateEmploymentDuration()
    {
        $dateEmbauche = new DateTime($this->dateEmbauche);
        $today = new DateTime();
        $diff = $dateEmbauche->diff($today);
        return $diff->format('%y années, %m mois, %d jours');
    }

    public function calculatePrimeAnnuelle()
    {
        $dateEmbauche = new DateTime($this->dateEmbauche);
        $today = new DateTime();
        $diff = $dateEmbauche->diff($today);
        $anneeAnciennete = $diff->format('%y');
        $bonus = 0.05 + (0.02 * intval($anneeAnciennete));
        $primeAnnuelle = $this->salaire * $bonus;
        return $primeAnnuelle;
    }

    public function versement($prime)
    {
        $today = new DateTime();
        $today = $today->format('d/m');
        if ($today == "09/05") {
            echo "Un versement de " . $prime . "€ à été effectué pour " . $this->nom . " " . $this->prenom . "<br><br>";
        }
    }

    public function eligibleResto()
    {
        if ($this->getMagasin()->getRepas()) {
            echo "Le magasin dispose d'un service de restauration<br><br>";
        } else {
            echo "Le magasin ne dispose pas d'un service de restauration, l'employé a le droit à des tickets <br><br>";
        }
    }

    public function eligibleChequeVacances()
    {
        $dateEmbauche = new DateTime($this->dateEmbauche);
        $today = new DateTime();
        $diff = $dateEmbauche->diff($today);
        $y = $diff->format('%y');
        if ($y >= 1) {
            echo "L'employé est eligible pour des chèques vacances<br><br>";
        }
    }

    public function chequeNoel(?array $enfant)
    {
        $elligible_cheque = "Non<br><br>";
        if ($enfant != NULL) {
            $total = 0;
            foreach ($enfant as $detail_en) {
                if ($detail_en >= 0 && $detail_en <= 10) {
                    $elligible_cheque = "Oui";
                    $total = $total + 20;
                } else if ($detail_en >= 11 && $detail_en <= 15) {
                    $elligible_cheque = "Oui";
                    $total = $total + 30;
                } else if ($detail_en >= 16 && $detail_en <= 18) {
                    $elligible_cheque = "Oui";
                    $total = $total + 50;
                }
            }
        }
        echo "Elligibilité chèque Noël : ".$elligible_cheque;
        if(isset($total)){
            echo "<br>Total chèque noël : " . $total . "€<br><br>";
        }
    }
}
