<?php
$array = json_decode(
            json_encode(
              (array)simplexml_load_file('mhs.xml')),1);

print_r($array);