<?php

namespace App\Controller;

use App\Entity\Location;
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

    public function weatherByCountryAndCity(): Response 
    {
        return $this->render("weather/countryAndCity.html.twig");
    }
}
