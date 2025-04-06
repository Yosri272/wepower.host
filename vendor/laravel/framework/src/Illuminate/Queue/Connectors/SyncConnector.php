<?php

namespace Illuminate\Queue\Connectors;

use Illuminate\Queue\SyncQueue;

class SyncConnector implements ConnectorInterface
{
    /**
     * Establish a queue connection.
     *
     * @param  array  $config
     * @return \Illuminate\Contracts\Queue\Queue
     */
    public function connect(array $config)
    {
<<<<<<< HEAD
        return new SyncQueue;
=======
        return new SyncQueue($config['after_commit'] ?? null);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }
}
