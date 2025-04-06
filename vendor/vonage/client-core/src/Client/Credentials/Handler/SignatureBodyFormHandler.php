<?php

namespace Vonage\Client\Credentials\Handler;

<<<<<<< HEAD
=======
use GuzzleHttp\Psr7\Utils;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Psr\Http\Message\RequestInterface;
use Vonage\Client\Credentials\CredentialsInterface;
use Vonage\Client\Credentials\SignatureSecret;
use Vonage\Client\Signature;

class SignatureBodyFormHandler extends AbstractHandler
{
    public function __invoke(RequestInterface $request, CredentialsInterface $credentials): RequestInterface
    {
        $credentials = $this->extract(SignatureSecret::class, $credentials);
        $credentialsArray = $credentials->asArray();

        $body = $request->getBody();
        $body->rewind();
        $content = $body->getContents();
<<<<<<< HEAD
=======

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $params = [];
        parse_str($content, $params);
        $params['api_key'] = $credentialsArray['api_key'];

        $signature = new Signature(
            $params,
            $credentialsArray['signature_secret'],
            $credentialsArray['signature_method']
        );

        $params = $signature->getSignedParams();
<<<<<<< HEAD
        $body->rewind();
        $body->write(http_build_query($params, '', '&'));

        return $request;
=======

        $newBody = Utils::streamFor(http_build_query($params, '', '&'));
        return $request->withBody($newBody);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }
}
