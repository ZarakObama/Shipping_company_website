<?php

class cot_mar {

	public $idcm;
	public $id_user;
	public $typecota;
	public $danger;
	public $un;
	public $classe;
	public $incoterm;
	public $transport;
	public $prise_charge;
	public $livraison;
  public $info;
  public $adresse_prise_charge;
  public $code_postal_charge;
  public $adresse_livraison;
	public $code_postal_livraison;
  public $state;




	public function __construct($idcm,$id_user,$typecota,$danger,$un,$classe,$incoterm,$transport,$prise_charge,$livraison,$info,$adresse_prise_charge,$code_postal_charge,$adresse_livraison,$code_postal_livraison,$state)
	{

			$this->idcm=$idcm;
			$this->id_user=$id_user;
			$this->typecota=$typecota;
		  $this->danger=$danger;
			$this->un=$un;
			$this->classe=$classe;
			$this->incoterm=$incoterm;
			$this->transport=$transport;
			$this->prise_charge=$prise_charge;
			$this->livraison=$livraison;
			$this->info=$info;
			$this->adresse_prise_charge=$adresse_prise_charge;
			$this->code_postal_charge=$code_postal_charge;
			$this->adresse_livraison=$adresse_livraison;
			$this->code_postal_livraison=$code_postal_livraison;
			$this->state=$state;



	}

	public function getidcm(){
		return $this->idcm;
	}
	public function getid_user(){
		return $this->id_user;
	}
	public function gettypecota(){
		return $this->typecota;
	}
	public function getdanger(){
		return $this->danger;
	}
	public function getun(){
		return $this->un;
	}
	public function getclasse(){
		return $this->classe;
	}
	public function getincoterm(){
		return $this->incoterm;
	}
	public function gettransport(){
		return $this->transport;
	}
	public function getprise_charge(){
		return $this->prise_charge;
	}
	public function getlivraison(){
		return $this->livraison;
	}
	public function getinfo(){
		return $this->info;
	}

	public function getadresse_prise_charge(){
		return $this->adresse_prise_charge;
	}
	public function getcode_postal_charge(){
		return $this->code_postal_charge;
	}

	public function getadresse_livraison(){
		return $this->adresse_livraison;
	}
	public function getcode_postal_livraison(){
		return $this->code_postal_livraison;
	}
	public function getstate(){
		return $this->state;
	}

	/*setters*/

}
?>
