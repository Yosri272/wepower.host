<?php

declare(strict_types=1);

namespace Vonage\Numbers;

use Psr\Http\Client\ClientExceptionInterface;
use Vonage\Client\APIClient;
use Vonage\Client\APIResource;
use Vonage\Client\Exception as ClientException;
use Vonage\Client\Exception\Exception;
use Vonage\Client\Exception\Request;
use Vonage\Client\Exception\Server;
use Vonage\Client\Exception\ThrottleException;
use Vonage\Entity\Filter\FilterInterface;
use Vonage\Entity\IterableAPICollection;
use Vonage\Numbers\Filter\AvailableNumbers;
use Vonage\Numbers\Filter\OwnedNumbers;

use function count;
use function is_null;
use function sleep;
use function trigger_error;

class Client implements APIClient
{
    public function __construct(protected ?APIResource $api = null)
    {
    }

    public function getApiResource(): APIResource
    {
        return $this->api;
    }

    /**
<<<<<<< HEAD
     * @param Number $number
     * @param string|null $id
     *
     * @return Number
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @throws ClientExceptionInterface
     * @throws Exception
     * @throws Request
     * @throws Server
     */
    public function update(Number $number, ?string $id = null): Number
    {
        if (!is_null($id)) {
            $update = $this->get($id);
        }

        $body = $number->toArray();
        if (!isset($update) && !isset($body['country'])) {
            $data = $this->get($number->getId());
            $body['msisdn'] = $data->getId();
            $body['country'] = $data->getCountry();
        }

        if (isset($update)) {
            $body['msisdn'] = $update->getId();
            $body['country'] = $update->getCountry();
        }

        unset($body['features'], $body['type']);

        $api = $this->getApiResource();
        $api->submit($body, '/number/update');

        if (isset($update)) {
            try {
                return $this->get($number->getId());
            } catch (ThrottleException) {
                sleep(1); // This API is 1 request per second :/
                return $this->get($number->getId());
            }
        }

        try {
            return $this->get($number->getId());
        } catch (ThrottleException) {
            sleep(1); // This API is 1 request per second :/
            return $this->get($number->getId());
        }
    }

    /**
<<<<<<< HEAD
     * Returns a number
     *
     * @param string $number Number to fetch, deprecating passing a `Number` object
     *
     * @return Number
=======
     * @param string $number Number to fetch, deprecating passing a `Number` object
     *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @throws ClientExceptionInterface
     * @throws ClientException\Exception
     * @throws ClientException\Request
     * @throws ClientException\Server
     */
    public function get(string $number): Number
    {
        $items = $this->searchOwned($number);

        // This is legacy behaviour, so we need to keep it even though
        // it isn't technically the correct message
        if (count($items) !== 1) {
            throw new ClientException\Request('number not found', 404);
        }

        return $items[0];
    }

    /**
<<<<<<< HEAD
     * Returns a set of numbers for the specified country
     *
     * @param string $country The two character country code in ISO 3166-1 alpha-2 format
     * @param FilterInterface $options Additional options, see https://developer.nexmo.com/api/numbers#getAvailableNumbers
     *
     * @return array
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @throws ClientExceptionInterface
     * @throws ClientException\Exception
     * @throws ClientException\Request
     * @throws ClientException\Server
     */
<<<<<<< HEAD
    public function searchAvailable(string $country, FilterInterface $options = null): array
=======
    public function searchAvailable(string $country, ?FilterInterface $options = null): array
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if (is_null($options)) {
            $options = new AvailableNumbers([
                'country' => $country
            ]);
        }

        $api = $this->getApiResource();
        $api->setCollectionName('numbers');

        $response = $api->search(
            new AvailableNumbers($options->getQuery() + ['country' => $country]),
            '/number/search'
        );

        $response->setHydrator(new Hydrator());
        $response->setAutoAdvance(false); // The search results on this can be quite large

        return $this->handleNumberSearchResult($response, null);
    }

    /**
<<<<<<< HEAD
     * Returns a set of numbers for the specified country
     *
     * @param null $number
     * @param FilterInterface|null $options
     *
     * @return array
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @throws ClientExceptionInterface
     * @throws ClientException\Exception
     * @throws ClientException\Request
     * @throws ClientException\Server
     */
<<<<<<< HEAD
    public function searchOwned($number = null, FilterInterface $options = null): array
=======
    public function searchOwned($number = null, ?FilterInterface $options = null): array
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if ($number !== null) {
            if ($options !== null) {
                $options->setPattern($number);
            } else {
                $options = new OwnedNumbers([
                    'pattern' => $number
                ]);
            }
        }

        $api = $this->getApiResource();
        $api->setCollectionName('numbers');

        $response = $api->search($options, '/account/numbers');
        $response->setHydrator(new Hydrator());
        $response->setAutoAdvance(false); // The search results on this can be quite large

        return $this->handleNumberSearchResult($response, $number);
    }

    /**
<<<<<<< HEAD
     * @param $number deprecated
     *
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @throws ClientException\Exception
     * @throws ClientException\Request
     * @throws ClientException\Server
     * @throws ClientExceptionInterface
     */
    private function handleNumberSearchResult(IterableAPICollection $response, $number = null): array
    {
        // We're going to return a list of numbers
        $numbers = [];

        // Legacy - If the user passed in a number object, populate that object
        // @deprecated This will eventually return a new clean object
        if ($number instanceof Number && count($response) === 1) {
            $number->fromArray($response->current()->toArray());
            $numbers[] = $number;
        } else {
            foreach ($response as $rawNumber) {
                $numbers[] = $rawNumber;
            }
        }

        return $numbers;
    }

    /**
<<<<<<< HEAD
     * @param $number
     *
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @throws ClientExceptionInterface
     * @throws ClientException\Exception
     */
    public function purchase($number, ?string $country = null): void
    {
        if (!$country) {
            throw new ClientException\Exception(
                "You must supply a country in addition to a number to purchase a number"
            );
        }

        if ($number instanceof Number) {
<<<<<<< HEAD

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            trigger_error(
                'Passing a Number object to Vonage\Number\Client::purchase() is being deprecated, ' .
                'please pass a string MSISDN instead',
                E_USER_DEPRECATED
            );

            $body = [
                'msisdn' => $number->getMsisdn(),
                'country' => $number->getCountry()
            ];
<<<<<<< HEAD
        // Evil else that will be removed in the next major version.
        } else {

=======
            // Evil else that will be removed in the next major version.
        } else {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $body = [
                'msisdn' => $number,
                'country' => $country
            ];
        }

        $api = $this->getApiResource();
        $api->setBaseUri('/number/buy');
        $api->submit($body);
    }

    /**
<<<<<<< HEAD
     * @param string $number
     * @param string|null $country
     *
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @throws ClientExceptionInterface
     * @throws ClientException\Exception
     * @throws ClientException\Request
     * @throws ClientException\Server
     */
    public function cancel(string $number, ?string $country = null): void
    {
        $number = $this->get($number);

        $body = [
            'msisdn' => $number->getMsisdn(),
            'country' => $number->getCountry()
        ];

        $api = $this->getApiResource();
        $api->setBaseUri('/number/cancel');
        $api->submit($body);
    }
}
