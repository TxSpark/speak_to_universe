<?php
$string = 'M�����/�fJj�!��9y�,����"�X��΅"�ӂ���c�`V}�TT{ICF̄�%C0���hT�@�7y`J�K+7�~;PV]zC}�ή"�ӓ>�~���b��ʍ�+��ڎ�g�y-';
$pattern = '/[^a-zA-Z0-9\s]/';
$replacement = "";
$s = preg_replace($pattern, $replacement, $string);
echo $s;
