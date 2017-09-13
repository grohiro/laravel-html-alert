<?php
namespace Grohiro\Laravel\Alert;

use Illuminate\Support\ServiceProvider;

/**
 * Provides Laravel Html Alert
 */
class AlertServiceProvider extends ServiceProvider
{
  public function boot()
  {
    $this->registerMacro();
    \Grohiro\Laravel\Alert\Alert::$formatter = new LaravelFormat();
  }

  /**
   * HTMLマクロを登録する
   */
  public function registerMacro()
  {
    \Html::macro('alert', function() {
      return (\Session::has('alert')) ? \Session::get('alert') : '';
    });
  }

}
