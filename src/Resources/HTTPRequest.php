<?php

namespace NigelCunningham\Puphpeteer\Resources;

use NigelCunningham\Rialto\Data\BasicResource;

/**
 * @method string url()
 * @method-extended string url()
 * @method mixed continueRequestOverrides()
 * @method-extended mixed continueRequestOverrides()
 * @method mixed responseForRequest()
 * @method-extended mixed responseForRequest()
 * @method mixed abortErrorReason()
 * @method-extended mixed abortErrorReason()
 * @method mixed interceptResolutionState()
 * @method-extended mixed interceptResolutionState()
 * @method bool isInterceptResolutionHandled()
 * @method-extended bool isInterceptResolutionHandled()
 * @method void enqueueInterceptAction(\NigelCunningham\Rialto\Data\JsFunction $pendingHandler)
 * @method-extended void enqueueInterceptAction(callable(): null|mixed|\NigelCunningham\Rialto\Data\JsFunction $pendingHandler)
 * @method void finalizeInterceptions()
 * @method-extended void finalizeInterceptions()
 * @method mixed resourceType()
 * @method-extended mixed resourceType()
 * @method string method()
 * @method-extended string method()
 * @method string|null postData()
 * @method-extended string|null postData()
 * @method array|string[]|string[] headers()
 * @method-extended array|string[]|string[] headers()
 * @method \NigelCunningham\Puphpeteer\Resources\HTTPResponse|null response()
 * @method-extended \NigelCunningham\Puphpeteer\Resources\HTTPResponse|null response()
 * @method \NigelCunningham\Puphpeteer\Resources\Frame|null frame()
 * @method-extended \NigelCunningham\Puphpeteer\Resources\Frame|null frame()
 * @method bool isNavigationRequest()
 * @method-extended bool isNavigationRequest()
 * @method mixed initiator()
 * @method-extended mixed initiator()
 * @method \NigelCunningham\Puphpeteer\Resources\HTTPRequest[] redirectChain()
 * @method-extended \NigelCunningham\Puphpeteer\Resources\HTTPRequest[] redirectChain()
 * @method array|null failure()
 * @method-extended array{ errorText: string }|null failure()
 * @method void continue(mixed $overrides = null, float $priority = null)
 * @method-extended void continue(mixed $overrides = null, float $priority = null)
 * @method void respond(mixed $response, float $priority = null)
 * @method-extended void respond(mixed $response, float $priority = null)
 * @method void abort(mixed $errorCode = null, float $priority = null)
 * @method-extended void abort(mixed $errorCode = null, float $priority = null)
 */
class HTTPRequest extends BasicResource
{
    //
}
