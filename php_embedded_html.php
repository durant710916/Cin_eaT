<?php
$inputa= <<<FROM
<form name="form1" method="post" action="">
<p>
  你要投的次數
    <input type="text" name="throws">
    例：12000
</p>
<p>幾個骰子數呢
  <input type="text" name="dices">
  例：3
</p>
<p>
  <input type="submit" name="submit" value="開始投擲">
</p>
</form>
FROM;

echo <<<PAGE
$inputa
PAGE;

if(!isset($submit)){
   exit;
}

for ($i = $dices; $i <= $dices * 6; $i++){
$p[$i] = 0;
}

for($i=0; $i<$throws; $i++){
    $post = 0;
    for ($j=0; $j<$dices; $j++){
    $post += rand(1,6);
    }
    $p[$post]++;
}
$table = <<<TABLE
<table width="200" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="96">數字</td>
    <td width="98">次數</td>
  </tr>
TABLE;
for($i=$dices;$i<=$dices*6;$i++){
$table.= <<<TABLE
  <tr>
    <td>$i</td>
    <td>$p[$i]</td>
  </tr>
TABLE;
}
$table.= <<<TABLE
</table>
TABLE;
echo <<<PAGE
$table
PAGE;
?>