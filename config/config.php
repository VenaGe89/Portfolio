<?php
if (session_status() == PHP_SESSION_NONE) {
    $name = preg_replace("/[^a-z\d]/i", "", __DIR__);
    session_name($name);
    session_start();

}


// Add other configuration settings as needed

// Load your custom plugin and other plugins
$plugins = array(
    'TwigFunctions',
);

// Load plugins
foreach ($plugins as $plugin) {
    $config['plugins'][$plugin]['enabled'] = true;
}

