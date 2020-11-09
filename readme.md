# ApiRoutes

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

set api routes to laravel api file

## Installation

Via Composer

``` bash
$ composer require masoud5070/api-routes
```  
If you do not run Laravel 5.5 (or higher), then add the service provider in `config/app.php`:

```php
Masoud5070\ApiRoutes\ApiRoutesServiceProvider,
```

## Usage
use ```
    /test
    ``` uri to get information by ``` GET ``` method and with
    ``` POST ``` method you should set ``` name ``` field then send request.  
    
    
## Configuration
for change default configuration you can publish config file by command below:  
``` bash
$ php artisan vendor:publish --tag=config
```

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.



## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- [author name][link-author]
- [All Contributors][link-contributors]

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/masoud5070/api-routes.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/masoud5070/api-routes.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/masoud5070/api-routes/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/masoud5070/api-routes
[link-downloads]: https://packagist.org/packages/masoud5070/api-routes
[link-travis]: https://travis-ci.org/masoud5070/api-routes
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/masoud5070
[link-contributors]: ../../contributors
