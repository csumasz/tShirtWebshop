<?php
 
namespace App\Http\Controllers;

 
class rendelesController extends Controller
{
   
    public function show()
    {

    // get contents of raktar.csv  to a array

        $raktar = "../resources/csv/raktar.csv";
        $handle = fopen($raktar, "r");
        $termekek = array();
        while (($buffer = stream_get_line($handle, 1024*1024, "\n")) !== false) {
            array_push($termekek, $buffer);
        }
        for ($i=0; $i<count($termekek); $i++){
            $termekek[$i] = explode(";", $termekek[$i]);
        }
       
      
    // get contents of rendeles.csv to a array
        $rendelesadatok = "../resources/csv/rendeles.csv";
        $handle = fopen($rendelesadatok, "r");
        $rendelesek = array();
        while (($users = stream_get_line($handle, 1024*1024, "\n")) !== false) {
                array_push($rendelesek, $users);
            }
        for ($i=0; $i<count($rendelesek); $i++){
            $rendelesek[$i] = explode(";", $rendelesek[$i]);
        }
        
    
    //order processing
        $rendeles = array();
        $rendelesszam = array();
        $i = 0;
        while($i<count($rendelesek)){
            
            for($j=0; $j<count($rendelesek); $j++){
                
                if($rendelesek[$j][2]==($i+1) || $rendelesek[$j][1]==($i+1)){
                    array_push($rendelesszam, $rendelesek[$j]);
                }
            }
            if(!empty($rendelesszam)){
                array_push($rendeles, $rendelesszam);
            }
            $rendelesszam = array ();
            $i++;
        }

    //quantity control and orders into groups
        $waitOrders= array();
        $sendOrders= array();
        
        for($i=0; $i<count($rendeles); $i++){//loop over $rendeles
            for($j=0; $j<count($rendeles[$i]); $j++){//loop over element of $rendeles
                $adat = $rendeles[$i][$j];  
                for($k=0; $k<count($termekek); $k++){
                    if($adat[2] == $termekek[$k][0]){
                        if((int)$termekek[$k][3] > (int)$adat[3]){
                            $sendOrders[$i] = $rendeles[$i];//If there are enough products in stock, you place the order in $sendorders
                            $termekek[$k][3] = (int)$termekek[$k][3] - (int)$adat[3];
                        }
                        else{
                            unset($sendOrders[$i]);//If any of the ordered items are not in stock, the order is taken from $sendorders
                            $waitOrders[$i] = $rendeles[$i];
                        }
                        
                        
                    }
                }
            }
        }
        
    // create levelek.csv file
        $emails = fopen("../resources/csv/levelek.csv", "w");
        

        foreach($sendOrders as $order){
            $saveSendOrder = $order[0][3];
            $sendOrderValue = 0;
            foreach($order as $ordered){
                foreach($termekek as $termek){
                    if($ordered[2] == $termek[0]){
                        $sendOrderValue += (int)$ordered[3] * (int)$termek[2];
                    }
                }
            }
            $saveSendOrder = preg_replace('/[\s]+/', ' ', $saveSendOrder)."A rendelését két napon belül szállítjuk. A rendelés értéke: ".$sendOrderValue." Ft";
            fputs($emails,  $saveSendOrder."\n");
        }
        foreach($waitOrders as $order){
            $saveWaitOrder = $order[0][3];
            $saveWaitOrder =  preg_replace('/[\s]+/', ' ', $saveWaitOrder)."A rendelése függő állapotba került. Hamarosan értesítjük a szállítás időpontjáról";
            fputs($emails, $saveWaitOrder."\n"); 
        }

        fclose($emails);

    //create beszerzes.csv file
        $purchasedTitel = fopen("../resources/csv/beszerezes.csv", "w");
       
        foreach($waitOrders as $waits){
            foreach($waits as $waitsTitel){
                for($k=0; $k<count($termekek); $k++){
                    if($waitsTitel[2] == $termekek[$k][0]){
                        $termekek[$k][3] = (int)$termekek[$k][3] - (int)$waitsTitel[3];
                    }
                }  
            }
        }

        foreach($termekek as $termek){
            if($termek[3] < 0){
                fputs($purchasedTitel, $termek[0].';'.abs($termek[3])."\n");
            }
        }

        fclose($purchasedTitel);

    }
}