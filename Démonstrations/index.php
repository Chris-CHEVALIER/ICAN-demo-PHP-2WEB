<?php
require("./header.php");
/* $password = "123456";
  $firstName = "Chris";
  $lastName = "Chevalier";
  $age = 31;
  $age++; // $age += 1; OU $age = $age + 1;
  $welcomeMessage = "Bienvenue " . $firstName . " " . $lastName . " ! Vous avez " . $age . " ans.";
  echo ("<p>Bonjour les 2WEB et 3WEB 15 mois !</p>");
  echo $password;
  echo $welcomeMessage; */

$table = [
  "pieds" => 4,
  "couleur" => "noire",
  "tiroirs" => 4,
  "places" => 8,
];

echo "Ma table :<br>";
echo "Pieds: "  . $table["pieds"] . "<br>";
echo "Couleur: {$table["couleur"]}<br>";
echo "Tiroirs: {$table["tiroirs"]}<br>";
echo "Places: {$table["places"]}<br>";

echo "<pre>";
print_r($table);
echo "</pre>";

$fruits = ["banane", "fraise", "kiwi"];
array_push($fruits, "mangue"); // $fruits[] => "mangue"
array_push($fruits, "grenade"); // $fruits[] => "mangue"

//echo $fruits[2];

echo $fruits[array_rand($fruits)] . "<br>";
foreach ($fruits as $key => $fruit) {
  echo "$key : $fruit<br>";
}

echo "J'ai " . sizeof($fruits) . " fruits dans mon tableau.<br>";

if (in_array("kiwi", $fruits)) {
  echo "Vous avez des kiwis ! 🙆🏻‍♂️";
} else {
  echo "Vous n'avez pas de kiwis... 🙁";
}

$i = 0;
while ($i <= 10) {
  echo $i;
  $i++;
}
echo "<br>";

function convertEuroToDollar(int $euro): string
{
  $result = $euro * 1.08;
  return $result;
}
echo "$" . convertEuroToDollar(18) . "<br>";
echo "$" . convertEuroToDollar(19) . "<br>";
echo "$" . convertEuroToDollar(567) . "<br>";

?>
</body>

</html>