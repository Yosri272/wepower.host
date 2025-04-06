<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Translation\Loader;

use Symfony\Component\Translation\Exception\NotFoundResourceException;

/**
 * CsvFileLoader loads translations from CSV files.
 *
 * @author Saša Stamenković <umpirsky@gmail.com>
 */
class CsvFileLoader extends FileLoader
{
    private string $delimiter = ';';
    private string $enclosure = '"';
<<<<<<< HEAD
    private string $escape = '\\';
=======
    /**
     * @deprecated since Symfony 7.2, to be removed in 8.0
     */
    private string $escape = '';
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    protected function loadResource(string $resource): array
    {
        $messages = [];

        try {
            $file = new \SplFileObject($resource, 'rb');
        } catch (\RuntimeException $e) {
<<<<<<< HEAD
            throw new NotFoundResourceException(sprintf('Error opening file "%s".', $resource), 0, $e);
=======
            throw new NotFoundResourceException(\sprintf('Error opening file "%s".', $resource), 0, $e);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        $file->setFlags(\SplFileObject::READ_CSV | \SplFileObject::SKIP_EMPTY);
        $file->setCsvControl($this->delimiter, $this->enclosure, $this->escape);

        foreach ($file as $data) {
            if (false === $data) {
                continue;
            }

            if (!str_starts_with($data[0], '#') && isset($data[1]) && 2 === \count($data)) {
                $messages[$data[0]] = $data[1];
            }
        }

        return $messages;
    }

    /**
     * Sets the delimiter, enclosure, and escape character for CSV.
<<<<<<< HEAD
     *
     * @return void
     */
    public function setCsvControl(string $delimiter = ';', string $enclosure = '"', string $escape = '\\')
    {
        $this->delimiter = $delimiter;
        $this->enclosure = $enclosure;
=======
     */
    public function setCsvControl(string $delimiter = ';', string $enclosure = '"', string $escape = ''): void
    {
        $this->delimiter = $delimiter;
        $this->enclosure = $enclosure;
        if ('' !== $escape) {
            trigger_deprecation('symfony/translation', '7.2', 'The "escape" parameter of the "%s" method is deprecated. It will be removed in 8.0.', __METHOD__);
        }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->escape = $escape;
    }
}
