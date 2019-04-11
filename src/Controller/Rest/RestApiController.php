<?php

namespace App\Controller\Rest;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Config\Definition\Exception\Exception;
use App\Entity\EntitiesList;

class RestApiController extends FOSRestController
{
    /**
     * Gets all entities by type
     * @Rest\Get("/entity/{entity_name}")
     * @param string $entity_name
     * @return View
     */
    
    public function EntityList($entity_name)
    {
        try {
            $entity_class = EntitiesList::getEntityClass($entity_name);
            $repository = $this->getDoctrine()->getRepository($entity_class);
            return View::create($repository->findAll(), Response::HTTP_CREATED);
        } catch(Exception $e) {

        }

        
    }

}
