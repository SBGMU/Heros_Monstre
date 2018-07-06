<?php
session_start();

	class joueur{
		private $de;
		public $ptsDeVie;

		public function __construct($ptsDeVie){
			$this->de = new de();
			$this->ptsDeVie = $ptsDeVie;
		}

		public function estVivant($ptsDeVie){
			return $this->ptsDeVie > 0;
		}

		public function attaque(monstreFacile $monstre){
			$lanceJoueur  = lanceleDe();
			$lanceMonstre = $monstre->lanceleDe();
			if($lanceJoueur >= $lanceMonstre){
				$monstre->subitDegats();
			}
		}

		public function lanceleDe($de){
			return $this->de->lanceleDe();
		}

		private function bouclierFonctionne():bool{
			return $this->de->lanceleDe() <= 2; 
		}

		public function subitsDegats(int $degats){
			if(!$bouclierFonctionne()){
				$ptsDeVie -= $degats;
			}
		}
		
		public function getPtsDeVie(){
			return $this->ptsDeVie;
		}

		private function setPtsDeVie(){
			$this->ptsDeVie=$ptsDeVie
		}
	}
?>