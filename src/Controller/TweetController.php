<?php
// src/Controller/TweetController.php
namespace App\Controller;


use App\Repository\TweetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;

class TweetController extends AbstractController
{

	public function getTweetForOneCountry($countryId,TweetRepository $tweetRepository, SerializerInterface  $serializer)
	{
		//get temperature with country id
		$temperature = $tweetRepository->getTweetWithCountryId($countryId);


		//Data to JSON
		$data = $serializer->serialize($temperature,'json');
		//Prepare Response
		$response = new JsonResponse();
		$response->headers->set('Content-Type', 'application/json');
		$response->setContent($data);

		return $response;
	}
}