## A simple Laravel package to interact with Softone ERP
    
    - Disclaimer: this is not an official package     

## Installation

##     
        composer require asikam/softone

- Add this to your composer.json in your project:

##
        "repositories": [
            {
                "type": "vcs",
                "url": "https://github.com/asikam/softone"
            }
        ],
            "require": {
                "asikam/softone": "dev-master"
            }

## Usage

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

- read more at: https://www.softone.gr/ws/
