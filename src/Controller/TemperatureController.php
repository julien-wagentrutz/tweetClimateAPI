<?php
// src/Controller/TemperatureController.php
namespace App\Controller;


use App\Repository\TemperatureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;

class TemperatureController extends AbstractController
{

	public function getTemperatureForOneCountry($countryId,TemperatureRepository $temperatureRepository, SerializerInterface  $serializer)
	{
		//get temperature with country id
		$temperature = $temperatureRepository->getTemperatureWithCountryId($countryId);


		//Data to JSON
		$data = $serializer->serialize($temperature,'json');
		//Prepare Response
		$response = new JsonResponse();
		$response->headers->set('Content-Type', 'application/json');
		$response->setContent($data);

		return $response;
	}
}