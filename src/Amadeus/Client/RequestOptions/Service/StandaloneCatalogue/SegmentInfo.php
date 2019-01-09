<?php

namespace Amadeus\Client\RequestOptions\Service\StandaloneCatalogue;


/**
 * Class SegmentInfo
 * @package Amadeus\Client\RequestOptions\Service\StandaloneCatalogue
 */
class SegmentInfo
{
    /**
     * @var string
     */
    private $boardPointDetailsTrueLocationId;

    /**
     * @var string
     */
    private $offPointDetailsTrueLocationId;

    /**
     * @var string
     */
    private $departureDate;

    /**
     * @var string
     */
    private $departureTime;

    /**
     * @var string
     */
    private $flightNumber;

    /**
     * @var string
     */
    private $bookingClass;

    /**
     * @var string
     */
    private $marketingCompany;

    /**
     * @var string
     */
    private $operatingCompany;

    /**
     * @var string
     */
    private $flightIndicator;

    /**
     * @return string
     */
    public function getBoardPointDetailsTrueLocationId()
    {
        return $this->boardPointDetailsTrueLocationId;
    }

    /**
     * @param string $boardPointDetailsTrueLocationId
     * @return SegmentInfo
     */
    public function setBoardPointDetailsTrueLocationId($boardPointDetailsTrueLocationId)
    {
        $this->boardPointDetailsTrueLocationId = $boardPointDetailsTrueLocationId;

        return $this;
    }

    /**
     * @return string
     */
    public function getOffPointDetailsTrueLocationId()
    {
        return $this->offPointDetailsTrueLocationId;
    }

    /**
     * @param string $offPointDetailsTrueLocationId
     * @return SegmentInfo
     */
    public function setOffPointDetailsTrueLocationId($offPointDetailsTrueLocationId)
    {
        $this->offPointDetailsTrueLocationId = $offPointDetailsTrueLocationId;

        return $this;
    }

    /**
     * @return string
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * @param string $departureDate
     * @return SegmentInfo
     */
    public function setDepartureDate($departureDate)
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getDepartureTime()
    {
        return $this->departureTime;
    }

    /**
     * @param string $departureTime
     * @return SegmentInfo
     */
    public function setDepartureTime($departureTime)
    {
        $this->departureTime = $departureTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getFlightNumber()
    {
        return $this->flightNumber;
    }

    /**
     * @param string $flightNumber
     * @return SegmentInfo
     */
    public function setFlightNumber($flightNumber)
    {
        $this->flightNumber = $flightNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getBookingClass()
    {
        return $this->bookingClass;
    }

    /**
     * @param string $bookingClass
     * @return SegmentInfo
     */
    public function setBookingClass($bookingClass)
    {
        $this->bookingClass = $bookingClass;

        return $this;
    }

    /**
     * @return string
     */
    public function getMarketingCompany()
    {
        return $this->marketingCompany;
    }

    /**
     * @param string $marketingCompany
     * @return SegmentInfo
     */
    public function setMarketingCompany($marketingCompany)
    {
        $this->marketingCompany = $marketingCompany;

        return $this;
    }

    /**
     * @return string
     */
    public function getOperatingCompany()
    {
        return $this->operatingCompany;
    }

    /**
     * @param string $operatingCompany
     * @return SegmentInfo
     */
    public function setOperatingCompany($operatingCompany)
    {
        $this->operatingCompany = $operatingCompany;

        return $this;
    }

    /**
     * @return string
     */
    public function getFlightIndicator()
    {
        return $this->flightIndicator;
    }

    /**
     * @param string $flightIndicator
     * @return SegmentInfo
     */
    public function setFlightIndicator($flightIndicator)
    {
        $this->flightIndicator = $flightIndicator;

        return $this;
    }
}