## A Laravel package for interacting with the SOFTONE ERP webservices the easy way
     
        $softone = new Softone();
        $softone->setService('getBrowserInfo');
        $softone->setObject('CUSTOMER');
        $softone->setFilters('CUSTOMER.AFM=000000*=;');
        $softone->send();

        $softone->setService('getBrowserData');
        $softone->setReqId($softone->reqID);
        $softone->limit($softone->response->totalcount);
        $softone->send();

        foreach ($softone->data as $item) {
            echo $item['CUSTOMER.NAME']."\n";
            echo $item['CUSTOMER.AFM']."\n";
        }

