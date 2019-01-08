<?php
namespace App\PhoneBundle\Service;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;

class PhoneService
{
    private $container;
    private $code = null;
    private $phone = null;
    private const API_LINK = 'https://calltools.ru/lk/cabapi_external/api/v1/def_codes/by_phone/?phone=%2B7';

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    /**
     * @return $this
     */
    private function phone()
    {
        $this->phone = preg_replace("/[^0-9]/", "", $this->phone);
        $this->phone = substr($this->phone, -10);
        return $this;
    }

    /**
     * @return $this
     */
    private function code()
    {
        $this->code = substr($this->phone, 0, 3);
        return $this;
    }

    /**
     * @param $phone
     * @return array|null
     */
    public function detectTimezoneByNumber($phone)
    {
        $this->phone = $phone;
        $this->phone()->code();

        $dataTimeZoneByPhone = $this->container->get('doctrine')->getRepository('PhoneBundle:TimeZoneByPhone')
            ->foundTimeZoneByPhone($this->code);

        if (null == $dataTimeZoneByPhone) {
            if ('ok' == $this->callToolsApi()->status) {
                $dataCallToolsApi = $this->save($this->callToolsApi());
                return array(
                    'gmt' => $dataCallToolsApi->data->GMT,
                    'region_name' => $dataCallToolsApi->data->region_name,
                );
            } else {
                return null;
            }
        } else {
            return $dataTimeZoneByPhone;
        }
    }

    /**
     * @param $obj
     * @return mixed
     */
    private function save($obj)
    {
        $this->container->get('doctrine')
            ->getRepository('PhoneBundle:TimeZoneByPhone')
            ->saveTimeZoneByPhone($obj);
        return $obj;
    }

    /**
     * @return mixed
     */
    private function callToolsApi()
    {
        set_time_limit(0);
        return json_decode(file_get_contents(self::API_LINK . $this->phone));
    }

}
