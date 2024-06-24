<?php

/*
 * This file is part of the Predis package.
 *
 * (c) 2009-2020 Daniele Alessandri
 * (c) 2021-2023 Till Krüss
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Predis\Command\Redis\BloomFilter;

use Predis\Command\Command as RedisCommand;

/**
 * @see https://redis.io/commands/bf.exists/
 *
 * Determines whether an item may exist in the Bloom Filter or not.
 */
class BFEXISTS extends RedisCommand
{
    public function getId()
    {
        return 'BF.EXISTS';
    }
}
