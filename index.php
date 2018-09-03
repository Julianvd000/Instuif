<?php
/**
 * Bootstrap Web App
 */

/**
 *  Initialization, f.e.:
 *   - making DB connection
 *   - start session
 *   - loading configuration settings / files
 *   - loading language settinges / files
 *   - etc...
 */
session_start();
// contsants
define('APP_PATH', __DIR__);

// includes
require_once 'libs/dbhandler.php';
require_once 'libs/functions.php';
require_once 'libs/config.php';





// get sanitized GET vars ("controller" and "action")
$controller = filter_input(INPUT_GET, 'controller', FILTER_SANITIZE_URL);   // clean value of $_GET['controller']
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_URL);           // clean value of $_GET['action']

if ($controller === null || $action === null) {
        $controller = 'Dashboard';
        $action = 'overview';
  }



// load controller file (when file exists)
$controllerClassName = ucfirst($controller) . 'Controller';
$controllerFile = 'controllers/' . $controllerClassName .'.php';

if (file_exists($controllerFile)) {
    require_once $controllerFile;
} else {
    throw new Exception('Controller file "'. $controllerFile .'" does not exist');
}

// create controller object (when class exists)
if (class_exists($controllerClassName)) {
    $controllerObject = new $controllerClassName();
} else {
    throw new Exception('Class "'. $controllerClassName .'" doesn\'t exist');
}

// call action method (when method exists)
if (method_exists($controllerObject, $action)) {
    $controllerObject->{$action}();
} else {
    throw new Exception('Action "'. $action .'" doesn\'t exist');
}
