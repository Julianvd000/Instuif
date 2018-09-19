<?php

  $config;

  $config['project-name'] = 'Instuif';
  $config['project-author'] = 'Instuif';
  $config['project-company'] = 'Instuif';

  $config['url'] = 'http://localhost';
  $config['base_url'] = APP_PATH;

  $config['db-ip'] = 'localhost';
  $config['db-port'] = 3306;
  $config['db-user'] = 'root';
  $config['db-password'] = '';
  $config['db-name'] = 'instuif';
  // DB config
  $config['database'] = new DbHandler();


  $GLOBALS['config'] = $config;
