<?php
//nr1
echo '<h4>pirma uzduotis</h4>';

$name = 'Tommy';
$lastName = 'Wiseau';

if(strlen($name) > strlen($lastName)) {
    echo 'Trumpesnis string yra: ' . $lastName;
} else {
    echo 'Trumpesnis string yra: ' . $name;
}
echo '<br>';

//nr2
echo '<h4>antra uzduotis</h4>';

echo strtoupper($name) . '<br>' . strtolower($lastName);
echo '<br>';

//nr3
echo '<h4>trecia uzduotis</h4>';

$raides = substr($name, 0, 1) . '' . substr($lastName, 0, 1);

echo $raides;
echo '<br>';

//nr4
echo '<h4>ketvirta uzduotis</h4>';

$paskutines = substr($name, -3) . ' ' . substr($lastName, -3);

echo $paskutines;
echo '<br>';

//nr5
echo '<h4>penkta uzduotis</h4>';

$murica = 'An American in Paris';
$muricaZvaigzdutes = str_ireplace('a', '*', $murica);
echo $murica;
echo '<br>';
echo $muricaZvaigzdutes;
echo '<br>';

//nr6
echo '<h4>sesta uzduotis</h4>';

$suskaiciuotosRaides = substr_count(strtoupper($murica), 'A');
echo $suskaiciuotosRaides;
echo '<br>';

//nr7
echo '<h4>septinta uzduotis</h4>';

$tiffany = 'Breakfast at Tiffany\'s';
$space = '2001: A Space Odyssey';
$life = 'It\'s a Wonderful Life';

$balses1 = substr_count(strtoupper($murica), 'A') + substr_count(strtoupper($murica), 'E') + substr_count(strtoupper($murica), 'I') + substr_count(strtoupper($murica), 'O') + substr_count(strtoupper($murica), 'U');
$balses2 = substr_count(strtoupper($tiffany), 'A') + substr_count(strtoupper($tiffany), 'E') + substr_count(strtoupper($tiffany), 'I') + substr_count(strtoupper($tiffany), 'O') + substr_count(strtoupper($tiffany), 'U');
$balses3 = substr_count(strtoupper($space), 'A') + substr_count(strtoupper($space), 'E') + substr_count(strtoupper($space), 'I') + substr_count(strtoupper($space), 'O') + substr_count(strtoupper($space), 'U');
$balses4 = substr_count(strtoupper($life), 'A') + substr_count(strtoupper($life), 'E') + substr_count(strtoupper($life), 'I') + substr_count(strtoupper($life), 'O') + substr_count(strtoupper($life), 'U');

echo 'An American in Paris balses: ' . $balses1;
echo '<br>';
echo 'Breakfast at Tiffany\'s balses: ' . $balses2;
echo '<br>';
echo '2001: A Space Odyssey balses: ' . $balses3;
echo '<br>';
echo 'It\'s a Wonderful Life balses: ' . $balses4;
echo '<br>';

//nr8
echo '<h4>astunta uzduotis</h4>';

$starWars = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
$starSplit = explode(' ', $starWars);

foreach($starSplit as $value) {
    if(is_numeric($value)) {
        echo 'Epizodo numeris yra ' . $value;
    }
}
echo '<br>';

//nr9
echo '<h4>devinta uzduotis</h4>';

$hood = 'Don\'t Be a Menace to South Central While Drinking Your Juice in the Hood';
$hoodSplit = explode(' ', $hood);
$hoodCount = 0;

foreach ($hoodSplit as $value) {
   if(strlen($value) <= 5) {
    $hoodCount++;
   }
}
echo 'Angliskame pavadinime yra zodziu >= 5-iom raidem: ' . $hoodCount;
echo '<br>';

$rajonas = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
$rajonasSplit = explode(' ', $rajonas);
$rajonasCount = 0;

foreach ($rajonasSplit as $value) {
    if(mb_strlen($value, 'UTF-8') <= 5) {
     $rajonasCount++;
    }
 }
echo 'Lietuviskame pavadinime yra zodziu >= 5-iom raidem: ' .  $rajonasCount;
echo '<br>';

//nr10
echo '<h4>desimta uzduotis</h4>';

$lorem = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, 3);

echo $lorem;
?>