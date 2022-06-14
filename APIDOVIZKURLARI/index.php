<?php
class currency
{
    public $url="https://finans.truncgil.com/today.json";
    
    public $jsonveri=file_get_contents("https://finans.truncgil.com/today.json");
    public $data=json_decode($jsonveri,true);
    public function fgc(){
        
        return $this->data["USD"]["Alış"];
    }

    public function get($int){
            return $this->data[$int];
    }

}

$currency=new currency();
echo $currency->fgc(); 

