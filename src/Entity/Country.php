<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Country
 *
 * @ORM\Table(name="country")
 * @ORM\Entity(repositoryClass="App\Repository\CountryRepository")
 */
class Country
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CountryName", type="string", length=40, nullable=true)
     */
    private $countryname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CapitalName", type="string", length=19, nullable=true)
     */
    private $capitalname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="latitude", type="string", length=20, nullable=true)
     */
    private $latitude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="longitude", type="string", length=16, nullable=true)
     */
    private $longitude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="countryCode", type="string", length=11, nullable=true)
     */
    private $countrycode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ContinentName", type="string", length=15, nullable=true)
     */
    private $continentname;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCountryname(): ?string
    {
        return $this->countryname;
    }

    public function setCountryname(?string $countryname): self
    {
        $this->countryname = $countryname;

        return $this;
    }

    public function getCapitalname(): ?string
    {
        return $this->capitalname;
    }

    public function setCapitalname(?string $capitalname): self
    {
        $this->capitalname = $capitalname;

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(?string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(?string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getCountrycode(): ?string
    {
        return $this->countrycode;
    }

    public function setCountrycode(?string $countrycode): self
    {
        $this->countrycode = $countrycode;

        return $this;
    }

    public function getContinentname(): ?string
    {
        return $this->continentname;
    }

    public function setContinentname(?string $continentname): self
    {
        $this->continentname = $continentname;

        return $this;
    }


}
