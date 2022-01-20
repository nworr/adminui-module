<?php

/**
 * @author    Laurent Jouanneau
 * @copyright 2022 Laurent Jouanneau
 *
 * @link     https://jelix.org
 * @licence  MIT
 */
require_once JELIX_LIB_PATH.'plugins/formwidget/upload2_html/upload2_html.formwidget.php';

class upload2_adminlteFormWidget extends upload2_htmlFormWidget
{
    use \Jelix\AdminUI\Form\WidgetTrait;
}
