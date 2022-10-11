<?php

namespace App\Entity;

use App\Repository\WeatherRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WeatherRepository::class)]
class Weather
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'weather')]
    #[ORM\JoinColumn(nullable: false)]
    private ?location $FK_location = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: '0')]
    private ?string $max_temp = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: '0')]
    private ?string $min_temp = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 5, scale: 1)]
    private ?string $pressure = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: '0')]
    private ?string $humidity = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: '0')]
    private ?string $precipitation = null;

    #[ORM\Column]
    private ?bool $sunny = null;

    #[ORM\Column]
    private ?bool $cloudy = null;

    #[ORM\Column]
    private ?bool $fog = null;

    #[ORM\Column]
    private ?bool $raining = null;

    #[ORM\Column]
    private ?bool $lightning = null;

    #[ORM\Column]
    private ?bool $snow = null;

    #[ORM\Column]
    private ?bool $wind = null;

    #[ORM\Column]
    private ?bool $tornado = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFKLocation(): ?location
    {
        return $this->FK_location;
    }

    public function setFKLocation(?location $FK_location): self
    {
        $this->FK_location = $FK_location;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getMaxTemp(): ?string
    {
        return $this->max_temp;
    }

    public function setMaxTemp(string $max_temp): self
    {
        $this->max_temp = $max_temp;

        return $this;
    }

    public function getMinTemp(): ?string
    {
        return $this->min_temp;
    }

    public function setMinTemp(string $min_temp): self
    {
        $this->min_temp = $min_temp;

        return $this;
    }

    public function getPressure(): ?string
    {
        return $this->pressure;
    }

    public function setPressure(string $pressure): self
    {
        $this->pressure = $pressure;

        return $this;
    }

    public function getHumidity(): ?string
    {
        return $this->humidity;
    }

    public function setHumidity(string $humidity): self
    {
        $this->humidity = $humidity;

        return $this;
    }

    public function getPrecipitation(): ?string
    {
        return $this->precipitation;
    }

    public function setPrecipitation(string $precipitation): self
    {
        $this->precipitation = $precipitation;

        return $this;
    }

    public function isSunny(): ?bool
    {
        return $this->sunny;
    }

    public function setSunny(bool $sunny): self
    {
        $this->sunny = $sunny;

        return $this;
    }

    public function isCloudy(): ?bool
    {
        return $this->cloudy;
    }

    public function setCloudy(bool $cloudy): self
    {
        $this->cloudy = $cloudy;

        return $this;
    }

    public function isFog(): ?bool
    {
        return $this->fog;
    }

    public function setFog(bool $fog): self
    {
        $this->fog = $fog;

        return $this;
    }

    public function isRaining(): ?bool
    {
        return $this->raining;
    }

    public function setRaining(bool $raining): self
    {
        $this->raining = $raining;

        return $this;
    }

    public function isLightning(): ?bool
    {
        return $this->lightning;
    }

    public function setLightning(bool $lightning): self
    {
        $this->lightning = $lightning;

        return $this;
    }

    public function isSnow(): ?bool
    {
        return $this->snow;
    }

    public function setSnow(bool $snow): self
    {
        $this->snow = $snow;

        return $this;
    }

    public function isWind(): ?bool
    {
        return $this->wind;
    }

    public function setWind(bool $wind): self
    {
        $this->wind = $wind;

        return $this;
    }

    public function isTornado(): ?bool
    {
        return $this->tornado;
    }

    public function setTornado(bool $tornado): self
    {
        $this->tornado = $tornado;

        return $this;
    }
}
