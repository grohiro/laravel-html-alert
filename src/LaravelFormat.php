<?php
namespace Grohiro\Laravel\Alert;

/**
 * A Bootstrap format with Laravel i18n translation.
 */
class LaravelFormat extends BootstrapFormat
{
  public function translate($message)
  {
    // 配列なら
    if (is_array($message)) {
      return \Lang::get($message[0], array_slice($message, 1));
    } else {
      return \Lang::get($message);
    }
  }
}

