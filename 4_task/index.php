<?php

// TASK 1
print "\t TASK 1 <br>";

function fac($num)
{
    if ($num > 1) {
        return $num * fac($num - 1);
    }
    return 1;
}

print fac(6);
echo '<br>';


// TASK 2
print "<br>\t TASK 2 <br>";

$someArray = ['id' => 1,
              'name' => 'item1',
              'items' => [
                [
                  'id' => 2,
                  'name' => 'item2',
                  'items' => [],
                ],
                [
                  'id' => 3,
                  'name' => 'item3',
                  'items' => [],
                ],
                [
                  'id' => 4,
                  'name' => 'item4',
                  'items' => [
                    [
                      'id' => 5,
                      'name' => 'item5',
                      'items' => [],
                    ],
                    [
                      'id' => 6,
                      'name' => 'item6',
                      'items' => [],
                    ],
                  ],
                ],
              ]
            ];
            
function form_list($arr)
{
  echo '<ul>';

  echo "<li> {$arr['id']} </li>";
  echo "<li> {$arr['name']} </li>";
  echo '<br>';
  
  foreach($arr['items'] as $item) {
    if (!$item)
      continue;
    
    form_list($item);
  }
  
  echo '</ul>';
}

form_list($someArray);

?>
