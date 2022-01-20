<?php
/**
 * @author   Laurent Jouanneau
 * @copyright 2019 Laurent Jouanneau
 * @link     http://jelix.org
 * @licence MIT
 */

class defaultCtrl extends jController
{
    /**
     *
     */
    function index()
    {
        $rep = $this->getResponse('html');
        $tpl = new jTpl();


        $rep->body->assign('page_title', 'Blank Page');
        $rep->body->assign('sub_page_title', 'it all starts here');
        $rep->body->assign('breadcrumb', array(
            array('url' => jUrl::get('adminui~default:index'), 'label' => 'Home', 'icon-class' => 'fa fa-dashboard'),
            array('url' => '#', 'label' => 'Examples')
        ));
        $rep->body->assign('MAIN', $tpl->fetch('adminui~blank'));
        return $rep;
    }

    function login()
    {
        $rep = $this->getResponse('htmllogin');
        $tpl = new jTpl();

        $rep->body->assign('page_title', 'Login');
        $rep->body->assign('MAIN', $tpl->fetch('test~login'));
        return $rep;
    }

    function logincheck()
    {
        $rep = $this->getResponse('redirect');
        $rep->action = 'test~default:index';
        return $rep;
    }

    function form()
    {
        $rep = $this->getResponse('html');
        $tpl = new jTpl();

        $form = jForms::create('test~formallwidgets');

        $tpl->assign('form', $form);

        $rep->body->assign('page_title', 'A form');
        $rep->body->assign('sub_page_title', 'Show all jForms widgets for AdminLte');

        $rep->body->assign('MAIN', $tpl->fetch('test~form'));
        return $rep;
    }

}

