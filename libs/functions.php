<?php

/**
 * Global functions
 */

/**
 * Renders given view file
 * @param string $viewPath
 * @param array $vars
 */
function loadView(string $viewPath, array $vars = [])
{
    // make "normal" vars for view
    extract($vars);
    // load view file
    include APP_PATH . '/views/' . $viewPath . '.php';
}
function Age(string $birthDates)
{
  //explode the date to get month, day and year
  $birthDate = explode("/", $birthDates);
  //get age from date or birthdate
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
  return "Age is: " . $age;
}


