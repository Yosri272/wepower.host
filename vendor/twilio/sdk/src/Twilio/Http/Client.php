<?php


namespace Twilio\Http;


interface Client {
    public function request(string $method, string $url,
                            array $params = [], array $data = [], array $headers = [],
<<<<<<< HEAD
                            string $user = null, string $password = null,
                            int $timeout = null): Response;
=======
                            ?string $user = null, ?string $password = null,
                            ?int $timeout = null): Response;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
