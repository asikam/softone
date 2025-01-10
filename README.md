## Softone Web Services PHP Laravel package

Laravel package that makes it easy to use the Softone Web Services REST API.

    - Disclaimer: this is not an official package     

Official documentation at: https://www.softone.gr/ws/

## Installation

        composer require asikam/softone

- Then publish the config file

        php artisan vendor:publish --provider="Asikam\Softone\SoftoneServiceProvider"

## Usage

Get browser Data: 

```php
    
    use Asikam\Softone\SoftoneBrowser;
    
    $softone = new SoftoneBrowser();
    $softone->search("CUSTOMER",'CUSTOMER.AFM=000000000*=;');

    foreach ($softone->responseData as $item) {
        $this->info( $item['CUSTOMER.AFM'] );
        $this->info( $item['CUSTOMER.NAME'] );
    }

```

or build the request step by step:

```php 
    
    use Asikam\Softone\Softone;

    $softone = new Softone();
    $softone->setService('getBrowserInfo');
    $softone->setObject('CUSTOMER');
    $softone->setFilters('CUSTOMER.AFM=000000*=;');
    $softone->send();
    
    $softone->setService('getBrowserData');
    $softone->setReqId($softone->reqID);
    $softone->limit(10);
    $softone->send();
    
    foreach ($softone->data as $item) {
        echo $item['CUSTOMER.NAME']."\n";
        echo $item['CUSTOMER.AFM']."\n";
    }
    
```

- read more on how to use the Web Services at: https://www.softone.gr/ws/
