<?php
// src/Controller/CountryController.php
namespace App\Controller;

use App\Repository\AuthorRepository;
use App\Repository\CountryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;

class CountryController extends AbstractController
{

	public function getCountry(AuthorRepository $authorRepository, CountryRepository $countryRepository, SerializerInterface  $serializer)
	{
		//GET date From DataBase
		$nbOfCountry = 15;
		//GET info from DB of ALL Author DISTINCT where country is not null
		$authors = $authorRepository->getAuthorWithACountry();

		// Select 15 with different author put in array
		$country = array();
		$countrySelected = array();
		$isComplet = false;

		while(!$isComplet)
		{
			$randomNum = rand(0,count($authors)-1);
			if(!in_array($authors[$randomNum]-> getCountryid(), $countrySelected))
			{
				array_push($countrySelected,$authors[$randomNum]-> getCountryid());
				array_push($country,$authors[$randomNum]);
			}

			if(count($country) == $nbOfCountry)
			{$isComplet = true;}
		}

		// Select 5 country which was not in the 15 country selected before and put in same array




		//Data to JSON
		$data = $serializer->serialize($country,'json');
		//Prepare Response
		$response = new JsonResponse();
		$response->headers->set('Content-Type', 'application/json');
		$response->setContent($data);

		return $response;
	}
}