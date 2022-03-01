<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Temperature
 *
 * @ORM\Table(name="temperature", indexes={@ORM\Index(name="countryId", columns={"countryId"})})
 * @ORM\Entity(repositoryClass="App\Repository\TemperatureRepository")
 */
class Temperature
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
     * @var int
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $areaCode;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=44, nullable=true)
     */
    private $area;

    /**
     * @var int
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $monthsCode;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=19, nullable=true)
     */
    private $months;

    /**
     * @var int|null
     *
     * @ORM\Column(type="integer", nullable=true)
     */
    private $elementCode;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=18, nullable=true)
     */
    private $element;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $unit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1961", type="string", length=9, nullable=true)
     */
    private $y1961;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1962", type="string", length=9, nullable=true)
     */
    private $y1962;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1963", type="string", length=9, nullable=true)
     */
    private $y1963;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1964", type="string", length=9, nullable=true)
     */
    private $y1964;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1965", type="string", length=9, nullable=true)
     */
    private $y1965;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1966", type="string", length=9, nullable=true)
     */
    private $y1966;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1967", type="string", length=9, nullable=true)
     */
    private $y1967;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1968", type="string", length=9, nullable=true)
     */
    private $y1968;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1969", type="string", length=9, nullable=true)
     */
    private $y1969;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1970", type="string", length=9, nullable=true)
     */
    private $y1970;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1971", type="string", length=9, nullable=true)
     */
    private $y1971;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1972", type="string", length=9, nullable=true)
     */
    private $y1972;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1973", type="string", length=9, nullable=true)
     */
    private $y1973;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1974", type="string", length=9, nullable=true)
     */
    private $y1974;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1975", type="string", length=9, nullable=true)
     */
    private $y1975;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1976", type="string", length=9, nullable=true)
     */
    private $y1976;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1977", type="string", length=9, nullable=true)
     */
    private $y1977;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1978", type="string", length=9, nullable=true)
     */
    private $y1978;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1979", type="string", length=9, nullable=true)
     */
    private $y1979;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1980", type="string", length=9, nullable=true)
     */
    private $y1980;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1981", type="string", length=9, nullable=true)
     */
    private $y1981;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1982", type="string", length=9, nullable=true)
     */
    private $y1982;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1983", type="string", length=9, nullable=true)
     */
    private $y1983;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1984", type="string", length=9, nullable=true)
     */
    private $y1984;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1985", type="string", length=9, nullable=true)
     */
    private $y1985;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1986", type="string", length=9, nullable=true)
     */
    private $y1986;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1987", type="string", length=9, nullable=true)
     */
    private $y1987;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1988", type="string", length=9, nullable=true)
     */
    private $y1988;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1989", type="string", length=9, nullable=true)
     */
    private $y1989;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1990", type="string", length=9, nullable=true)
     */
    private $y1990;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1991", type="string", length=9, nullable=true)
     */
    private $y1991;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1992", type="string", length=9, nullable=true)
     */
    private $y1992;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1993", type="string", length=9, nullable=true)
     */
    private $y1993;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1994", type="string", length=9, nullable=true)
     */
    private $y1994;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1995", type="string", length=9, nullable=true)
     */
    private $y1995;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1996", type="string", length=9, nullable=true)
     */
    private $y1996;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1997", type="string", length=9, nullable=true)
     */
    private $y1997;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1998", type="string", length=9, nullable=true)
     */
    private $y1998;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y1999", type="string", length=9, nullable=true)
     */
    private $y1999;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y2000", type="string", length=9, nullable=true)
     */
    private $y2000;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y2001", type="string", length=9, nullable=true)
     */
    private $y2001;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y2002", type="string", length=9, nullable=true)
     */
    private $y2002;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y2003", type="string", length=9, nullable=true)
     */
    private $y2003;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y2004", type="string", length=9, nullable=true)
     */
    private $y2004;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y2005", type="string", length=9, nullable=true)
     */
    private $y2005;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y2006", type="string", length=9, nullable=true)
     */
    private $y2006;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y2007", type="string", length=9, nullable=true)
     */
    private $y2007;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y2008", type="string", length=9, nullable=true)
     */
    private $y2008;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y2009", type="string", length=9, nullable=true)
     */
    private $y2009;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y2010", type="string", length=9, nullable=true)
     */
    private $y2010;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y2011", type="string", length=9, nullable=true)
     */
    private $y2011;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y2012", type="string", length=9, nullable=true)
     */
    private $y2012;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y2013", type="string", length=9, nullable=true)
     */
    private $y2013;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y2014", type="string", length=9, nullable=true)
     */
    private $y2014;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y2015", type="string", length=9, nullable=true)
     */
    private $y2015;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y2016", type="string", length=9, nullable=true)
     */
    private $y2016;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y2017", type="string", length=9, nullable=true)
     */
    private $y2017;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y2018", type="string", length=9, nullable=true)
     */
    private $y2018;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Y2019", type="string", length=9, nullable=true)
     */
    private $y2019;

    /**
     * @var \Country
     *
     * @ORM\ManyToOne(targetEntity="Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="countryId", referencedColumnName="id")
     * })
     */
    private $countryid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAreaCode(): ?int
    {
        return $this->areaCode;
    }

    public function setAreaCode(?int $areaCode): self
    {
        $this->areaCode = $areaCode;

        return $this;
    }

    public function getArea(): ?string
    {
        return $this->area;
    }

    public function setArea(?string $area): self
    {
        $this->area = $area;

        return $this;
    }

    public function getMonthsCode(): ?int
    {
        return $this->monthsCode;
    }

    public function setMonthsCode(?int $monthsCode): self
    {
        $this->monthsCode = $monthsCode;

        return $this;
    }

    public function getMonths(): ?string
    {
        return $this->months;
    }

    public function setMonths(?string $months): self
    {
        $this->months = $months;

        return $this;
    }

    public function getElementCode(): ?int
    {
        return $this->elementCode;
    }

    public function setElementCode(?int $elementCode): self
    {
        $this->elementCode = $elementCode;

        return $this;
    }

    public function getElement(): ?string
    {
        return $this->element;
    }

    public function setElement(?string $element): self
    {
        $this->element = $element;

        return $this;
    }

    public function getUnit(): ?string
    {
        return $this->unit;
    }

    public function setUnit(?string $unit): self
    {
        $this->unit = $unit;

        return $this;
    }

    public function getY1961(): ?string
    {
        return $this->y1961;
    }

    public function setY1961(?string $y1961): self
    {
        $this->y1961 = $y1961;

        return $this;
    }

    public function getY1962(): ?string
    {
        return $this->y1962;
    }

    public function setY1962(?string $y1962): self
    {
        $this->y1962 = $y1962;

        return $this;
    }

    public function getY1963(): ?string
    {
        return $this->y1963;
    }

    public function setY1963(?string $y1963): self
    {
        $this->y1963 = $y1963;

        return $this;
    }

    public function getY1964(): ?string
    {
        return $this->y1964;
    }

    public function setY1964(?string $y1964): self
    {
        $this->y1964 = $y1964;

        return $this;
    }

    public function getY1965(): ?string
    {
        return $this->y1965;
    }

    public function setY1965(?string $y1965): self
    {
        $this->y1965 = $y1965;

        return $this;
    }

    public function getY1966(): ?string
    {
        return $this->y1966;
    }

    public function setY1966(?string $y1966): self
    {
        $this->y1966 = $y1966;

        return $this;
    }

    public function getY1967(): ?string
    {
        return $this->y1967;
    }

    public function setY1967(?string $y1967): self
    {
        $this->y1967 = $y1967;

        return $this;
    }

    public function getY1968(): ?string
    {
        return $this->y1968;
    }

    public function setY1968(?string $y1968): self
    {
        $this->y1968 = $y1968;

        return $this;
    }

    public function getY1969(): ?string
    {
        return $this->y1969;
    }

    public function setY1969(?string $y1969): self
    {
        $this->y1969 = $y1969;

        return $this;
    }

    public function getY1970(): ?string
    {
        return $this->y1970;
    }

    public function setY1970(?string $y1970): self
    {
        $this->y1970 = $y1970;

        return $this;
    }

    public function getY1971(): ?string
    {
        return $this->y1971;
    }

    public function setY1971(?string $y1971): self
    {
        $this->y1971 = $y1971;

        return $this;
    }

    public function getY1972(): ?string
    {
        return $this->y1972;
    }

    public function setY1972(?string $y1972): self
    {
        $this->y1972 = $y1972;

        return $this;
    }

    public function getY1973(): ?string
    {
        return $this->y1973;
    }

    public function setY1973(?string $y1973): self
    {
        $this->y1973 = $y1973;

        return $this;
    }

    public function getY1974(): ?string
    {
        return $this->y1974;
    }

    public function setY1974(?string $y1974): self
    {
        $this->y1974 = $y1974;

        return $this;
    }

    public function getY1975(): ?string
    {
        return $this->y1975;
    }

    public function setY1975(?string $y1975): self
    {
        $this->y1975 = $y1975;

        return $this;
    }

    public function getY1976(): ?string
    {
        return $this->y1976;
    }

    public function setY1976(?string $y1976): self
    {
        $this->y1976 = $y1976;

        return $this;
    }

    public function getY1977(): ?string
    {
        return $this->y1977;
    }

    public function setY1977(?string $y1977): self
    {
        $this->y1977 = $y1977;

        return $this;
    }

    public function getY1978(): ?string
    {
        return $this->y1978;
    }

    public function setY1978(?string $y1978): self
    {
        $this->y1978 = $y1978;

        return $this;
    }

    public function getY1979(): ?string
    {
        return $this->y1979;
    }

    public function setY1979(?string $y1979): self
    {
        $this->y1979 = $y1979;

        return $this;
    }

    public function getY1980(): ?string
    {
        return $this->y1980;
    }

    public function setY1980(?string $y1980): self
    {
        $this->y1980 = $y1980;

        return $this;
    }

    public function getY1981(): ?string
    {
        return $this->y1981;
    }

    public function setY1981(?string $y1981): self
    {
        $this->y1981 = $y1981;

        return $this;
    }

    public function getY1982(): ?string
    {
        return $this->y1982;
    }

    public function setY1982(?string $y1982): self
    {
        $this->y1982 = $y1982;

        return $this;
    }

    public function getY1983(): ?string
    {
        return $this->y1983;
    }

    public function setY1983(?string $y1983): self
    {
        $this->y1983 = $y1983;

        return $this;
    }

    public function getY1984(): ?string
    {
        return $this->y1984;
    }

    public function setY1984(?string $y1984): self
    {
        $this->y1984 = $y1984;

        return $this;
    }

    public function getY1985(): ?string
    {
        return $this->y1985;
    }

    public function setY1985(?string $y1985): self
    {
        $this->y1985 = $y1985;

        return $this;
    }

    public function getY1986(): ?string
    {
        return $this->y1986;
    }

    public function setY1986(?string $y1986): self
    {
        $this->y1986 = $y1986;

        return $this;
    }

    public function getY1987(): ?string
    {
        return $this->y1987;
    }

    public function setY1987(?string $y1987): self
    {
        $this->y1987 = $y1987;

        return $this;
    }

    public function getY1988(): ?string
    {
        return $this->y1988;
    }

    public function setY1988(?string $y1988): self
    {
        $this->y1988 = $y1988;

        return $this;
    }

    public function getY1989(): ?string
    {
        return $this->y1989;
    }

    public function setY1989(?string $y1989): self
    {
        $this->y1989 = $y1989;

        return $this;
    }

    public function getY1990(): ?string
    {
        return $this->y1990;
    }

    public function setY1990(?string $y1990): self
    {
        $this->y1990 = $y1990;

        return $this;
    }

    public function getY1991(): ?string
    {
        return $this->y1991;
    }

    public function setY1991(?string $y1991): self
    {
        $this->y1991 = $y1991;

        return $this;
    }

    public function getY1992(): ?string
    {
        return $this->y1992;
    }

    public function setY1992(?string $y1992): self
    {
        $this->y1992 = $y1992;

        return $this;
    }

    public function getY1993(): ?string
    {
        return $this->y1993;
    }

    public function setY1993(?string $y1993): self
    {
        $this->y1993 = $y1993;

        return $this;
    }

    public function getY1994(): ?string
    {
        return $this->y1994;
    }

    public function setY1994(?string $y1994): self
    {
        $this->y1994 = $y1994;

        return $this;
    }

    public function getY1995(): ?string
    {
        return $this->y1995;
    }

    public function setY1995(?string $y1995): self
    {
        $this->y1995 = $y1995;

        return $this;
    }

    public function getY1996(): ?string
    {
        return $this->y1996;
    }

    public function setY1996(?string $y1996): self
    {
        $this->y1996 = $y1996;

        return $this;
    }

    public function getY1997(): ?string
    {
        return $this->y1997;
    }

    public function setY1997(?string $y1997): self
    {
        $this->y1997 = $y1997;

        return $this;
    }

    public function getY1998(): ?string
    {
        return $this->y1998;
    }

    public function setY1998(?string $y1998): self
    {
        $this->y1998 = $y1998;

        return $this;
    }

    public function getY1999(): ?string
    {
        return $this->y1999;
    }

    public function setY1999(?string $y1999): self
    {
        $this->y1999 = $y1999;

        return $this;
    }

    public function getY2000(): ?string
    {
        return $this->y2000;
    }

    public function setY2000(?string $y2000): self
    {
        $this->y2000 = $y2000;

        return $this;
    }

    public function getY2001(): ?string
    {
        return $this->y2001;
    }

    public function setY2001(?string $y2001): self
    {
        $this->y2001 = $y2001;

        return $this;
    }

    public function getY2002(): ?string
    {
        return $this->y2002;
    }

    public function setY2002(?string $y2002): self
    {
        $this->y2002 = $y2002;

        return $this;
    }

    public function getY2003(): ?string
    {
        return $this->y2003;
    }

    public function setY2003(?string $y2003): self
    {
        $this->y2003 = $y2003;

        return $this;
    }

    public function getY2004(): ?string
    {
        return $this->y2004;
    }

    public function setY2004(?string $y2004): self
    {
        $this->y2004 = $y2004;

        return $this;
    }

    public function getY2005(): ?string
    {
        return $this->y2005;
    }

    public function setY2005(?string $y2005): self
    {
        $this->y2005 = $y2005;

        return $this;
    }

    public function getY2006(): ?string
    {
        return $this->y2006;
    }

    public function setY2006(?string $y2006): self
    {
        $this->y2006 = $y2006;

        return $this;
    }

    public function getY2007(): ?string
    {
        return $this->y2007;
    }

    public function setY2007(?string $y2007): self
    {
        $this->y2007 = $y2007;

        return $this;
    }

    public function getY2008(): ?string
    {
        return $this->y2008;
    }

    public function setY2008(?string $y2008): self
    {
        $this->y2008 = $y2008;

        return $this;
    }

    public function getY2009(): ?string
    {
        return $this->y2009;
    }

    public function setY2009(?string $y2009): self
    {
        $this->y2009 = $y2009;

        return $this;
    }

    public function getY2010(): ?string
    {
        return $this->y2010;
    }

    public function setY2010(?string $y2010): self
    {
        $this->y2010 = $y2010;

        return $this;
    }

    public function getY2011(): ?string
    {
        return $this->y2011;
    }

    public function setY2011(?string $y2011): self
    {
        $this->y2011 = $y2011;

        return $this;
    }

    public function getY2012(): ?string
    {
        return $this->y2012;
    }

    public function setY2012(?string $y2012): self
    {
        $this->y2012 = $y2012;

        return $this;
    }

    public function getY2013(): ?string
    {
        return $this->y2013;
    }

    public function setY2013(?string $y2013): self
    {
        $this->y2013 = $y2013;

        return $this;
    }

    public function getY2014(): ?string
    {
        return $this->y2014;
    }

    public function setY2014(?string $y2014): self
    {
        $this->y2014 = $y2014;

        return $this;
    }

    public function getY2015(): ?string
    {
        return $this->y2015;
    }

    public function setY2015(?string $y2015): self
    {
        $this->y2015 = $y2015;

        return $this;
    }

    public function getY2016(): ?string
    {
        return $this->y2016;
    }

    public function setY2016(?string $y2016): self
    {
        $this->y2016 = $y2016;

        return $this;
    }

    public function getY2017(): ?string
    {
        return $this->y2017;
    }

    public function setY2017(?string $y2017): self
    {
        $this->y2017 = $y2017;

        return $this;
    }

    public function getY2018(): ?string
    {
        return $this->y2018;
    }

    public function setY2018(?string $y2018): self
    {
        $this->y2018 = $y2018;

        return $this;
    }

    public function getY2019(): ?string
    {
        return $this->y2019;
    }

    public function setY2019(?string $y2019): self
    {
        $this->y2019 = $y2019;

        return $this;
    }

    public function getCountryid(): ?Country
    {
        return $this->countryid;
    }

    public function setCountryid(?Country $countryid): self
    {
        $this->countryid = $countryid;

        return $this;
    }


}
