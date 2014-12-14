<?php

/*
  Plugin Name: Optimisation
  Description: Optimisation Wordpress
  Version: 13/12/2014
 */

/*
 * Blocage de l'édition
 */
define('DISALLOW_FILES_MODS', true);
define('DISALLOW_FILES_EDIT', true);

/*
 * Optimisation Wordpress Bdd
 */
define('WP_POST_REVISIONS', FALSE);
define('EMPTY_TRASH_DAYS', 5);
define('MEDIA_TRASH', FALSE);


/*
 * Close DB connection 
 */
add_action('shutdown', '_close_db_connection', 99);

function _close_db_connection() {
    global $wpdb;
    unset($wpdb);
}
