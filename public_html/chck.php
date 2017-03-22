<?php
$content = file_get_contents("https://en.wikipedia.org/wiki/Elon_Musk"); 
preg_match('/,(.*?)<span class="noprint ForceAgeToShow">/i', $content, $date);
print_r($date);

preg_match('/,(.*?)<span class="noprint ForceAgeToShow">/i', $content, $place);
print_r($place);

preg_match('/<td class="role">(.*?)</i', $content, $occupation);
print_r($occupation);



?>