<?php

/*

Plugin Name: NOte de frais en interne

Plugin URI: http://example.com

Description: Un plugin pour gérer les frais de note.

Version: 1.0

Author: gabrielle FOUIX

Author URI: https://portfolio-gabrielle.netlify.app/

License: GPL2

*/



// Inclusions des fichiers principaux

require_once plugin_dir_path(__FILE__) . 'post-type.php';

require_once plugin_dir_path(__FILE__) . 'shortcode.php';

require_once plugin_dir_path(__FILE__) . 'form-processing.php';

require_once plugin_dir_path(__FILE__) . 'meta-box.php';

require_once plugin_dir_path(__FILE__) . 'columns.php';

require_once plugin_dir_path(__FILE__) . 'submenus.php';

require_once plugin_dir_path(__FILE__) . 'export-csv.php';

require_once plugin_dir_path(__FILE__) . 'bulk-actions.php';


require_once plugin_dir_path(__FILE__) . 'subscriber-notes.php';
require_once plugin_dir_path(__FILE__) . 'manager_n1.php';

require_once plugin_dir_path(__FILE__) . 'comptabilite.php';


require_once plugin_dir_path(__FILE__) . 'validation.php';











