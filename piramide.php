<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/master.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  </body>
</html>

<?php

$dom = new DOMDocument('1.0', 'utf-8');
$vakjes = array();

$ammount = 10;

CreatePiramde($ammount);
ChangeColors("black");

echo $dom->saveXML();

function CreatePiramde($colums_and_rows)
{
  global $vakjes;
  global $dom;

  $table = $dom->createElement('table');
  $table->setAttribute("class", "table");
  $dom->appendChild($table);

  for ($i=0; $i < $colums_and_rows; $i++)
  {
    $row = array();
    $tr = $dom->createElement('tr');
    $tr->setAttribute("class", "tr");
    $table->appendChild($tr);
    for ($j=0; $j < $colums_and_rows; $j++)
    {
      $td = $dom->createElement('td');
      $tr->appendChild($td);
      $td->setAttribute("class", "td");
      array_push($row, $td);
    }
    array_push($vakjes, $row);
  }

}

function ChangeColors($color1)
{
  global $ammount;
  $count = $ammount;
  $endnum = $count - 1;
  $startNumber = 1;
  global $vakjes;
  for ($i=0; $i < count($vakjes); $i++)
  {
    for ($j=0; $j < $startNumber; $j++)
    {
    $vakjes[$i][$j]->setAttribute("style", "background: $color1;");
    }
    $startNumber++;
  }

}




 ?>
