<?php
/**
 * Override or insert variables into the page templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
function express_preprocess_page(&$variables, $hook) {
  if (!empty($variables['node'])) {
    $variables['theme_hook_suggestions'][] = 'page__node_' . $variables['node']->type;
  }
  // dpm($variables);
    // $variables['sample_variable'] = t('Lorem ipsum.');
}
// */
/*
function rsatheme_menu_link(array $variables) {
  $element = $variables['element'];
  $sub_menu = "";

  //$element['#attributes']['class'][] = "col_1";

  if ($element['#below']) {
	$element['#below'][key($element['#below'])]['#attributes']['class'][] = 'dropdown-menu';
    $sub_menu = drupal_render($element['#below']);
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}*/

//Set a global variable containing the current region name
function phptemplate_blocks($region) {
  global $_current_region;
  $_current_region = $region;
  $output = theme_blocks($region);
  echo $output;
  return $output;
}
/*function rsa_menu_tree($tree) {
//get the global variable containg the current region name we've just set
global $_current_region;
switch($_current_region){
   case 'my_region_1':
       $output = '<ul class="whatEverYouLike">'. $tree .'</ul>';
       break;
   case 'my_region_2':
       $output = '<ul class="somethingElse">'. $tree .'</ul>';
       break;
    default:
      $output = '<ul class="menu">'. $tree .'</ul>';
}
  return $output;
}*/


function rsatheme_preprocess_page(&$vars, $hook) {
    global $language;
    $path = explode('/', drupal_get_path_alias($_GET['q']));

   // print_r($path);

    if (isset($vars['node']->type)) {
        //die();
        // This code looks for any page--custom_content_type.tpl.php page
        $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type;
    }
    if($language->language == 'ar' && $is_front)
    {
        $vars['theme_hook_suggestions'][] = 'page__front__ar';
    }
}