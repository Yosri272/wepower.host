<?php

namespace Vonage\Messages\MessageObjects;

use Vonage\Entity\Hydrator\ArrayHydrateInterface;

class AudioObject implements ArrayHydrateInterface
{
<<<<<<< HEAD
    public function __construct(private string $url, private string $caption = '')
=======
    /**
     * Legacy to pass in a caption as this should never have been supported. Nothing will happen if you pass one in.
     */
    public function __construct(private string $url, private readonly ?string $caption = null)
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
    }

    public function fromArray(array $data): AudioObject
    {
        $this->url = $data['url'];

<<<<<<< HEAD
        if (isset($data['caption'])) {
            $this->caption = $data['caption'];
        }

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        return $this;
    }

    public function toArray(): array
    {
<<<<<<< HEAD
        $returnArray = [
            'url' => $this->url
        ];

        if ($this->caption) {
            $returnArray[] = [
                'caption' => $this->caption
            ];
        }

        return $returnArray;
=======
        return [
            'url' => $this->url
        ];
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getUrl(): string
    {
        return $this->url;
    }

<<<<<<< HEAD
    public function getCaption(): string
    {
=======
    /**
     * @deprecated Unsupported
     * @return string
     */
    public function getCaption(): string
    {
        trigger_error(
            'Captions are not supported in this API, this will error at server level.',
            E_USER_DEPRECATED
        );

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        return $this->caption;
    }
}
