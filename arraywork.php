<?php
//
       $origin = array(
        array(1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
        array(1, 1, 0, 1, 1, 0, 0, 0, 0, 0),
        array(0, 0, 0, 1, 1, 0, 0, 0, 0, 0),
        array(0, 0, 0, 0, 0, 1, 1, 1, 0, 0),
        array(1, 1, 1, 1, 1, 0, 0, 0, 0, 0),
        array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
        array(1, 1, 1, 0, 1, 1, 1, 1, 1, 1),
        array(1, 0, 1, 0, 1, 0, 1, 1, 1, 1),
        array(1, 0, 1, 1, 1, 0, 1, 1, 1, 1),
        array(1, 1, 1, 1, 1, 0, 0, 0, 0, 1)
   
    );
    //預備陣列
        $array= array(
        array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),

        array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),

        array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),

        array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),

        array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),

        array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),

        array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),

        array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),

        array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),

        array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0)
    );
    
    //最大陣列
    $MAXarray= array(
        array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),

        array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),

        array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),

        array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),

        array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),

        array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),

        array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),

        array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),

        array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),

        array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0)
    );
    //最大相連數
   $MAXn=0;
    // function add(){
    for($i=0;$i<=10;$i++){
        for($j=0;$j<=10;$j++){
            //判斷最大陣列裡是否有值
            if($origin[$i][$j] && !$MAXarray[$i][$j]){
                $array[$i][$j] = $origin[$i][$j];
                $ai=$i;
                $aj=$j;
                $num=1;
                
                $n =seach($ai,$aj)+1;
                
             //如果陣列數>最大陣列數 則取代
             
              if($MAXn < $n){
                    $MAXarray =$array;
                    $MAXn=$n;
                }
                //預設陣列歸零
                $array = array(
                    array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            
                    array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            
                    array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            
                    array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            
                    array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            
                    array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            
                    array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            
                    array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            
                    array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            
                    array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0)
                );
                }
            }
        }
//印出最大陣列&個數
          foreach($MAXarray as $a){
                    echo "<br>";
                    foreach($a as $v){
                        echo $v;
                    }
          }   echo "<br>總共個數",$MAXn;
    
    //找到1  丟值給預設陣列 && num+1
    function seach($ai,$aj){
        global $origin,$array;
      
            if($origin[$ai+1][$aj] && !$array[$ai+1][$aj]){
                $array[$ai+1][$aj] = $origin[$ai+1][$aj];
                $num++;
                $num += seach($ai+1,$aj);
                 
            };
            if($origin[$ai][$aj+1] && !$array[$ai][$aj+1]){
                $array[$ai][$aj+1] = $origin[$ai][$aj+1];
                $num++;
                $num +=seach($ai,$aj+1);
                 
            };
            if($origin[$ai-1][$aj] && !$array[$ai-1][$aj]){
                $array[$ai-1][$aj] = $origin[$ai-1][$aj];
                $num++;
                $num +=seach($ai-1,$aj);
            };
            if($origin[$ai][$aj-1] && !$array[$ai][$aj-1]){
                $array[$ai][$aj-1] = $origin[$ai][$aj-1];
                $num++;
                $num +=seach($ai,$aj-1);
            };
            return $num;
    }
  
?>