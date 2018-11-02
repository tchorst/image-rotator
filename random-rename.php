<?php
// getting the list of files
$files = glob('/var/www/html/hosting/image-rotator/images/*.[gG][iI][fF]');

foreach($files as $file) 
{
    // here: trying to find a random name.
    // repeat, if such a file already exists 
    do {
        $number = mt_rand(0, 999999);
        $new_name = dirname($file) .'/'. sprintf("%06d", $number) .'.gif';
    } 
    while(is_file($new_name));

    // now, all we need is love!
    rename ($file, $new_name);
}

echo "Successfully renamed ".count($files)." files!";

?>