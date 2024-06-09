<?php

namespace App;

class Validator {
  public function checkTextLength($text, $min = 3, $max = 255) {
    return strlen($text) >= $min && strlen($text) <= $max;
  }

  public function checkLink($link) {
    return filter_var($link, FILTER_VALIDATE_URL);
  }
}