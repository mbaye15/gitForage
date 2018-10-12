<?php
class village
{
	private $pdo;
    
    public $Id;
    public $Nom;
    public $IdChefVillage;

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

			$stm = $this->pdo->prepare("SELECT * FROM village");
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
			          ->prepare("SELECT * FROM village Id = ?");
			          

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
			            ->prepare("DELETE FROM village WHERE Id = ?");			          

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
			$sql = "UPDATE village SET 
						Nom          = ?, 
                        IdChefVillage        = ?,
						
				    WHERE Id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->Nom,                         
                        $data->IdChefVillage,
                        $data->Id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Ajouter(village $data)
	{
		try 
		{
		$sql = "INSERT INTO client (Nom,IdChefVillage) 
		        VALUES (?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->Nom, 
                    $data->IdChefVillage
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}