<?php

$a=4;
$b=5;
$c=byval($a,$b);

$f=4;
$g=5;
$h=byref($f,$g);

echo "a=$a<br>";
echo "b=$b<br>";
echo "c=$c<br>";
echo "f=$f<br>";
echo "g=$g<br>";
echo "h=$h<br>";




function byref (&$a1,$b1)
{
  $a1+=$b1;
  return $a1;
}

function byval ($a2,$b2)
{
  $a2+=$b2;
  return $a2;
}


// get host name from URL
preg_match('@^(?:http://)?([^/]+)@i',
    "http://www.php.net/index.html", $matches);
$host = $matches[1];

// get last two segments of host name
preg_match('/[^.]+\.[^.]+$/', $host, $matches);
echo "domain name is: {$matches[0]}\n";
?>
