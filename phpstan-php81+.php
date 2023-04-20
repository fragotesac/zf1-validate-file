<?php declare(strict_types = 1);

if (version_compare(PHP_VERSION, '8.1.0', '<')) {
    return array();
}

$ignoreErrors   = array();
$ignoreErrors[] = array(
    'message' => '#^Property Zend_Validate_File_MimeType\\:\\:\\$_finfo \\(resource\\|null\\) does not accept finfo\\|false\\.$#',
    'count'   => 3,
    'path'    => __DIR__ . '/src/Zend/Validate/File/MimeType.php',
);

return array('parameters' => array('ignoreErrors' => $ignoreErrors));
