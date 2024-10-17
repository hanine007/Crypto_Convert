<?php 
Class Crypto {

}
Class Convert extends Crypto{
    //proprties
    public  $Cuurent;
    // constructeur
    public function __construct($Cuurent){
        $this->Cuurent=$Cuurent;// construct for the class is caled automaticly  when we create a object 
    }
    //methods
    public function convert ($value){
        $code=$this->Cuurent;//get the crypto selected in the object created get the prop of the object 
        $url=("https://cex.io/api/ticker/$code/USD");// the url of the api
        $json=file_get_contents($url); //get the content 
       echo"$json";
        $data=json_decode($json);//get only the last  info in the json 
        $bitcoinvalue=$data->last;
       return $value*$bitcoinvalue; //the result that we will return 
    
    }


}
//cretae object
