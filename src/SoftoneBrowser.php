<?php
namespace Asikam\Softone;

use Asikam\Softone\Enums\ServiceName;

class SoftoneBrowser extends Softone
{

    /**
     * @throws \Exception
     */
    public function search($object, $filters='', $list='', $start='',$limit='' ): void
    {
        $this->getBrowserInfo($object, $filters, $list);
        $this->getBrowserData($start, $limit);
    }

    /**
     * @throws \Exception
     */
    public function info($object, $filters='', $list='' ): void
    {
        $this->getBrowserInfo($object, $filters, $list);
    }

    /**
     * @throws \Exception
     */
    public function getBrowserInfo($object, $filters='', $list='' ): void
    {
        $this->setService(ServiceName::BrowserInfo->value);
        $this->setObject($object);
        $this->setFilters($filters);
        $this->setList($list);
        $this->send();
    }

    /**
     * @throws \Exception
     */
    public function data($start='', $limit='' ): void
    {
        $this->getBrowserData($start, $limit);
    }

    /**
     * @throws \Exception
     */
    public function getBrowserData( $start='', $limit='' ): void
    {
        $this->setService(ServiceName::BrowserData->value);
        $this->setReqId($this->response->reqID);
        $this->start($start);
        $this->limit($limit);
        $this->send();
    }

    /**
     * @throws \Exception
     */
    public function getData( $object , $key ): void
    {
        $this->setService(ServiceName::GetData->value);
        $this->setObject($object);
        $this->setKey($key);
        $this->send();
    }


}
