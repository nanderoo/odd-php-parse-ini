# odd-php-parse-ini

Oddity observed between PHP 7.1 and PHP 7.4 when parsing a ini file.. 

Basic Environments:
* Ubuntu 16 or 18 LTS
* Add ondrej/php repository
* Install via APT php 7.1 & 7.4

Observed Bevahior with php 7.1:
```
$ php test.php
Section = test
settingOne=1
settingTwo=2
settingThree=3
settingFour=
$
```

Observed Bevahior with php 7.4:
```
$ php test.php
Section = test
settingOne=1
settingTwo=2
settingThree    =3
settingFour=
$ 
```

Aditional oddity:
* In the php 7.4 environment, when you start out with the test.ini containing the pentlyful extra spaces between settingThree and the equal sign and value..  if you use a tool to edit the file, like vim, and remove the spaces one at a time, and run on the cli each time between saves, I observed that the spaces shrink on each reduction, until settingThree=3, and which point, you can add spaces back in, but the value will still be parsed and displayed as settingThree=3 ?? Odd?
