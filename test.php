<?php
$iniFileArray = parse_ini_file("test.ini", true, INI_SCANNER_RAW);
foreach ($iniFileArray as $section => $settingArray) {
    print "Section = {$section}\n";
    foreach ($settingArray as $setting => $value) {
        print "{$setting}={$value}\n";
    }
}
