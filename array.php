 <?php   
    

    // echo $arr2['address1']['name']['lastName'].'<br>';
    // echo $arr2['address1']['email'].'<br>';

    // $arr2['address1']['name']['firstName'] = 'Unux';
    // echo $arr2['address1']['name']['firstName'].'<br>';

    $arr = array(
        [
            'first',
            'second',
            'third'
        ],
        'JS',
        'PHP'
    );

        if(!empty($arr)){
            for($i = 0;$i < count($arr);$i++){
                if(is_array($arr[$i])){
                    if(!empty($arr[$i])){
                        for($j=0; $j < count($arr[$i]); $j++){
                            echo $arr[$i][$j]."<br>";
                        }
                    }
                }
                echo $arr[$i].'<br>';
            }
        };

        $arr2 = [
            'address1' => [
                'name' => [
                    'firstName' => 'Jin',
                    'lastName' => 'Air'
                ],
                'email' => 'jinAir@gmail.com'
            ],
            'address2' => [
                'name' => 'Henry',
                'email' => 'henry@gmail.com'
            ],
            'address3' => 'PHP'
        ];
        
        if(!empty($arr2)){
            foreach($arr2 as $item){
                if (is_array($item)){
                    if(!empty($item)){
                        foreach($item as $subArr){
                            if(is_array($subArr)){
                                if(!empty($subArr)){
                                    foreach($subArr as $subArr2){
                                        echo $subArr2.'<br>';
                                    }
                                }
                            }
                            else {
                                echo $subArr. "<br>";
                            }
                        }
                    }
                }
                else {
                    echo $item. "<br>";
                }
            }
        }
?>