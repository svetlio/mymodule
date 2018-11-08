<?php

namespace Drupal\mymodule\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\views\Views;

/**
 * Class DefaultController.
 */
class DefaultController extends ControllerBase {

  /**
   * Content.
   *
   * @return string
   *   Return Content string.
   */
  public function content() {

    $elements = [];

    $elements['form_search'] = \Drupal::formBuilder()->getForm('\Drupal\mymodule\Form\DefaultForm');
    $elements['form_search']['#weight'] = 0;

    $views_name = 'content_list';
    $display_id = 'page_1';
    $view = Views::getView($views_name);
    $view->setDisplay($display_id);

    $elements['view'] = $view->render($display_id);
    $elements['view']['#weight'] = 1;

    return $elements;
  }

}
