<?php 

$BASE_PATH = ".\\exercice_9\\";

define('ROOTPATH', __DIR__);

$files_and_folder = scandir(ROOTPATH . $BASE_PATH);
$files_and_folder_new_name = $files_and_folder;

foreach($files_and_folder as $key => $path) {
    
    $files_and_folder_new_name[$key] = str_replace(
        "'", 
        '_', 
        str_replace(
            '$', 
            '', 
            str_replace(
                ' ',
                '_',
                $path
            )
        )
    ) . PHP_EOL;
}

foreach ($files_and_folder as $key => $path) {
    echo ROOTPATH . $BASE_PATH . $files_and_folder[$key] . PHP_EOL;
    echo ROOTPATH . $BASE_PATH . $files_and_folder_new_name[$key]. PHP_EOL;
    rename(
        ROOTPATH . $BASE_PATH . $files_and_folder[$key],
        ROOTPATH . $BASE_PATH . $files_and_folder_new_name[$key]
    );
}
