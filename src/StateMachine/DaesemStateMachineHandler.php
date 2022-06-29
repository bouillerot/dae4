<?php
declare(strict_types=1);

namespace App\StateMachine;

use StateMachine\Dependency\StateMachineHandlerInterface;
use StateMachine\Dto\StateMachine\ItemDto;

class DaesemStateMachineHandler implements StateMachineHandlerInterface
{
    public const NAME = 'Daesem';

    public const STATE_INIT = 'init';
    public const STATE_NEW = 'new';
    public const STATE_DAE = 'dae';
    public const STATE_REDO = 'redo';
    public const STATE_DUP = 'dup';
    public const STATE_KO = 'ko';
    public const STATE_OK = 'ok';

    /**
     * {@inheritDoc]
     *
     * @return string[]
     */
    public function getCommands(): array
    {
        return [
        ];
    }

    /**
     * {@inheritDoc]
     *
     * @return string[]
     */
    public function getConditions(): array
    {
        return [
        ];
    }

    /**
     * {@inheritDoc]
     *
     * @return string
     */
    public function getStateMachineName(): string
    {
        return static::NAME;
    }

    /**
     * {@inheritDoc}
     *
     * @return string[]
     */
    public function getActiveProcesses(): array
    {
        return [
            'Daesem01',
        ];
    }

    /**
     * {@inheritDoc]
     *
     * @param string $processName -
     * @return string
     */
    public function getInitialStateForProcess($processName): string
    {
        return static::STATE_INIT;
    }

    /**
     * {@inheritDoc]
     *
     * @param \StateMachine\Dto\StateMachine\ItemDto $itemDto -
     * @return bool
     */
    public function itemStateUpdated(ItemDto $itemDto): bool
    {
        return true;
    }

    /**
     * {@inheritDoc]
     *
     * @param int[] $stateIds -
     * @return \StateMachine\Dto\StateMachine\ItemDto[]
     */
    public function getStateMachineItemsByStateIds(array $stateIds = []): array
    {
        return [];
    }
}
