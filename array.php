 <?php
    //declare array
    $arr = array('HTML','JS','PHP');
    $arr2 = ['address1' => 'HTML','address2' => 'JS','address3' => 'PHP'];

    //Add element to array
    $arr2['address4'] = 'NodeJS';
    $arr2[] = 'C';
    $arr2[] = 'C++';
    array_push($arr,'NodeJs','C','C++','C#');

    //print array
    echo '<pre>';
    print_r($arr);
    echo '</pre>';

    //read array
    $rhein = $arr2['address4'];
    echo $rhein;

?>