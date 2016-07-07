<?php
  
  include 'lib/simple_html_dom.php';
  
  $html = str_get_html('<p>hello <a href="#link-target" target="_blank">there</a> big <a href="#link">fella</a></p><p>hello <a href="#link-target" target="_blank">there</a> big <a href="#link">fella</a></p><p>hello <a href="#link-target" target="_blank">there</a> big <a href="#link">fella</a></p>');
  
  foreach($html->find('a') as $element) {
    
    if( $element->target === '_blank' ) {
      $element->innertext .= ' <span class="a11y-icon-new-window"><img src="assets/images/new-window.svg" alt="This link opens in a new window"></span>';
    }
    
  } // foreach
  
  $html->save();
  
  echo $html;
  
?>