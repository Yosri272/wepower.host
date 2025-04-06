<?php

namespace Maatwebsite\Excel\Mixins;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportAsMacro
{
    public function __invoke()
    {
<<<<<<< HEAD
        return function (string $filename, callable $mapping, string $disk = null, string $readerType = null) {
=======
        return function (string $filename, callable $mapping, ?string $disk = null, ?string $readerType = null) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $import = new class(get_class($this->getModel()), $mapping) implements ToModel
            {
                use Importable;

                /**
                 * @var string
                 */
                private $model;

                /**
                 * @var callable
                 */
                private $mapping;

                /**
                 * @param  string  $model
                 * @param  callable  $mapping
                 */
                public function __construct(string $model, callable $mapping)
                {
                    $this->model   = $model;
                    $this->mapping = $mapping;
                }

                /**
                 * @param  array  $row
                 * @return Model|Model[]|null
                 */
                public function model(array $row)
                {
                    return (new $this->model)->fill(
                        ($this->mapping)($row)
                    );
                }
            };

            return $import->import($filename, $disk, $readerType);
        };
    }
}
