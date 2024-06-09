<?php

namespace App;

class CSRFToken {
  private string $token;
  private int $tokenMaxTime = 60 * 60 * 24;

  public function generateToken()
  {
    $this->token = md5( uniqid( rand(), true ) );
    setSession('csrf_token', $this->token);
    setSession('csrf_token_createtime', time());
  }

  public function getToken(): string {
    return $this->token;
  }

  public function validateToken( $token ): bool {
    if (!isset($token) || $token !== getSession('csrf_token')) {
      return false;
    }

    if ((getSession('csrf_token_createtime') + $this->tokenMaxTime) < time() ) {
      return false;
    }

    deleteSession('csrf_token');
    deleteSession('csrf_token_createtime');
    return true;
  }
}