<?php

namespace Egulias\EmailValidator\Validation;

class DNSRecords
{
    /**
<<<<<<< HEAD
     * @param array $records
=======
     * @param list<array<array-key, mixed>> $records
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @param bool $error
     */
    public function __construct(private readonly array $records, private readonly bool $error = false)
    {
    }

    /**
<<<<<<< HEAD
     * @return array
=======
     * @return list<array<array-key, mixed>>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function getRecords(): array
    {
        return $this->records;
    }

    public function withError(): bool
    {
        return $this->error;
    }
}
