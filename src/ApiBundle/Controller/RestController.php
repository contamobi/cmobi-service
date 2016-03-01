<?php

namespace ApiBundle\Controller;

use Application\Domain\ValueObjectInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

abstract class RestController extends Controller
{
    /**
     * @param ValueObjectInterface $response
     * @param $contentType
     * @return Response
     */
    public function handle(ValueObjectInterface $response, $contentType = 'application/json')
    {
        $response = new Response($response);
        $response->headers->set('Content-Type', $contentType);

        return $response;
    }

    /**
     * @param \Exception $e
     * @param $contentType
     * @return Response
     */
    public function handleError(\Exception $e, $contentType = 'application/json')
    {
        $this->get('logger')->error($e->getMessage());
        $content = [
            'error' => 'Failed process request',
            'message' => $e->getMessage()
        ];
        $response = new Response($content, Response::HTTP_INTERNAL_SERVER_ERROR);
        $response->headers->Set('Content-Type', $contentType);

        return $response;
    }
}