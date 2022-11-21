	<?php
include '../config.php';
	//require_once "../model/Commande.php";
	include_once '../Model/Commande.php';

	class CommandeC {
		
		/*function ajouterCommande($idCommande){
			$sql="INSERT INTO commande (idCommande,dateCommande,etat,nb_produits,id_facture) 
			VALUES (:idCommande,:dateCommande,:etat, :nb_produits, :id_facture)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
				
					'idCommande' => $commande->getidCommande(),
					'dateCommande' => $commande->getdateCommande(),
					'etat' => $commande->getetat(),
					'nb_produits' => $commande->getnb(),
                    'id_facture' => $commande->getid_facture()

				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}*/
		function ajouterCommande($commande)
    {
        $sql="INSERT INTO fast_saver.commande (idCommande,dateCommande,etat,nb_produits,id_facture) 
			VALUES (:idCommande,:dateCommande,:etat, :nb_produits, :id_facture)";

        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
				'idCommande' => $commande->getidCommande(),
					'dateCommande' => $commande->getdateCommande(),
					'etat' => $commande->getetat(),
					'nb_produits' => $commande->getnb(),
                    'id_facture' => $commande->getid_facture()

				]);	
             
           /* $commande = $this->getCommande($idCommande);
            echo $commande['nbPlaces'] - 1;
            $query = $db->prepare(
                'UPDATE course SET nbPlaces = ' . $course['nbPlaces'] - 1
                    . ' WHERE idCourse= ' . $idCourse
            );*/
            $query->execute();
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
        function afficherCommande(){
			
			$sql="SELECT * FROM fast_saver.commande";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
        function supprimerCommande($idCommande){
			$sql="DELETE FROM fast_saver.commande WHERE idCommande= :idCommande";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':idCommande',$idCommande);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
        function modifierCommande($commande, $idCommande){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE fast_saver.commande SET 
						dateCommande = :dateCommande,
						etat = :etat,
						id_produits = :id_produits,
                        id_facture= :id_facture
					WHERE idCommande = :idCommande'
				);
				$query->execute([
					'dateCommande' => $commande->getdateCommande(),
					'etat' => $commande->getetat(),
					'id_produits' => $commande->getnb(),
                    'id_facture' => $commande->getid_facture(),
					'idCommande' => $idCommande
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
    }

        ?>