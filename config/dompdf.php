<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Settings
    |--------------------------------------------------------------------------
    |
    | Set some default values. It is possible to add all defines that can be set
    | in dompdf_config.inc.php. You can also override the entire config file.
    |
    */
    'show_warnings' => false,   // Throw an Exception on warnings from dompdf

    'public_path' => null,  // Override the public path if needed

    /*
     * Dejavu Sans font is missing glyphs for converted entities, turn it off if you need to show € and £.
     */
    'convert_entities' => true,

    'options' => [
    'default_font' => 'dejavusans',

        'font_dir' => storage_path('fonts'), // advised by dompdf (https://github.com/dompdf/dompdf/pull/782),
        'font_cache' => storage_path('fonts'),
        'temp_dir' => sys_get_temp_dir(),
        'chroot' => realpath(base_path()),
        'allowed_protocols' => [
            'data://' => ['rules' => []],
            'file://' => ['rules' => []],
            'http://' => ['rules' => []],
            'https://' => ['rules' => []],
        ],
        'artifactPathValidation' => null,
        'log_output_file' => null,
        'enable_font_subsetting' => false,
        'pdf_backend' => 'CPDF',
        'default_media_type' => 'screen',
        'default_paper_size' => 'a4',
        'default_paper_orientation' => 'portrait',


        'dpi' => 96,
        'enable_php' => false,
        'enable_javascript' => true,
        'enable_remote' => false,
        'allowed_remote_hosts' => null,
        'font_height_ratio' => 1.1,
        'enable_html5_parser' => true,
    ],
'font_data' => [
    'dejavusans' => [
        'R'  => 'DejaVuSans.ttf',
        'B'  => 'DejaVuSans-Bold.ttf',
        'useOTL' => 0xFF,      // يجب أن تكون 0xFF لتمكين الربط بين الحروف العربية
        'useKashida' => 75,   // التحكم في المسافة بين الحروف
    ],
],


];
