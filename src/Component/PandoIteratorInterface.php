<?php

declare(strict_types=1);

/**
 *
 * Pando 2020 — NOTICE OF MIT LICENSE
 * @copyright 2019-2020 (c) Paolo Combi (https://combi.li)
 * @link    https://github.com/PavelKingInTheNorth/pando
 * @author  Paolo Combi <paolo@combi.li>
 * @license https://github.com/PavelKingInTheNorth/pando/blob/master/LICENSE (MIT License)
 *
 */

namespace Pando\Component;

interface PandoIteratorInterface extends \Iterator
{
    /**
     * Return the current element.
     */
    public function current(): ?PandoInterface;

    /**
     * Move forward to next element.
     *
     * @return void any returned value is ignored
     */
    public function next(): void;

    /**
     * Return the key of the current element.
     *
     * @return int scalar on success, or null on failure
     */
    public function key(): int;

    /**
     * Checks if current position is valid.
     *
     * @return bool The return value will be casted to boolean and then evaluated.
     *              Returns true on success or false on failure.
     */
    public function valid(): bool;

    /**
     * Rewind the Iterator to the first element.
     *
     * @return void any returned value is ignored
     */
    public function rewind(): void;
}
