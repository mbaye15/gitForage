<?php
class profil
{
	private $pdo;
    
    public $Id;
    public $CIN;
    public $Nom;
    public $Tel;
    public $IdVillage;  

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

			$stm = $this->pdo->prepare("SELECT * FROM profil");
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
			          ->prepare("SELECT * FROM profil WHERE Id = ?");
			          

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
			            ->prepare("DELETE FROM profil WHERE Id = ?");			          

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
			$sql = "UPDATE profil SET 
						CIN        = ?, 
						Nom        = ?, 
						Tel        = ?,
                        IdVillage  = ?
						
				    WHERE Id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->CIN, 
				    	$data->Nom, 
                        $data->Tel,                        
                        $data->IdVillage,
                        $data->Id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Ajouter(profil $data)
	{
		try 
		{
		$sql = "INSERT INTO profil (CIN,Nom,Tel,IdVillage) 
		        VALUES (?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->CIN,
					$data->Nom, 
                    $data->Tel,
                    $data->IdVillage
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}