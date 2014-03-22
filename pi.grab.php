<?php
class Plugin_grab extends Plugin {

  public function firstPara() {
    $string = $this->fetchParam('string', null, false, false, false);
    $tags = $this->fetchParam('tags','no');
    
    if( ($x_pos = strpos($string, '<p>')) !== FALSE )
       $string = substr($string, $x_pos);
    $string = substr($string, 0, strpos($string, "</p>")+4);
    if ($tags == "no") {
      $string = str_replace("<p>", "", str_replace("<p/>", "", $string));
    }
    return $string;
  }
}
