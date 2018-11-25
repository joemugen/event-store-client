<?php

/**
 * This file is part of `prooph/event-store-client`.
 * (c) 2018-2018 prooph software GmbH <contact@prooph.de>
 * (c) 2018-2018 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Prooph\EventStoreClient;

/**
 * This class contains constants to be used when setting up subscriptions
 * using the EventStoreAsyncConnection::subscribeToAllFromAsync method
 */
class AllCheckpoint
{
    /**
     * Indicates that a catch-up subscription should receive all events in the database.
     */
    public const ALL_START = null;
}
