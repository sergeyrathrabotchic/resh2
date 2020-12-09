<?php
	$str_browser_language = !empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? strtok(strip_tags($_SERVER['HTTP_ACCEPT_LANGUAGE']), ',') : '';
	$str_browser_language = !empty($_GET['language']) ? $_GET['language'] : $str_browser_language;
	switch (substr($str_browser_language, 0,2))
	{
		case 'de':
			$str_language = 'de';
			break;
		case 'en':
			$str_language = 'en';
			break;
		default:
			$str_language = 'en';
	}
    
	$arr_available_languages = array();
	$arr_available_languages[] = array('str_name' => 'English', 'str_token' => 'en');
	$arr_available_languages[] = array('str_name' => 'Deutsch', 'str_token' => 'de');
    
	$str_available_languages = (string) '';
	foreach ($arr_available_languages as $arr_language)
	{
		if ($arr_language['str_token'] !== $str_language)
		{
			$str_available_languages .= '<a href="'.strip_tags($_SERVER['PHP_SELF']).'?language='.$arr_language['str_token'].'" lang="'.$arr_language['str_token'].'" xml:lang="'.$arr_language['str_token'].'" hreflang="'.$arr_language['str_token'].'">'.$arr_language['str_name'].'</a> | ';
		}
	}
	$str_available_languages = substr($str_available_languages, 0, -3);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="<?php echo $str_language; ?>" xml:lang="<?php echo $str_language; ?>">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>MAMP PRO</title>
<style type="text/css">
    body {
        font-family: Arial, Helvetica, sans-serif;
        font-size: .9em;
        color: #000000;
        background-color: #FFFFFF;
        margin: 0;
        padding: 10px 20px 20px 20px;
    }

    samp {
        font-size: 1.3em;
    }

    a {
        color: #000000;
        background-color: #FFFFFF;
    }

    sup a {
        text-decoration: none;
    }

    hr {
        margin-left: 90px;
        height: 1px;
        color: #000000;
        background-color: #000000;
        border: none;
    }

    #logo {
        margin-bottom: 10px;
        margin-left: 28px;
    }

    .text {
        width: 80%;
        margin-left: 90px;
        line-height: 140%;
    }
</style>
</head>

<body>
    <p><img src="MAMP-PRO-Logo.png" id="logo" alt="MAMP PRO Logo" width="250" height="49" /></p>
<?php
//function resh2($arg){

$arr = "abcdeef";
//jabjcdel
//abcdeef
$arr = str_split($arr);
$arr2 = array();
//echo "<pre>"; print_r($arr); echo "</pre>";

//echo "<pre>"; print_r($arr); echo "</pre>";
    function p($arg){
    $b = "нет";
    for($i = 1, $a = 0; $i<count($arg) && $a==0 ;$i++){
        if ($a == 0){
        if($arg[0]<$arg[$i]){
            $a = 1;
        } else if ($arg[0]>$arg[$i]){
            $a = 0;
        } 
        }
    }
    if ($a == 0){
        return $arg[0];
    } else {
        return $b;
    }
    }


    
    ///////////////////////////////////2
        function pp($arg,$arg2){
            
            $b = "нет";
            $a = 0;
    
            for($i = 0; $i<$arg2 && $a==0;$i++){ 
                if ($a == 0){
                if($arg[$arg2] < $arg[$i]){
                    $a = 1;
                }else if ($arg[$arg2]>$arg[$i]){
                    $a = 0;
                } 
                } 
            }
            if ($a == 0){
                for($i2 = $arg2+1; $i2<count($arg) && $a==0;$i2++){
                    
                    if ($a == 0){
                    if($arg[$arg2] < $arg[$i2]){
                        $a = 1;
                    }else if ($arg[$arg2]>$arg[$i2]){
                        $a = 0;
                    } 
                    } 
                }
            }
    
            if ($a == 0){
                return $arg[$arg2];
            } else {
                return $b;
            }
        
            }
    //////////////////////////////////3
    
            function ppp($arg,$arg2){
                $b = "нет";
                for($i = 0, $a = 0; $i<$arg2 && $a==0 ;$i++){
                if ($a == 0){
                if($arg[$arg2] < $arg[$i]){
                $a = 1;
                }else if ($arg[$arg2]>$arg[$i]){
                $a = 0;
                }
    
                }
    
                }
    
    
    
                if ($a == 0){
                    return $arg[$arg2];
                } else {
                    return $b;
                }
                }
///////////////////////////////////////////////////4














