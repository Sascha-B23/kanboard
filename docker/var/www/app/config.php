<?php

defined('ENABLE_URL_REWRITE') or define('ENABLE_URL_REWRITE', true);
defined('LOG_DRIVER') or define('LOG_DRIVER', 'system');
define('PLUGIN_INSTALLER', true);
// Plugins directory
define('PLUGINS_DIR', __DIR__.DIRECTORY_SEPARATOR.'plugins');

// Plugins directory URL
define('PLUGIN_API_URL', 'https://kanboard.org/plugins.json');
