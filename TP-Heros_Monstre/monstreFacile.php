<?php
session_start();

	class monstreFacile extends monstre{
		const DEGATS = 10;
		protected $de;
		private $estVivant;

		public function __construct()
		{
		    $this->de = new De();
		    $this->estVivant = true;
		}

		public function setEstVivant($estVivant)
		{
		    $this->estVivant = $estVivant;
		}

		public function subitDegats()
		{
		    $this->estVivant = false;
		}

		public function LanceLeDe()
		{
		    return $this->de->LanceLeDe();
		}

		public function Attaque(Joueur $joueur)
		{
		    $lanceMonstre = $this->LanceLeDe();
		    $lanceJoueur = $joueur->LanceLeDe();
		    if($lanceMonstre > $lanceJoueur){
		        $joueur->subitDegats(DEGATS);
		    }
		}
	}
?>