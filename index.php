<?php
echo "<h1> PHP Part 04 </h1>";
// Ex 01
echo "<h3> Ex 01 </h3>";
function ReturnTrue()
{
    echo true;
}
ReturnTrue();
// Ex 02
echo "<h3> Ex 02 </h3>";
function ReturnString($str)
{
    echo $str;
}
ReturnString('chaine de caractères retournée');
// Ex 03
echo "<h3> Ex 03 </h3>";
function ConcatTwoStrings($str1, $str2)
{
    echo $str1 . $str2;
}
ConcatTwoStrings('Big', 'Bang');
// Ex 04
echo "<h3> Ex 04 </h3>";
function CompareNumbers($num1, $num2)
{
    if ($num1 > $num2)
    {
        echo "Le premier nombre est plus grand";
    }
    elseif ($num1 < $num2)
    {
        echo "Le premier nombre est plus petit";
    }
    else 
    {
        echo "Les deux nombres sont identiques";
    }
}
CompareNumbers(3, 45);
// Ex 05
echo "<h3> Ex 05 </h3>";
function ConcatANumberAndAString($num, $str)
{
    echo $num . $str;
}
ConcatANumberAndAString(12, 'singes');
// Ex 06
echo "<h3> Ex 06 </h3>";
function HelloUser($firstname, $lastname, $age)
{
    if (is_integer($age) && is_string($firstname) && is_string($lastname))
    {
        echo "Bonjour $firstname $lastname, tu as $age ans ! ";
    }
    else
    {
        echo "Erreur !";
    }
    
}
HelloUser('Jean', 'Eudes', 45);
// Ex 07
echo "<h3> Ex 07 </h3>";
function WhoAreYou($age, $gender)
{
    if ($gender == 'homme' && $age < 18)
    {
        echo "Vous êtes un $gender et vous êtes mineur";
    }
    elseif ($gender == 'homme' && $age >= 18)
    {
        echo "Vous êtes un $gender et vous êtes majeur";
    }
    elseif ($gender == 'femme' && $age < 18)
    {
        echo "Vous êtes une $gender et vous êtes mineur";
    }
    elseif ($gender == 'femme' && $age >= 18)
    {
        echo "Vous êtes une $gender et vous êtes majeur";
    }
    else
    {
        echo "Erreur... Je ne connais pas votre identité !";
    }
}
WhoAreYou(29, 'homme');
// Ex 08
echo "<h3> Ex 08 </h3>";
function SumOfThreeNumbers($num1 = 2, $num2 = 4, $num3 = 6)
{
    echo $num1 + $num2 + $num3 . '</br>';
}
SumOfThreeNumbers();
SumOfThreeNumbers(10, 20, 30);
?>