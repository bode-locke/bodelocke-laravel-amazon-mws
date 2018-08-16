# LaravelAmazonMws

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

A Laravel package to connect to Amazon's Merchant Web Services (MWS).

Currently optimizing.

This is NOT for Amazon Web Services (AWS) - Cloud Computing Services.

Please, take a look to Amazon Web Services (AWS) documentation :
https://docs.developer.amazonservices.com/en_FR/dev_guide/DG_IfNew.html

## Installation

Via Composer

``` bash
$ composer require laravelamazonmws/laravelamazonmws
```

## Usage

``` bash
$country  = 'FR';
$config   = [
                'Marketplace_Id'    => LaravelAmazonMws::getMarketPlaceId($country),
                'Marketplace_Host'  => LaravelAmazonMws::getMarketPlaceHost($country),
                'Seller_Id'         => env('YOUR_SELLER_ID'),
                'Access_Key_ID'     => env('YOUR_ACCESS_KEY_ID'),
                'Secret_Access_Key' => env('YOUR_SECRET_ACCESS_KEY'),
            ];
$action   = 'GetFulfillmentOrder';
$query    = [
                //Add the request paramaters by Action, take a look on Amazon documentation
                'SellerFulfillmentOrderId' => 895,
            ];
$new_mws  =  new LaravelAmazonMws($config);
$response = $new_mws->connect($action, $query);
```

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email b.delaloi@gmail.com instead of using the issue tracker.

## Credits

- [BodeLocke][link-author]
- [All Contributors][link-contributors]

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/laravelamazonmws/laravelamazonmws.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/laravelamazonmws/laravelamazonmws.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/laravelamazonmws/laravelamazonmws/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/laravelamazonmws/laravelamazonmws
[link-downloads]: https://packagist.org/packages/laravelamazonmws/laravelamazonmws
[link-travis]: https://travis-ci.org/laravelamazonmws/laravelamazonmws
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/laravelamazonmws
[link-contributors]: ../../contributors]
