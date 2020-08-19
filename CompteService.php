<?php
header('Content-Type: application/json');
require_once "bootstrap.php";
require_once "./src/entities/Compte.php";
require_once "./src/entities/TypeCompte.php";
require_once "./src/entities/FraisBancaire.php";
require_once "./src/entities/TypeFrais.php";
require_once "./src/entities/ClientPhysique.php";
require_once "./src/entities/TypeClient.php";
require_once "./src/entities/ClientMoral.php";
$param="1234";
if(isset($_GET['param']))
{
    $param=$_GET['param'];
    $cmpte =$entityManager->getRepository('Compte')->findBy(array('numero' => $param));

    $retour["success"]=true;
    $retour["message"]="Liste des comptes";
    $retour["data"]["id"]=$cmpte[0]->getId();
    $retour["data"]["numero"]=$cmpte[0]->getNumero();
    $retour["data"]["cleRipe"]=$cmpte[0]->getCleRip();
    $retour["data"]["solde"]=$cmpte[0]->getSolde();
    $retour["data"]["etat"]=$cmpte[0]->getEtat();
    $retour["data"]["dateCreation"]=$cmpte[0]->getDateCreation();
    $retour["data"]["dateFermeture"]=$cmpte[0]->getDateFermeture();
    $retour["data"]["dateFermTempo"]=$cmpte[0]->getDateFerTempo();
    $retour["data"]["type"]=$cmpte[0]->getTypeCompte()->getLibelle();
    $retour["data"]["dateFermTempo"]=$cmpte[0]->getFraiBancaire();
    $retour["data"]["dateReouverture"]=$cmpte[0]->getDateReouverture();

    if($cmpte[0]->getClientPhysique()!=null)
    {
        $tabCP["id"]=$cmpte[0]->getClientPhysique()->getId();
        $tabCP["nom"]=$cmpte[0]->getClientPhysique()->getNom();
        $tabCP["prenom"]=$cmpte[0]->getClientPhysique()->getPrenom();
        $tabCP["telephone"]=$cmpte[0]->getClientPhysique()->getTelephone();
        $tabCP["salaire"]=$cmpte[0]->getClientPhysique()->getSalaire();
        $tabCP["adresse"]=$cmpte[0]->getClientPhysique()->getAdresse();
        $tabCP["email"]=$cmpte[0]->getClientPhysique()->getEmail();
        $tabCP["profession"]=$cmpte[0]->getClientPhysique()->getProfession();
        $retour["data"]["clientPhysique"]=$tabCP;
    }
    else
    {
        $tabCM["id"]=$cmpte[0]->getClientMoral()->getId();
        $tabCM["nom"]=$cmpte[0]->getClientMoral()->getNom();
        $tabCM["raisonSocial"]=$cmpte[0]->getClientMoral()->getRaisonsocial();
        $tabCM["adresse"]=$cmpte[0]->getClientMoral()->getAdresse();
        $tabCM["ninea"]=$cmpte[0]->getClientMoral()->getNumIdentifiant();
        $tabCM["telephone"]=$cmpte[0]->getClientMoral()->getTelephone();
        $tabCM["email"]=$cmpte[0]->getClientMoral()->getEmail();
        $retour["data"]["clientPhysique"]=$tabCM;
    }

    $result=json_encode($retour);
    echo $result;

}
