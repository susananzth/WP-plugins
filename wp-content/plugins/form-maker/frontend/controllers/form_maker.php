<?php

/**
 * Class FMControllerForm_maker
 */
class FMControllerForm_maker {
  /**
   * PLUGIN = 2 points to Contact Form Maker
   */
  const PLUGIN = 1;

  private $view;
  private $model;
  private $form_preview = false;

  /**
   * FMControllerVerify_email constructor.
   */
  public function __construct() {
    $queried_obj = get_queried_object();
    // check is custom post type in review page.
    if ($queried_obj && isset($queried_obj->post_type) && $queried_obj->post_type == 'form-maker' && $queried_obj->post_name == 'preview') {
      $this->form_preview = true;
    }

    require_once WDFMInstance(self::PLUGIN)->plugin_dir . "/frontend/models/form_maker.php";
    $this->model = new FMModelForm_maker();

    require_once WDFMInstance(self::PLUGIN)->plugin_dir . "/frontend/views/form_maker.php";
    $this->view = new FMViewForm_maker($this->model);
  }

  /**
   * Execute.
   *
   * @param int $id
   * @param string $type
   *
   * @return string|void
   */
  public function execute( $id = 0, $type = 'embedded' ) {
    return $this->display($id, $type);
  }

  /**
   * Display.
   *
   * @param int $id
   * @param string $type
   *
   * @return string|void
   */
  public function display( $id = 0, $type = '' ) {
    $fm_settings = get_option(WDFMInstance(self::PLUGIN)->is_free == 2 ? 'fmc_settings' : 'fm_settings');
    if ( $type == 'embedded' ) {
      $result = $this->model->showform($id, $type);
      if ( !$result ) {
        return;
      }
      if ( $this->fm_bot_validation( $id ) ) {
          $ok = $this->model->savedata($result[0], $id);
          if ( is_numeric($ok) ) {
            $this->model->remove($ok);
          }
          $this->model->increment_views_count($id);
      }
      return $this->view->display($result, $fm_settings, $id, $type);
    }
    else {
     // Get all forms.
      $forms = $this->model->all_forms();
      return $this->autoload_form($forms, $fm_settings);
    }
  }

  /**
   * Autoload form.
   *
   * @param array $forms
   * @param array $fm_settings
   * @return string
   */
  public function autoload_form( $forms = array(), $fm_settings = array() ) {
    $fm_forms = array();
    foreach ($forms as $key => $form) {
      $display_on_this = FALSE;
      $error = 'success';
      $message = FALSE;
      $id = (int)$form->id;
      $type = $form->type;
      if (isset($_SESSION['redirect_paypal' . $id]) && ($_SESSION['redirect_paypal' . $id] == 1)) {
        $_SESSION['redirect_paypal' . $id] = 0;
      }
      elseif (isset($_SESSION['massage_after_submit' . $id]) && $_SESSION['massage_after_submit' . $id] != '') {
        $massage_after_submit = $_SESSION['massage_after_submit' . $id];
        if ($massage_after_submit) {
          $message = TRUE;
        }
      }
      $display_on = explode(',', $form->display_on);
      $posts_include = explode(',', $form->posts_include);
      $pages_include = explode(',', $form->pages_include);
      $categories_display = explode(',', $form->display_on_categories);
      $current_categories = explode(',', $form->current_categories);
      $posts_include = array_filter($posts_include);
      $pages_include = array_filter($pages_include);
      if ($display_on) {
        wp_reset_query();
        if (in_array('everything', $display_on)) {
          if (is_singular()) {
            if ((is_singular('page') && (!$pages_include || in_array(get_the_ID(), $pages_include))) || (!is_singular('page') && (!$posts_include || in_array(get_the_ID(), $posts_include)))) {
              $display_on_this = TRUE;
            }
          }
          else {
            $display_on_this = TRUE;
          }
        }
        else {
          if (is_archive()) {
            if (in_array('archive', $display_on)) {
              $display_on_this = TRUE;
            }
          }
          else {
            $page_id = (is_front_page() && !is_page()) ? 'homepage' : get_the_ID();
            $current_post_type = 'homepage' == $page_id ? 'home' : get_post_type($page_id);
            if (is_singular() || 'home' == $current_post_type) {
              if (in_array('home', $display_on) && is_front_page()) {
                $display_on_this = TRUE;
              }
            }
            $posts_and_pages = array();
            foreach ($display_on as $dis) {
              if (!in_array($dis, array('everything', 'home', 'archive', 'category'))) {
                $posts_and_pages[] = $dis;
              }
            }
            if ($posts_and_pages && is_singular($posts_and_pages)) {
              switch ($current_post_type) {
                case 'page' :
                case 'home' :
                  if (!$pages_include || in_array($page_id, $pages_include)) {
                    $display_on_this = TRUE;
                  }
                  break;
                case 'post':
                  if ( !empty($posts_include) && in_array($page_id, $posts_include) ) {
                    $display_on_this = TRUE;
                  }
                  else {
                    $categories = get_the_terms($page_id, 'category');
                    $post_cats = array();
                    if ( $categories ) {
                      foreach ( $categories as $category ) {
                        $post_cats[] = $category->term_id;
                      }
                    }
                    foreach ( $post_cats as $single_cat ) {
                      if ( in_array($single_cat, $categories_display) ) {
                        $display_on_this = TRUE;
                      }
                    }
                  }
				break;
                default:
                  if (in_array($current_post_type, $display_on)) {
                    $display_on_this = TRUE;
                  }
				break;
              }
            }
          }
        }
      }
      $show_for_admin = current_user_can('administrator') && $form->show_for_admin ? 'true' : 'false';

      if ( $this->form_preview && ($id == WDW_FM_Library(self::PLUGIN)->get('wdform_id', 0)) ) {
        $display_on_this = TRUE;
      }

      $form_result = $this->model->showform($id, $type);
      if ( !$form_result ) {
        continue;
      }
      if ( $this->fm_bot_validation( $id ) ) {
        $ok = $this->model->savedata($form_result[0], $id);
        if ( is_numeric($ok) ) {
          $this->model->remove($ok);
        }
        $this->model->increment_views_count($id);
      }
      $params = array();
      $params['id'] = $id;
      $params['type'] = $type;
      $params['form'] = $form;
      $params['display_on_this'] = $display_on_this;
      $params['show_for_admin'] = $show_for_admin;
      $params['form_result'] = $form_result;
      $params['fm_settings'] = $fm_settings;
      $params['error'] = $error;
      $params['message'] = $message;
      $fm_forms[$id] = $this->view->autoload_form( $params );
    }

    return implode($fm_forms);
  }

  /**
   * Bot validation.
   *
   * @param int $form_id
   *
   * @return bool
   */
  public function fm_bot_validation( $form_id ) {
    if ( (isset( $_POST[ "fm_bot_validation" . $form_id ] ) && $_POST[ "fm_bot_validation" . $form_id ] != '') || (isset($_POST["counter" . $form_id]) && !isset($_POST[ "fm_bot_validation" . $form_id ])) ){
      WDW_FM_Library(self::PLUGIN)->start_session();
      $_SESSION['massage_after_submit' . $form_id] = addslashes(addslashes(__('Error, something went wrong.', WDFMInstance(self::PLUGIN)->prefix)));
      $_SESSION['error_or_no' . $form_id] = TRUE;
      return false;
    }
    return true;
  }
}
