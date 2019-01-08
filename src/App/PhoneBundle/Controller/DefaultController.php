<?php

namespace App\PhoneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 
class DefaultController extends Controller
{
    public function indexAction()
    { 
        $dataDetectTimezoneByNumber = $this->get('PhoneService')->detectTimezoneByNumber("+79851234567");
        var_dump($dataDetectTimezoneByNumber);
		exit('exit');
    }
}
