# httpstatus constants

## How To Install

composer require lkj/httpstatus

## Where To Use

This package might be useful when you are creating microservices or building API's.

## How to use

use HttpStatus\Response;

$response_obj = new Response;

$sucees_reponse = $response_obj::SUCCESS_OK;

###IF you need to use only status code or status message then you can use Code or Message Class.
