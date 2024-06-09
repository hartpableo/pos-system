<?php

define('ROOT',  $base_url = ( isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? 'https' : 'http' ) . '://' .  $_SERVER['HTTP_HOST']);
define('BASE_PATH', realpath(__DIR__));
define('ASSET_VERSION', isset( $_SERVER['IS_DDEV_PROJECT'] ) ? time() : '1.0.0');
