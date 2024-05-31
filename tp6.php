<?php
class Compte {
   private $montantet;
   private $intérêt;

   public function __construct($montantet,$intérêt) {
    $this-> montantet = $montantet;
    $this-> intérêt = $intérêt;
   } 
   function interet (){
    $this -> montantet = $this -> montantet * (1 + $this -> intérêt/100);
        
    }
   
    function get_montantet (){
        return $this -> montantet;

    }

}
$income = new Compte(200,20);
$newincome = new Compte(1000,2);
for ($i =1 ; $i<10 ; $i++ ){
    $income ->interet();
    $newincome ->interet();

}
echo'<p> Valeur du compte = ' . $income->get_montantet() . ' dirhams </p>';
echo'<p> Valeur du compte = ' . $newincome->get_montantet() . ' dirhams </p>';




