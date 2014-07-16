<?php
  /*
   * Description: 特権管理者以外での特定htmlタグ削除の回避用
   *              回避タグ：iframe/object/param/input(all type)/select/textarea
   * Author: Naomi Watanabe
   * Version: 1.0
   */
function set_allowedposttags($content){
  global $allowedposttags;
  $allowedposttags['iframe'] = array(
    'class' => array(),
    'src' => array(),
    'width' => array(),
    'height' => array() ,
    'frameborder' => array(),
    'scrolling' => array(),
    'marginheight' => array(),
    'marginwidth' => array()
  );
  $allowedposttags['object'] = array(
    'class' => array(),
    'data' => array(),
    'width' => array(),
    'height' => array(),
    'type' => array()
  );
  $allowedposttags['param'] = array(
    'class' => array(),
    'name' => array(),
    'value' => array()
  );
  $allowedposttags['input'] = array(
    'id' => array(),
    'class' => array(),
    'name' => array(),
    'value' => array(),
    'type' => array(
        'text',
        'password',
        'checkbox',
        'radio',
        'file',
        'hidden',
        'submit',
        'reset',
        'button',
        'image'
      ),
    'size' => array(),
    'requierd' => array()
  );
  $allowedposttags['select'] = array(
    'id' => array(),
    'name' => array(),
    'title' => array()
    );
  $allowedposttags['textarea'] = array(
    'id' => array(),
    'name' => array(),
    'rows' => array(),
    'cols' => array(),
    'wrap' => array()
    );
  return $content;
}
add_filter('content_save_pre', 'set_allowedposttags', 8);