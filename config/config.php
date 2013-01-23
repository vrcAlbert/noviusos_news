<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

$base = \Config::load('noviusos_blognews::config', true);
$base['application_label'] = __('News stories');
$base['comments']['enabled'] = false;
$base['tags']['enabled'] = false;
$base['authors']['enabled'] = false;
$base['summary']['enabled'] = true;
return $base;