<?php
class compteur
{
	private $pdo;
    
    public $Id;
    public $Etat;
    public $ConsTotale; 

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

			$stm = $this->pdo->prepare("SELECT * FROM compteur");
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
			          ->prepare("SELECT * FROM compteur WHERE Id = ?");
			          

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
			            ->prepare("DELETE FROM compteur WHERE Id = ?");			          

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
			$sql = "UPDATE compteur SET 
						Etat        = ?, 
						ConsTotale  = ?
						
				    WHERE Id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->Etat, 
                        $data->ConsTotale,
                        $data->Id                 
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Ajouter(compteur $data)
	{
		try 
		{
		$sql = "INSERT INTO compteur (Etat,ConsTotale) 
		        VALUES (?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->Etat, 
                    $data->ConsTotale
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}