# linnworks-laravel

## About

Wrapper for the Linnworks API, as documented at [http://apps.linnworks.net/Api](http://apps.linnworks.net/Api)

## Install

    composer require booni3/linnworks-laravel

## Usage

Using Facade:

    $linnworks = Linnworks::make();
    $orders = $linnworks->Orders()->getOpenOrders(25,
        1,
        null,
        null,
        'e41b4701-0885-430d-9623-d840d9d46dd6',
        null);
        
## Depriciated SDK

Only some of the API has been created. The depreciated SKD folder contains a wide range of the potential API calls.