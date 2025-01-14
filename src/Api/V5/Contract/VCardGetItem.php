<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class VCardGetItem
{
//    Can be omitted.
//    protected $Id = null;

//    Can be omitted.
//    protected $CampaignId = null;

//    Can be omitted.
//    protected $Country = null;

//    Can be omitted.
//    protected $City = null;

//    Can be omitted.
//    protected $WorkTime = null;

//    Can be omitted.
//    protected $Phone = null;

//    Can be omitted.
//    protected $Street = null;

//    Can be omitted.
//    protected $House = null;

//    Can be omitted.
//    protected $Building = null;

//    Can be omitted.
//    protected $Apartment = null;

//    Can be omitted.
//    protected $InstantMessenger = null;

//    Can be omitted.
//    protected $CompanyName = null;

//    Can be omitted.
//    protected $ExtraMessage = null;

//    Can be omitted.
//    protected $ContactEmail = null;

//    Can be omitted.
//    protected $Ogrn = null;

//    Can be omitted.
//    protected $MetroStationId = null;

//    Can be omitted.
//    protected $PointOnMap = null;

//    Can be omitted.
//    protected $ContactPerson = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * @return $this
     */
    public function setId(?int $value = null)
    {
        $this->Id = $value;

        return $this;
    }

    public function getCampaignId(): ?int
    {
        return $this->CampaignId ?? null;
    }

    /**
     * @return $this
     */
    public function setCampaignId(?int $value = null)
    {
        $this->CampaignId = $value;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->Country ?? null;
    }

    /**
     * @return $this
     */
    public function setCountry(?string $value = null)
    {
        $this->Country = $value;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->City ?? null;
    }

    /**
     * @return $this
     */
    public function setCity(?string $value = null)
    {
        $this->City = $value;

        return $this;
    }

    public function getWorkTime(): ?string
    {
        return $this->WorkTime ?? null;
    }

    /**
     * @return $this
     */
    public function setWorkTime(?string $value = null)
    {
        $this->WorkTime = $value;

        return $this;
    }

    public function getPhone(): ?Phone
    {
        return $this->Phone ?? null;
    }

    /**
     * @return $this
     */
    public function setPhone(?Phone $value = null)
    {
        $this->Phone = $value;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->Street ?? null;
    }

    /**
     * @return $this
     */
    public function setStreet(?string $value = null)
    {
        $this->Street = $value;

        return $this;
    }

    public function getHouse(): ?string
    {
        return $this->House ?? null;
    }

    /**
     * @return $this
     */
    public function setHouse(?string $value = null)
    {
        $this->House = $value;

        return $this;
    }

    public function getBuilding(): ?string
    {
        return $this->Building ?? null;
    }

    /**
     * @return $this
     */
    public function setBuilding(?string $value = null)
    {
        $this->Building = $value;

        return $this;
    }

    public function getApartment(): ?string
    {
        return $this->Apartment ?? null;
    }

    /**
     * @return $this
     */
    public function setApartment(?string $value = null)
    {
        $this->Apartment = $value;

        return $this;
    }

    public function getInstantMessenger(): ?InstantMessenger
    {
        return $this->InstantMessenger ?? null;
    }

    /**
     * @return $this
     */
    public function setInstantMessenger(?InstantMessenger $value = null)
    {
        $this->InstantMessenger = $value;

        return $this;
    }

    public function getCompanyName(): ?string
    {
        return $this->CompanyName ?? null;
    }

    /**
     * @return $this
     */
    public function setCompanyName(?string $value = null)
    {
        $this->CompanyName = $value;

        return $this;
    }

    public function getExtraMessage(): ?string
    {
        return $this->ExtraMessage ?? null;
    }

    /**
     * @return $this
     */
    public function setExtraMessage(?string $value = null)
    {
        $this->ExtraMessage = $value;

        return $this;
    }

    public function getContactEmail(): ?string
    {
        return $this->ContactEmail ?? null;
    }

    /**
     * @return $this
     */
    public function setContactEmail(?string $value = null)
    {
        $this->ContactEmail = $value;

        return $this;
    }

    public function getOgrn(): ?string
    {
        return $this->Ogrn ?? null;
    }

    /**
     * @return $this
     */
    public function setOgrn(?string $value = null)
    {
        $this->Ogrn = $value;

        return $this;
    }

    public function getMetroStationId(): ?int
    {
        return $this->MetroStationId ?? null;
    }

    /**
     * @return $this
     */
    public function setMetroStationId(?int $value = null)
    {
        $this->MetroStationId = $value;

        return $this;
    }

    public function getPointOnMap(): ?MapPoint
    {
        return $this->PointOnMap ?? null;
    }

    /**
     * @return $this
     */
    public function setPointOnMap(?MapPoint $value = null)
    {
        $this->PointOnMap = $value;

        return $this;
    }

    public function getContactPerson(): ?string
    {
        return $this->ContactPerson ?? null;
    }

    /**
     * @return $this
     */
    public function setContactPerson(?string $value = null)
    {
        $this->ContactPerson = $value;

        return $this;
    }
}
