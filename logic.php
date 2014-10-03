
    <?php 
//foreach( $_POST as $val){    
//echo $val;
//}
if (!empty($_POST)){
$lengthOfPassword= $_POST["pLength"];
$numPos=-1;
$symbolPos=-1;
    if(isset($_POST['inclNumber']) && $_POST['inclNumber']==true){
        $numPos=rand(0,$lengthOfPassword-1);
    }
    if (isset($_POST['inclSymbol']) && $_POST['inclSymbol']==true){
           $symbolPos=rand(0,$lengthOfPassword-1);
            while ($symbolPos==$numPos){
            $symbolPos=rand(0,$lengthOfPassword-1);
                
            }
    }

$wordList= array("Coffee", "Pencil", "Spoon", "Houseplant", "Purple", "Green", "Red", "Noisey", "Snake", "Llama", "wolf", "Eagle", "Stupid", "Idiotic", "Lazy", "Insane", "Astonishing", "Passport", "Bearded", "Beast", "Mode", "Calculator", "Speaker", "Delicate", "Tickets", "Smashing", "Squealing", "Pig", "Mushroom" );
$chosenList = array(rand(0, count($wordList))); /* seed chosenList with  an initial word choice */

$specialCharsList = array("!","@","#","$","%","^","&","*","(",")","-","=","+","_","~");
$numbersList = array(1,2,3,4,5,6,7,8,9,0);

for ($i =0; $i < $lengthOfPassword-1; $i++){
                                
                                $tempRand= rand(0, count($wordList)-1);
                                   while(in_array($tempRand,$chosenList)){
                                        $tempRand=rand(0, count($wordList)-1);
                                   }
                                   
                                
                                
                                   
                             $chosenList[]=$tempRand;       
                                }
    


   

$passwordString="";
for ($j =0; $j < count($chosenList); $j++){
    if ($j==$numPos){
        $passwordString.= rand(0, count($numbersList)-1);
    }
    else if ($j== $symbolPos){
        $passwordString.=$specialCharsList[rand(0, count($specialCharsList)-1)];   
    }
    else{
    $passwordString.=$wordList
        [$chosenList
         [$j]];
}
    $_POST['inclNumber']=false;
    $_POST['inclSymbol']=false;
    
}
  //  echo $passwordString;
    
}
    
                                                   ?>
