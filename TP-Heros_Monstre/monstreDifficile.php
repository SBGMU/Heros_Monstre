<?php
session_start();

	class monstreDifficile extends monstreFacile {
	
	const degatsSort = 5;
	
	public function Attaque(joueur $joueur){
	    parent::attaque($joueur);
	    $joueur->subitDegats($this->sortMagique());
	}

	private function sortMagique(): int{
        $valeur = $this->de->LanceLeDe();
        if ($valeur == 6){
            return 0;
        }
		return $valeur;
    }
}
?>