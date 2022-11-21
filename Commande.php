<?php
class commande 
{
		private   $idCommande = null;
		private    $dateCommande = null;
		private   $etat= null;
		private  $nb_produits= null;
		private   $id_facture = null;
        function __construct( $idCommande=null,$dateCommande,$etat,$nb_produits,$id_facture)
		{
            $this->idCommande=$idCommande;
			$this->dateCommande=$dateCommande;
			$this->etat=$etat;
			$this->nb_produits=$nb_produits;
			$this->id_facture=$id_facture;
		}
		
		function getidCommande(){
			return $this->idCommande;
		}
		function getdateCommande() {
			return $this->dateCommande;
		}
		public function setdateCommande($dateCommande)
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }
		
		function getetat(){
			return $this->etat;
		}
		public function setetat($etat)
    {
        $this->etat = $etat;

        return $this;
    }
	
		function getnb() {
			return $this->nb_produits;
		}
		public function setnb($nb_produits)
    {
        $this->nb_produits = $nb_produist;

        return $this;
    }
		function getid_facture() {
			return $this->id_facture;
		}
		public function setid_facture($id_facture)
    {
        $this->id_facture = $id_facture;

        return $this;
    }
	}
