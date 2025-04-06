<?php

declare(strict_types=1);

namespace Vonage\Client\Callback;

use InvalidArgumentException;
use RuntimeException;

use function array_diff;
use function array_keys;
use function array_merge;
use function implode;
use function strtolower;

class Callback implements CallbackInterface
{
    public const ENV_ALL = 'all';
    public const ENV_POST = 'post';
    public const ENV_GET = 'get';

<<<<<<< HEAD
    /**
     * @var array
     */
    protected $expected = [];

    /**
     * @var array
     */
    protected $data;
=======
    protected array $expected = [];

    protected array $data;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    public function __construct(array $data)
    {
        $keys = array_keys($data);
        $missing = array_diff($this->expected, $keys);

        if ($missing) {
            throw new RuntimeException('missing expected callback keys: ' . implode(', ', $missing));
        }

        $this->data = $data;
    }

    public function getData(): array
    {
        return $this->data;
    }

<<<<<<< HEAD
    /**
     * @return Callback|callable
     */
    public static function fromEnv(string $source = self::ENV_ALL)
=======
    public static function fromEnv(string $source = self::ENV_ALL): callable|Callback
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $data = match (strtolower($source)) {
            'post' => $_POST,
            'get' => $_GET,
            'all' => array_merge($_GET, $_POST),
            default => throw new InvalidArgumentException('invalid source: ' . $source),
        };

        return new static($data);
    }
}
