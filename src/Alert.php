<?php
namespace Grohiro\Laravel\Alert;

class Alert
{
  static public $formatter;

  /**
   * コンストラクタ
   *
   * アラートメッセージを生成する.
   *
   * @param string $message メッセージ
   * @param string $clazz alert クラス属性 (success|danger|notice|info)
   * @return Grohiro\Laravel\Alert
   */
  public function __construct($message, $clazz = 'success')
  {
    $this->message = $message;
    $this->clazz = $clazz;
  }

  /**
   * success メッセージの生成.
   *
   * @param string $message メッセージ
   * @return Alert
   */
  public static function success($message)
  {
    return (string)new Alert($message, 'success');
  }

  /**
   * danger メッセージの生成.
   *
   * @param string $message メッセージ
   * @return Alert
   */
  public static function danger($message)
  {
    return (string)new Alert($message, 'danger');
  }

  /**
   * danger メッセージの生成.
   *
   * @param string $message メッセージ
   * @return Alert
   */
  public static function error($message)
  {
    return (string)new Alert($message, 'error');
  }

  /**
   * info メッセージの生成.
   *
   * @param string $message メッセージ
   * @return Alert
   */
  public static function info($message)
  {
    return (string)new Alert($message, 'info');
  }

  /**
   * notice メッセージの生成.
   *
   * @param string $message メッセージ
   * @return Alert
   */
  public static function notice($message)
  {
    return (string)new Alert($message, 'notice');
  }

  /**
   * タグの出力
   *
   * @return string HTMLタグ
   */
  public function __toString()
  {
    $message = self::$formatter->translate($this->message);
    return self::$formatter->format($this->clazz, $message);
  }
}

