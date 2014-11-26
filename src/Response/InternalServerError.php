<?php namespace Phrest\Response;

use Phrest\HttpFoundation\Response;

class InternalServerError extends Response
{
    /**
     * @param mixed $content The response content, see setContent()
     * @param array $headers An array of response headers
     *
     * @throws \InvalidArgumentException When the HTTP status code is not valid
     *
     * @api
     */
    public function __construct($content = '', $headers = array())
    {
        parent::__construct($content, Response::HTTP_INTERNAL_SERVER_ERROR, $headers);
    }
}
