<?php

namespace App\PhoneBundle\Repository;

/**
 * TimeZoneByPhoneRepository
 */

use App\PhoneBundle\Entity\TimeZoneByPhone;

class TimeZoneByPhoneRepository extends \Doctrine\ORM\EntityRepository
{

    /**
     * @param $code
     * @return array|null
     */
	public function foundTimeZoneByPhone($code)
	{   
 		$qb = $this->createQueryBuilder('p')
            ->where('p.firstCode = :firstCode')
            ->setParameter('firstCode', (int) $code) 
 			->setMaxResults(1)
            ->getQuery(); 
 
		if ( count($qb->execute()) ) {
		 	 return array(
		 	     'gmt' => $qb->execute()[0]->getGmt(),
                 'region_name' => $qb->execute()[0]->getRegionName(),
             );
		} else {
			return null;
		} 
	}

    /**
     * @param $obj
     * @return mixed
     * @throws \Doctrine\ORM\OptimisticLockException
     */
	public function saveTimeZoneByPhone($obj)
	{ 
		$timeZoneByPhone = new TimeZoneByPhone();
        $timeZoneByPhone->setFirstCode($obj->data->first_code); 
        $timeZoneByPhone->setFromCode($obj->data->from_code); 
        $timeZoneByPhone->setToCode($obj->data->to_code); 
        $timeZoneByPhone->setBlockSize($obj->data->block_size); 
        $timeZoneByPhone->setOperator($obj->data->operator); 
        $timeZoneByPhone->setRegion($obj->data->region); 
        $timeZoneByPhone->setRegionName($obj->data->region_name); 
        $timeZoneByPhone->setTimezone($obj->data->timezone); 
        $timeZoneByPhone->setPhoneType($obj->data->phone_type); 
        $timeZoneByPhone->setGmt($obj->data->GMT); 
        $timeZoneByPhone->setMNC($obj->data->MNC);  

        $em = $this->getEntityManager();
        $em->persist($timeZoneByPhone);
        $em->flush(); 

		return $obj; 
	}
}
