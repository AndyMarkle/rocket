<?php
    /**
     * Plugin Name: Administrative URL Rewrite for Rocket Dashboard
     * Plugin URI: http://rocket.wyfndr.co/
     * Description: Turns WordPress into Rocket.
     * Version: 0.5
     * Author: Andy Markle, Willow Marketing
     * Author URI: http://willowmarketing.com/
     * Text Domain: rocketdash
     */
  
    return ChangeAdminUrlPlugin::bootstrap();

    class ChangeAdminUrlPlugin {
     private $renameFrom = 'wp-admin';
     private $renameTo = 'dashboard';
     static $instance;
     static public function bootstrap() {
      null === self::$instance
       && self::$instance = new self()
       ;
      return self::$instance;
     }
     private function setCookiePath() {
      defined('SITECOOKIEPATH') || define('SITECOOKIEPATH', preg_replace('|https?://[^/]+|i', '', get_option('siteurl') . '/' ) );
      defined('ADMIN_COOKIE_PATH') || define('ADMIN_COOKIE_PATH', SITECOOKIEPATH . $this->renameTo);
     }
     public function __construct() {
      $this->setCookiePath();
      add_action('init', array($this, 'init')) ;
     }
     public function init() {
      add_filter('admin_url', array($this, 'admin_url'), 10, 3);
     }
     public function admin_url($url, $path, $blog_id) {
      $renameFrom = $this->renameFrom;
      $renameTo = $this->renameTo;
      $scheme = 'admin';
      $find = get_site_url($blog_id, $renameFrom.'/', $scheme);
      $replace = get_site_url($blog_id, $renameTo.'/', $scheme);
      (0 === strpos($url, $find))
       && $url = $replace.substr($url, strlen($find))
       ;
      return $url;
    }
  }