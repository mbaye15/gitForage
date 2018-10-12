<?php
class abonnement
{
	private $pdo;
    
    public $Id;
    public $Numero;
    public $DateAbonnement;
    public $Descriptif;
    public $IdClient;
    public $IdCompteur;  

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Lister()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM abonnement");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtenir($Id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM abonnement WHERE Id = ?");
			          

			$stm->execute(array($Id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Supprimer($Id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM abonnement WHERE Id = ?");			          

			$stm->execute(array($Id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Modifier($data)
	{
		try 
		{
			$sql = "UPDATE abonnement SET 

						Numero        = ?, 
						DateAbonnement        = ?, 
						Descriptif        = ?,
                        IdClient  = ?,
						IdCompteur= ?
						
				    WHERE Id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				  $data->Numero, 
				  $data->DateAbonnement, 
                  $data->Descriptif,                        
                  $data->IdClient,
				  $data->IdCompteur,
                  $data->Id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Ajouter(abonnement $data)
	{
		try 
		{
		$sql = "INSERT INTO abonnement (Numero,DateAbonnement,Descriptif,IdClient,IdCompteur) 
		        VALUES (?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				 array(
			    $data->Numero,
			    $data->DateAbonnement, 
                $data->Descriptif,
                $data->IdClient,
				$data->IdCompteur
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}