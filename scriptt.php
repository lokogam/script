<?php 

$data = $_POST['data'];
echo $data.'<br/>';

while($data != 1){

if (($data % 2) == 0) {
    //Es un número par
    $data = $data/2; 
    // echo 'Es un número par <br/>';
    echo $data.'<br/>';
    if (($data % 2) == 0) {
        //Es un número par
        $data = $data/2; 
        // echo 'Es un número par <br/>';
        echo $data.'<br/>';
    } else {
        //Es un número impar
        $data = $data*3;
        $data = $data+1;
        // echo 'Es un número impar <br/>';
        echo $data.'<br/>';
    }
} else {
    //Es un número impar
    $data = $data*3;
    $data = $data+1;
    // echo 'Es un número impar <br/>';
    echo $data.'<br/>';
    if (($data % 2) == 0) {
        //Es un número par
        $data = $data/2; 
        // echo 'Es un número par <br/>';
        echo $data.'<br/>';
        
    } else {
        //Es un número impar
        $data = $data*3;
        $data = $data+1;
        // echo 'Es un número impar <br/>';
        echo $data.'<br/>';
    }
}
}

?>