# laravel-html-alert

## Usage

```php
use Grohiro\Laravel\Alert\Alert;

// Controller
public function index()
{
  return view('index')->withAlert(Alert::success('Done.');
}
```

```view
{!! Html::alert() !!}
```

## Install

```
$ compore require grohiro/laravel-html-alert 'dev-master'
```

Add the service provider to `config/app.php'

```php
providers = [
  //...
  Grohiro\Laravel\Alert\AlertServiceProvider::class
];
```

