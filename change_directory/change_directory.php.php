<?php
class Path {
    //proioetà
    public $currentPath;

    function __construct($path) {
        $this->currentPath = $path;
    } 

    public function cd($newPath) {
        //conteggio posizioni del path da scalare
        $innerCounter = 0;
        //nuovo path
        $strOut= '';
        // dividiamo i paths in array
        $newPath = explode('/',$newPath);
        $oldPath = explode('/', $this->currentPath);
        //vediamo quante posizioni sono presenti ai aosstituiscono con il nuovo path
        foreach($newPath as $str) {
            // aumento il conteggio di innerCounter se nel nuovo path è richiesto di tornare indietro
            if($str == '..') $innerCounter++; 
        }
        //riscriviamo il vecchio path fino al punto interessato
        $oldLength = count($oldPath);        
            for($i=0;$i<($oldLength - $innerCounter);$i++)
                $strOut .= $oldPath[$i]."/";
        //aggiungioamo al path la nuova destinazione
        $newLength = count($newPath);        
            for($i=0;$i<$newLength;$i++){
                if($newPath[$i] !='..'){
                    $strOut = $strOut.$newPath[$i].'';
                }
            } 
        //
        $this->currentPath = $strOut;    
        return $this;  
    }

}
//stampiamo il nuovo path
$path = new Path('/a/b/c/d');
echo $path->cd('../x')->currentPath;
?>


