<?php

include('classes/employe.class.php');
include('classes/magasin.class.php');

//Magasin 1
$m1 = new Magasin();
$m1->setNom("Magasin 1");
$m1->setRepas(0);

//Magasin 2
$m2 = new Magasin();
$m2->setNom("Magasin 2");
$m2->setRepas(1);

//Employe 1
$e1 = new Employe();
$e1->setSalaire("2200");
$e1->setDateEmbauche('2000-11-07');
$e1->setNom("Employé");
$e1->setPrenom("numéro 1");
$e1->setMagasin($m1);
$e1->setEnfant(["10","15","20"]);

//Affichage Employe 1
echo "<hr>";
echo "<br>";
echo $e1->getNom()." ".$e1->getPrenom()." est en poste depuis ".$e1->calculateEmploymentDuration()." dans le magasin ".$e1->getMagasin()->getNom()."<br>";
echo "Son salaire est de ".$e1->getSalaire()."€ et le montant de sa prime annuelle est de ".$e1->calculatePrimeAnnuelle()."€<br><br>";
$e1->versement($e1->calculatePrimeAnnuelle());
$e1->eligibleResto();
$e1->eligibleChequeVacances();
$e1->chequeNoel($e1->getEnfant());
echo "<hr>";
echo "<br>";

//Employe 2
$e2 = new Employe();
$e2->setSalaire("1800");
$e2->setDateEmbauche('2014-09-08');
$e2->setNom("Employé");
$e2->setPrenom("numéro 2");
$e2->setMagasin($m1);
$e2->setEnfant(["3"]);

//Affichage Employe 2
echo $e2->getNom()." ".$e2->getPrenom()." est en poste depuis ".$e2->calculateEmploymentDuration()." dans le magasin ".$e2->getMagasin()->getNom()."<br>";
echo "Son salaire est de ".$e2->getSalaire()."€ et le montant de sa prime annuelle est de ".$e2->calculatePrimeAnnuelle()."€<br><br>";
$e2->versement($e2->calculatePrimeAnnuelle());
$e2->eligibleResto();
$e2->eligibleChequeVacances();
$e2->chequeNoel($e2->getEnfant());
echo "<hr>";
echo "<br>";

//Employe 3
$e3 = new Employe();
$e3->setSalaire("2000");
$e3->setDateEmbauche('1999-07-28');
$e3->setNom("Employé");
$e3->setPrenom("numéro 3");
$e3->setMagasin($m2);

//Affichage Employe 3
echo $e3->getNom()." ".$e3->getPrenom()." est en poste depuis ".$e3->calculateEmploymentDuration()." dans le magasin ".$e3->getMagasin()->getNom()."<br>";
echo "Son salaire est de ".$e3->getSalaire()."€ et le montant de sa prime annuelle est de ".$e3->calculatePrimeAnnuelle()."€<br><br>";
$e3->versement($e3->calculatePrimeAnnuelle());
$e3->eligibleResto();
$e3->eligibleChequeVacances();
$e3->chequeNoel($e3->getEnfant());
echo "<hr>";
echo "<br>";

//Employe 4
$e4 = new Employe();
$e4->setSalaire("3200");
$e4->setDateEmbauche('2019-04-16');
$e4->setNom("Employé");
$e4->setPrenom("numéro 4");
$e4->setMagasin($m2);
$e4->setEnfant(["17","16"]);

//Affichage Employe 4
echo $e4->getNom()." ".$e4->getPrenom()." est en poste depuis ".$e4->calculateEmploymentDuration()." dans le magasin ".$e4->getMagasin()->getNom()."<br>";
echo "Son salaire est de ".$e4->getSalaire()."€ et le montant de sa prime annuelle est de ".$e4->calculatePrimeAnnuelle()."€<br><br>";
$e4->versement($e4->calculatePrimeAnnuelle());
$e1->eligibleResto();
$e4->eligibleChequeVacances();
$e4->chequeNoel($e4->getEnfant());
echo "<hr>";
echo "<br>";

//Employe 5
$e5 = new Employe();
$e5->setSalaire("1700");
$e5->setDateEmbauche('1989-02-14');
$e5->setNom("Employé");
$e5->setPrenom("numéro 5");
$e5->setMagasin($m2);
$e1->setEnfant(["30"]);

//Affichage Employe 5
echo $e5->getNom()." ".$e5->getPrenom()." est en poste depuis ".$e5->calculateEmploymentDuration()." dans le magasin ".$e5->getMagasin()->getNom()."<br>";
echo "Son salaire est de ".$e5->getSalaire()."€ et le montant de sa prime annuelle est de ".$e5->calculatePrimeAnnuelle()."€<br><br>";
$e5->versement($e5->calculatePrimeAnnuelle());
$e5->eligibleResto();
$e5->eligibleChequeVacances();
$e5->chequeNoel($e5->getEnfant());
echo "<hr>";
echo "<br>";

?>