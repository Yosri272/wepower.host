<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\VarDumper\Command\Descriptor;

use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\VarDumper\Cloner\Data;
use Symfony\Component\VarDumper\Dumper\CliDumper;

/**
 * Describe collected data clones for cli output.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 *
 * @final
 */
class CliDescriptor implements DumpDescriptorInterface
{
<<<<<<< HEAD
    private CliDumper $dumper;
    private mixed $lastIdentifier = null;

    public function __construct(CliDumper $dumper)
    {
        $this->dumper = $dumper;
=======
    private mixed $lastIdentifier = null;

    public function __construct(
        private CliDumper $dumper,
    ) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function describe(OutputInterface $output, Data $data, array $context, int $clientId): void
    {
        $io = $output instanceof SymfonyStyle ? $output : new SymfonyStyle(new ArrayInput([]), $output);
        $this->dumper->setColors($output->isDecorated());

        $rows = [['date', date('r', (int) $context['timestamp'])]];
        $lastIdentifier = $this->lastIdentifier;
        $this->lastIdentifier = $clientId;

        $section = "Received from client #$clientId";
        if (isset($context['request'])) {
            $request = $context['request'];
            $this->lastIdentifier = $request['identifier'];
<<<<<<< HEAD
            $section = sprintf('%s %s', $request['method'], $request['uri']);
=======
            $section = \sprintf('%s %s', $request['method'], $request['uri']);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            if ($controller = $request['controller']) {
                $rows[] = ['controller', rtrim($this->dumper->dump($controller, true), "\n")];
            }
        } elseif (isset($context['cli'])) {
            $this->lastIdentifier = $context['cli']['identifier'];
            $section = '$ '.$context['cli']['command_line'];
        }

        if ($this->lastIdentifier !== $lastIdentifier) {
            $io->section($section);
        }

        if (isset($context['source'])) {
            $source = $context['source'];
<<<<<<< HEAD
            $sourceInfo = sprintf('%s on line %d', $source['name'], $source['line']);
            if ($fileLink = $source['file_link'] ?? null) {
                $sourceInfo = sprintf('<href=%s>%s</>', $fileLink, $sourceInfo);
=======
            $sourceInfo = \sprintf('%s on line %d', $source['name'], $source['line']);
            if ($fileLink = $source['file_link'] ?? null) {
                $sourceInfo = \sprintf('<href=%s>%s</>', $fileLink, $sourceInfo);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            }
            $rows[] = ['source', $sourceInfo];
            $file = $source['file_relative'] ?? $source['file'];
            $rows[] = ['file', $file];
        }

        $io->table([], $rows);

        $this->dumper->dump($data);
        $io->newLine();
    }
}
