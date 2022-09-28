<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
DEFINE('DOBRA_RADA' , 'Bez chleba, to się nie najesz.');
echo DOBRA_RADA . '<br>';
echo strlen(DOBRA_RADA) . '<br>';
echo str_word_count(DOBRA_RADA) . '<br>';
echo strrev(DOBRA_RADA) . '<br>';
echo strpos(DOBRA_RADA , 'to') . '<br>';
echo str_replace('chleba' , 'mięsa' , DOBRA_RADA) . '<br>';
echo strtolower(DOBRA_RADA) . '<br>';
echo strtoupper(DOBRA_RADA) . '<br>';
echo ucwords(DOBRA_RADA) . '<br>';
echo trim(DOBRA_RADA) . '<br>';
echo strstr(DOBRA_RADA , 'nie') . '<br>';
echo substr(DOBRA_RADA , 10 , 5) . '<br>';
echo str_pad(DOBRA_RADA , 37 , "-_-" , STR_PAD_BOTH ) . '<br>';
?>

</body>
</html>