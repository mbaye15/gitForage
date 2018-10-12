<?php
class chefvillage
{
	private $pdo;
    
    public $Id;
    public $CIN;
    public $Prenom;
    public $Nom;
    public $Tel;
    
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

			$stm = $this->pdo->prepare("SELECT * FROM chefvillage");
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
			          ->prepare("SELECT * FROM chefvillage WHERE Id = ?");
			          

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
			            ->prepare("DELETE FROM chefvillage WHERE Id = ?");			          

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
			$sql = "UPDATE chefvillage SET 
						CIN        = ?, 
						Prenom	= ?, 
						Nom        = ?, 
						Tel        = ?
  						
				    WHERE Id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->CIN, 
					$data->Prenom, 
				    	$data->Nom, 
                        	$data->Tel,                        
                           $data->Id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Ajouter(chefvillage $data)
	{
		try 
		{
		$sql = "INSERT INTO chefvillage (CIN,Nom,Tel,IdVillage) 
		        VALUES (?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->CIN,
					$data->Prenom, 
					$data->Nom, 
                    		$data->Tel
                             )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}