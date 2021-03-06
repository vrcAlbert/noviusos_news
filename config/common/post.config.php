<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

\Nos\I18n::current_dictionary(array('noviusos_news::common'));

$base = \Config::load('noviusos_blognews::common/post', true);

$base['actions']['list']['add'] =array(
    'label' => __('Add a news story'),
);

$base['i18n'] = array(
    // Crud
    'notification item added' => __('Good! A new story added to your collection.'),
    'notification item deleted' => __('The news story has been deleted.'),

    // General errors
    'notification item does not exist anymore' => __('This news story doesn’t exist any more. It has been deleted.'),
    'notification item not found' => __('We cannot find this news story.'),

    // Deletion popup
    'deleting item title' => __('Deleting the news story ‘{{title}}’'),

    # Delete action's labels
    'deleting button 1 item' => __('Yes, delete this news story'),
    'deleting button N items' => __('Yes, delete these {{count}} news stories'),

    '1 item' => __('1 news story'),
    'N items' => __('{{count}} news stories'),

    # Keep only if the model has the behaviour Contextable
    'deleting with N contexts' => __('This news story exists in <strong>{{context_count}} contexts</strong>.'),
    'deleting with N languages' => __('This news story exists in <strong>{{language_count}} languages</strong>.'),
);

return $base;