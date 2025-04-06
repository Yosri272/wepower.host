<?php

namespace App\Repositories;

<<<<<<< HEAD
use Abedin\Boiler\Repositories\Repository;
=======
use Abedin\Maker\Repositories\Repository;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use App\Models\LegalPage;

class LegalPageRepository extends Repository
{
    /**
     * base method
     *
     * @method model()
     */
    public static function model()
    {
        return LegalPage::class;
    }
}
