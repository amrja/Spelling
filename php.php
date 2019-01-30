
<!DOCTYPE html>

<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Amr</title>
</head>
<link rel="stylesheet" href="css.css">


<body>

<br><br><br>
<center><table border='1' width='500' >
    <tr>
        <th width='100' > IN LINE </th>
        <th width='100' >  Number of characters per line </th>
        <th width='100' >  Number of vowels in line </th>
        <th width='100' > Number of words in the line </th>
        <th width='100' > Words that contain vowel </th>
    </tr>

<?php


$Amr = $_POST['text'];

 $c = strlen("$Amr") ; # lengh of arr



 $amr= strtolower("$Amr");# small letters
 $amr=trim("$amr"); # delete spac first&finsh just
$amr=nl2br("$amr"); # delete moer spac inc

$al=substr_count("$amr","a");
$ul=substr_count("$amr","u");
$il=substr_count("$amr","i");
$ol=substr_count("$amr","o");
$el=substr_count("$amr","e");
$sum=$al+$ul+$il+$ol+$el;

$exp= explode(".",$amr);#فصل السطر

# echo"$exp[0] <br>";
# echo"$exp[1] <br>";

# echo"$c";

$exp1= explode(" ",$amr);

$cc=0;
$ccc=0;

while($cc != count( $exp))
{
  $a= strlen($exp[$cc]);
    $al1=substr_count("$exp[$cc]","a");
    $ul1=substr_count("$exp[$cc]","u");
    $il1=substr_count("$exp[$cc]","i");
    $ol1=substr_count("$exp[$cc]","o");
    $el1=substr_count("$exp[$cc]","e");
    $suma=$al1+$ul1+$il1+$ol1+$el1;

    $tags= explode(" ",$exp[$cc]);
    $b=count($tags);


    echo "



        <tr>
            <td width='100' >$exp[$cc]</td>
            <td width='100' align='center' > $a </td>
            <td width='100' align='center' >  $suma </td>
            <td width='100' align='center' > $b  </td>
            <td width='100' align='center' >  **▼** </td>

        </tr>



" ;

    while($ccc != count($tags) ) {

        $aa = substr_count("$tags[$ccc]", "a");
        if($aa != 0){echo"<tr> <td width='100' colspan='4'> <td width='100' align='center' > $tags[$ccc]  </td> </tr> ";  };

        $u = substr_count("$tags[$ccc]", "u");
        if($u != 0 and $aa==0 ){echo"<tr> <td width='100' colspan='4' > <td width='100' align='center' > $tags[$ccc]  </td> </tr> ";};

        $i = substr_count("$tags[$ccc]", "i");
        if($i != 0 and $aa==0 and $u==0){echo"<tr> <td width='100' colspan='4' > <td width='100' align='center' > $tags[$ccc]  </td> </tr> ";};

        $o = substr_count("$tags[$ccc]", "o");
        if($o != 0 and $aa==0 and $u==0 and $i==0){echo"<tr> <td width='100' colspan='4' > <td width='100' align='center' > $tags[$ccc]  </td> </tr> ";};

        $e = substr_count("$tags[$ccc]", "e");
        if($e != 0 and $aa==0 and $u==0 and $i==0 and $o==0){echo"<tr> <td width='100' colspan='4' > <td width='100' align='center' > $tags[$ccc]  </td> </tr> ";};

        $ccc++;
    }
    $ccc=0;










    $cc++;}







//Amr Jamal





?>
</center>
</body>







</html>