<?php
namespace Grohiro\Laravel\Alert;

/**
 * Bootstrap 用のメッセージフォーマット
 */
class BootstrapFormat implements AlertFormat
{

  static private $format = '<div class="alert alert-%s">%s</div>';

  /**
   * @see AlertFormat
   */
  public function format($clazz, $message)
  {
    return sprintf(self::$format, $clazz, $message);
  }

  /**
   * @see AlertFormat
   */
  public function translate($message)
  {
    return $message;
  }
}

