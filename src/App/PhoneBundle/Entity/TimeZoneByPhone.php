<?php

namespace App\PhoneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TimeZoneByPhone
 *
 * @ORM\Table(name="time_zone_by_phone")
 * @ORM\Entity(repositoryClass="App\PhoneBundle\Repository\TimeZoneByPhoneRepository")
 */
class TimeZoneByPhone
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="first_code", type="integer")
     */
    private $firstCode;

    /**
     * @var int
     *
     * @ORM\Column(name="from_code", type="integer")
     */
    private $fromCode;

    /**
     * @var int
     *
     * @ORM\Column(name="to_code", type="integer")
     */
    private $toCode;

    /**
     * @var int
     *
     * @ORM\Column(name="block_size", type="integer")
     */
    private $blockSize;

    /**
     * @var string
     *
     * @ORM\Column(name="operator", type="string", length=100)
     */
    private $operator;

    /**
     * @var int
     *
     * @ORM\Column(name="region", type="integer")
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="region_name", type="string", length=255)
     */
    private $regionName;

    /**
     * @var string
     *
     * @ORM\Column(name="timezone", type="string", length=255)
     */
    private $timezone;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_type", type="string", length=25)
     */
    private $phoneType;

    /**
     * @var string
     *
     * @ORM\Column(name="gmt", type="string", length=255)
     */
    private $gmt;

    /**
     * @var string
     *
     * @ORM\Column(name="MNC", type="string", length=255)
     */
    private $mNC;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstCode
     *
     * @param integer $firstCode
     *
     * @return TimeZoneByPhone
     */
    public function setFirstCode($firstCode)
    {
        $this->firstCode = $firstCode;

        return $this;
    }

    /**
     * Get firstCode
     *
     * @return int
     */
    public function getFirstCode()
    {
        return $this->firstCode;
    }

    /**
     * Set fromCode
     *
     * @param integer $fromCode
     *
     * @return TimeZoneByPhone
     */
    public function setFromCode($fromCode)
    {
        $this->fromCode = $fromCode;

        return $this;
    }

    /**
     * Get fromCode
     *
     * @return int
     */
    public function getFromCode()
    {
        return $this->fromCode;
    }

    /**
     * Set toCode
     *
     * @param integer $toCode
     *
     * @return TimeZoneByPhone
     */
    public function setToCode($toCode)
    {
        $this->toCode = $toCode;

        return $this;
    }

    /**
     * Get toCode
     *
     * @return int
     */
    public function getToCode()
    {
        return $this->toCode;
    }

    /**
     * Set blockSize
     *
     * @param integer $blockSize
     *
     * @return TimeZoneByPhone
     */
    public function setBlockSize($blockSize)
    {
        $this->blockSize = $blockSize;

        return $this;
    }

    /**
     * Get blockSize
     *
     * @return int
     */
    public function getBlockSize()
    {
        return $this->blockSize;
    }

    /**
     * Set operator
     *
     * @param string $operator
     *
     * @return TimeZoneByPhone
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;

        return $this;
    }

    /**
     * Get operator
     *
     * @return string
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Set region
     *
     * @param integer $region
     *
     * @return TimeZoneByPhone
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return int
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set regionName
     *
     * @param string $regionName
     *
     * @return TimeZoneByPhone
     */
    public function setRegionName($regionName)
    {
        $this->regionName = $regionName;

        return $this;
    }

    /**
     * Get regionName
     *
     * @return string
     */
    public function getRegionName()
    {
        return $this->regionName;
    }

    /**
     * Set timezone
     *
     * @param string $timezone
     *
     * @return TimeZoneByPhone
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * Get timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * Set phoneType
     *
     * @param string $phoneType
     *
     * @return TimeZoneByPhone
     */
    public function setPhoneType($phoneType)
    {
        $this->phoneType = $phoneType;

        return $this;
    }

    /**
     * Get phoneType
     *
     * @return string
     */
    public function getPhoneType()
    {
        return $this->phoneType;
    }

    /**
     * Set gmt
     *
     * @param string $gmt
     *
     * @return TimeZoneByPhone
     */
    public function setGmt($gmt)
    {
        $this->gmt = $gmt;

        return $this;
    }

    /**
     * Get gmt
     *
     * @return string
     */
    public function getGmt()
    {
        return $this->gmt;
    }

    /**
     * Set mNC
     *
     * @param string $mNC
     *
     * @return TimeZoneByPhone
     */
    public function setMNC($mNC)
    {
        $this->mNC = $mNC;

        return $this;
    }

    /**
     * Get mNC
     *
     * @return string
     */
    public function getMNC()
    {
        return $this->mNC;
    }
}

