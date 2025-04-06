<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\VarDumper\Dumper;

use Symfony\Component\VarDumper\Cloner\Data;
use Symfony\Component\VarDumper\Dumper\ContextProvider\ContextProviderInterface;
use Symfony\Component\VarDumper\Server\Connection;

/**
 * ServerDumper forwards serialized Data clones to a server.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class ServerDumper implements DataDumperInterface
{
    private Connection $connection;
<<<<<<< HEAD
    private ?DataDumperInterface $wrappedDumper;
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * @param string                     $host             The server host
     * @param DataDumperInterface|null   $wrappedDumper    A wrapped instance used whenever we failed contacting the server
     * @param ContextProviderInterface[] $contextProviders Context providers indexed by context name
     */
<<<<<<< HEAD
    public function __construct(string $host, ?DataDumperInterface $wrappedDumper = null, array $contextProviders = [])
    {
        $this->connection = new Connection($host, $contextProviders);
        $this->wrappedDumper = $wrappedDumper;
=======
    public function __construct(
        string $host,
        private ?DataDumperInterface $wrappedDumper = null,
        array $contextProviders = [],
    ) {
        $this->connection = new Connection($host, $contextProviders);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getContextProviders(): array
    {
        return $this->connection->getContextProviders();
    }

<<<<<<< HEAD
    /**
     * @return string|null
     */
    public function dump(Data $data)
=======
    public function dump(Data $data): ?string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if (!$this->connection->write($data) && $this->wrappedDumper) {
            return $this->wrappedDumper->dump($data);
        }

        return null;
    }
}
