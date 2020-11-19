<?php

declare(strict_types = 1);

/**
 * @autor Barbora Kozena
 */
class UserBarboraKozena{

    private $povyseniBarboraKozena; 
    private $poznamkaBarboraKozena;

    protected $vypalataBarboraKozena;
    protected $projektBarboraKozena;
    protected $emailBarboraKozena;

    public $jmenoBarboraKozena = "Celaena";
    public $prijmeniBarboraKozena = "Sardothien";
    public $vekBarboraKozena = 16;
    public $pohlaviBarboraKozena = "Žena";
    public $poziceBarboraKozena = "zabiják";

    //konstruktor tridy
    public function __construct(){

    }
    
    /**
     * Nastavi hodnotu povyseni 
     * @param bool $value
     */
    public function setPovyseniBarboraKozena(bool $value){
        $this->povyseniBarboraKozena = $value;
    }
    
    /**
     * Nastavi poznamku uzivateli
     * @param string $value
     */
    public function setPoznamkaBarboraKozena(string $value){
        $this->poznamkaBarboraKozena = $value;
    }
    
    /**
     * Ziska jmeno uzivatele
     * @return string
     */
    public function getJmenoBarboraKozena(): string{
        return $this->jmenoBarboraKozena;
    }
    
    /**
     * Ziska prijmeni uzivatele
     * @return string
     */
    public function getPrijmeniBarboraKozena(): string{
        return $this->prijmeniBarboraKozena;
    }
    
    /**
     * Ziska vek uzivatele
     * @return string
     */
    public function getVekBarboraKozena(): string{
        return $this->jmenoBarboraKozena . " je " . $this->vekBarboraKozena . " let";
    }

    /**
     * Ziska pohlavi uzivatele
     * @return string
     */
    public function getPohlaviBarboraKozena(): string{
        return $this->pohlaviBarboraKozena; 
    }

    /**
     * Ziska pozici uzivatele
     * @return string
     */
    public function getPoziceBarboraKozena(): string{
        return $this->poziceBarboraKozena;
    }

}

//vytvoreni objektu z tridy
$user = new UserBarboraKozena();

//nastaveni hodnot privatnich promennych
$user->setPovyseniBarboraKozena(FALSE);
$user->setPoznamkaBarboraKozena("Pracuje dobře. Ovšem má špatnou morálku");

echo($user->getJmenoBarboraKozena());
echo(" ");
echo($user->getPrijmeniBarboraKozena());
echo("<br />");
echo($user->getVekBarboraKozena());
echo("<br />");
echo($user->getPohlaviBarboraKozena());
echo("<br />");
echo($user->getPoziceBarboraKozena());

var_dump($user);

?>
