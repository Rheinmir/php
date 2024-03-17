 <?php
    //declare array
    $arr = array('HTML','JS','PHP');
    $arr2 = ['address1' => 'HTML','address2' => 'JS','address3' => 'PHP'];

    //Add element to array
    $arr2['address4'] = 'NodeJS';
    $arr2[] = 'C';
    $arr2[] = 'C++';
    array_push($arr,'NodeJs','C','C++','C#');

  

    // //read array
    // $rhein = $arr2['address4'];
    // echo $rhein.'<br>';

    //using for loop
    // if(!empty($arr)){
    //     for($i=0; $i < count($arr); $i++){
    //         echo $arr[$i] .'<br>';

    //     }
    // }

    //using foreach with non-consecutive indexes in array
    if(!empty($arr2)){
        foreach($arr2 as $key => $value){
            echo $value .'<br>';
        }
    }
    //replace array

    $arr[0] = 'HTMLNEW';
    $arr[2] = 'Python';
    //delete array
    unset($arr2['address1']);

      //print array
      echo '<pre>';
      print_r($arr2);
      echo '</pre>';
?>