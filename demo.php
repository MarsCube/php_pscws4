<?php
header("Content-Type:text/html; charset=utf-8");
$test = '������һ�����Ĳ��Դ���!';

require('pscws4.class.php');
$pscws = new PSCWS4('utf-8');
$pscws->set_dict('./etc/dict.utf8.xdb');
$pscws->set_rule('./etc/rules.utf8.ini');
$pscws->set_ignore(true);
$pscws->send_text($test);
while ($some = $pscws->get_result()){
 foreach ($some as $word){
  print_r($word['word'].' ');
 }
}