<?php
// Html extension, experimental

class YellowHtml {
   const VERSION = "0.0.1";

   // Handle page content in raw format
   public function onParseContentRaw($page, $text) {
       return $text;
   }
}