function f(&$arg1,&$arg2){
    $M = array();
    if(1==count($arg1)){
        array_push($M, 1);
    }

    for($i = 1,$proverka2=1; $i<count($arg1) && $proverka2==1 ;$i++){
        


        if($arg1[0] == $arg1[$i]){

        array_push($M, $i);
        $proverka2=0;
        //echo "<pre>"; print_r($proverka2); echo "</pre>";



    } else if ($i+1 == count($arg1) && $proverka2==1) {

        array_push($M, $i+1);
    } 


    }





    //echo "<pre>"; print_r($M); echo "</pre>";
    
    $a = $M[0];


    $string = array();
    if(count($arg2)==0){

        array_push($arg2, 0);
        $arg2[0] = array();
        if($a=="a"){
            $a=1;
        }
        array_push($arg2[0], $a);

        for ($i2 = 0; $i2 <$a;$i2++){

        array_push($string, $arg1[$i2]);

        }
        //$string = implode($string);
        array_push($arg2[0], $string);

    } else {
        for ($i3 = 0,$proverka=0; $i3 <count($arg2) && $proverka==0;$i3++){
        if($i3+1==count($arg2)){

        array_push($arg2, $i3+1);
        
        $arg2[$i3+1] = array();
        if($a=="a"){
            $a=1;
        }
        array_push($arg2[$i3+1], $a);
        for ($i4 = 0; $i4 <$a;$i4++){

            array_push($string, $arg1[$i4]);
    
            }
            //$string = implode($string);
            array_push($arg2[$i3+1], $string);
            $proverka=1;
        }
        }
    }

    unset($arg1[0]);
    $arg1 = array_values($arg1);



    }
///////////////////////////////////////////////////////////////////// 

    $r = count($arr);

    for($i=0;$i<$r;$i++){
    f($arr,$arr2);
    }
    $arr3 = array();
    $arr4 = array();
    for($i1=0;$i1<count($arr2);$i1++){
        array_push($arr3, $arr2[$i1]);
    }
    //echo "<pre>"; print_r($arr2); echo "</pre>";
    function fun(&$arg2,$arg3,$arg4){
    for($i3=0;$i3<count($arg2);$i3++){
       // $i3=0;

 
        for( $i1=0, $a =$arg2[$i3][0], $proverka = 1 ; $i1<$arg2[$i3][0] && $proverka == 1 /*&& 1<$arr2[$i3][0]*/; $i1++ ){
    
            f($arg3[$i3][1],$arg4);
    
            if ($i1>0){
            $a = $a-1;
            }
    

            if ( $a == $arg4[$i1][0]){
                $proverka = 1;
                if($a == 1 && $arg2[$i3][0]==1 && $i1==0){
                    $arg4 = array();
                    $proverka = 0;
                }
            } else {
                $proverka = 0;
                $a = $a-$arg4[$i1][0];

                for($i2=0;$i2<$a;$i2++){
                $b = $arg2[$i3][0]-($i2+1);
                unset($arg2[$i3][1][$b]);
                $arg2[$i3][1] = array_values($arg2[$i3][1]);
                }
                $arg2[$i3][0]=$arg2[$i3][0]-$a;
                $arg4 = array();

    
            }
    
            
        }
        $arg4 = array();
        }
        }
        fun($arr2,$arr3,$arr4);
        //echo "<pre>"; print_r( $arr4); echo "</pre>";

        //echo "<pre>"; print_r($arr2); echo "</pre>";


        $arr5 = array();
        for ($i5 = 0; $i5 <count($arr2);$i5++){
            array_push($arr5, $arr2[$i5][0]);
        }


        /*function jh($h){
            $h=5;

        }*/
    $a="нет";
    function podscet(&$arg1,&$arg2){
        for ($i9 = 0; $i9 <count($arg2) && $arg1=="нет";$i9++){
            if($i9 == 0){
                $arg1 = p($arg2);
            } else if ($i9 > 0 && $i9 < (count($arg2)-1)){
                $arg1 = pp($arg2,$i9);
            } else {
                $arg1 = ppp($arg2,$i9);
            }
        }
    }
    podscet($a,$arr5);

    //echo "<pre>"; print_r($arr2); echo "</pre>";
    //echo "<pre>"; print_r( $a); echo "</pre>";
    //echo "<pre>"; print_r( $arr2); echo "</pre>";


//}
/////////////////////////////////////////Вводим тут
/////////////////////////////////////////
//////////////////////////////////////////
///////////////////////////////////////////
/////////////////////////////////////////
//resh2("jabjcdel");
function funl($f){


     $arr = $f;

     $arr = str_split($arr);
     $arr2 = array();



    $r = count($arr);

    for($i=0;$i<$r;$i++){
    f($arr,$arr2);
    }
    $arr3 = array();
    $arr4 = array();
    for($i1=0;$i1<count($arr2);$i1++){
        array_push($arr3, $arr2[$i1]);
    }
    fun($arr2,$arr3,$arr4);

    $arr5 = array();
        for ($i5 = 0; $i5 <count($arr2);$i5++){
            array_push($arr5, $arr2[$i5][0]);
        }
    $a="нет";
    podscet($a,$arr5);
    echo "<pre>"; print_r( $a); echo "</pre>";
    }


    funl("abcdeef");



?>
</body>
</html>
