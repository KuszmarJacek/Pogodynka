<?php

namespace App\Controller;

use App\Entity\Location;
use App\Repository\LocationRepository;
use App\Repository\WeatherRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WeatherController extends AbstractController
{
    ##[Route('/weather', name: 'app_weather')]
    public function locationWeather(Location $location, WeatherRepository $weatherRepository): Response
    {
        $weatherStatus = $weatherRepository->findByLocation($location);

        return $this->render('weather/city.html.twig', [
            'location' => $location,
            'weatherStatus' => $weatherStatus
        ]);
    }

    #[Route('/weather/{country}/{city}', name: 'weather_in_city_and_country')]
    public function weatherByCountryAndCity(string $country, string $city, LocationRepository $locationRepository): Response
    {
        $weather = $locationRepository->findBy([
            "country" => $country,
            "city" => $city
        ])[0]->getWeather()->getValues();
        
        return $this->render("weather/countryAndCity.html.twig", [
            "weather" => $weather,
            "country" => $country,
            "city" => $city
        ]);
    }
}
