<?php

namespace App;

class Security {
  public function sanitizeText($text) {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
  }
}