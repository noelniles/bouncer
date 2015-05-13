<?php
/** Session handler for Bouncer 
 *
 * @package Bouncer
 * @author Noel Niles <noelniles@gmail.com>
 */
session_save_path(realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '/../session'));
session_start();
