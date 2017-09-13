<?php
namespace Grohiro\Laravel\Alert;

/**
 * アラートメッセージのフォーマッタ
 *
 * アラートをHTMLに変換したり, メッセージの翻訳をします。
 */
interface AlertFormat
{
  /**
   * メッセージをHTMLに変換します
   *
   * @param string $clazz class属性名
   * @param string $message 表示するメッセージ（translate済)
   * @return string メッセージまたはレンダリング用のHTML
   */
  public function format($clazz, $message);

  /**
   * メッセージを翻訳します
   *
   * i18nのメッセージカタログから翻訳済のメッセージを返します。
   * 対応するメッセージがない場合は変換せずに返します。
   *
   * @param string $message メッセージコード
   * @return string 翻訳したメッセージ
   */
  public function translate($message);
}

