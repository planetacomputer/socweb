<?php
if ($_REQUEST['cod']=='c1')
{
  echo "<img src=\"../imagen1.jpg\">";
  echo "<p>Primer tooltip.</p>";
  echo "<p>aaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaa aaaaaa aaaaaaaaaa";
  echo "aaaaaaaaaaaaaaaaaaa aaaaaaaaa aaaaaaaaaaaaa aaaaaaaaaaaaaaaa";
  echo "aaaaaaaaaaaaaaaaaaa aaaaaaaa aaaaaaaaaaaaaa aaaaaaaaa aaaaaaa";
  echo "aaaaaaaaaaaaaa aaaaa aaaaaaaaaaaaaaaaaaaaaa aaaaaa aaaaaaaaaa";
  echo "aaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaa aaaaaaa aaaaaaaaaaaaaaaa</p>";
}
if ($_REQUEST['cod']=='c2')
{ 
  echo "<img src=\"../imagen2.jpg\">";
  echo "<p>Segundo tooltip.</p>";
  echo "<p>bbbbbbbb bbbbbbbbbbb bbbbbbbb bbbbbbbbbbbbbb bbbbbbbbbbb bb";
  echo "bbbbbbbb bbbbbbbbbb bbbbbbbbbbbb bbbbbbbbbb bbbbbbbbbbb bbb</p>";
}
if ($_REQUEST['cod']=='c3')
{
  echo "<img src=\"../imagen3.jpg\">";
  echo "<p>Tercer tooltip.</p>";
}
if ($_REQUEST['cod']=='c4')
{
  echo "<img src=\"../imagen4.jpg\">";
  echo "<p>Cuarto tooltip.</p>";
}
?>
