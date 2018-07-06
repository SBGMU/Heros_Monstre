<?php
class de{

    public function __construct()
    {
        $this->random = new Random();
    }

    public function lanceLeDe()
    {
        return $this->random->getValeur();
    }
}
?>