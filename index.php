<?php 
/** Index for Bouncer. This is where the magic happens.
 *
 * @package Bouncer
 * @author Noel Niles
 */
require_once 'src/config.php';
Routes::dispatch();
