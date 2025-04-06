<?php

namespace Illuminate\Database\Events;

use Illuminate\Contracts\Database\Events\MigrationEvent as MigrationEventContract;

class DatabaseRefreshed implements MigrationEventContract
{
    /**
     * Create a new event instance.
     *
     * @param  string|null  $database
<<<<<<< HEAD
     * @param  bool  seeding
=======
     * @param  bool  $seeding
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @return void
     */
    public function __construct(
        public ?string $database = null,
<<<<<<< HEAD
        public bool $seeding = false
=======
        public bool $seeding = false,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    ) {
        //
    }
}
