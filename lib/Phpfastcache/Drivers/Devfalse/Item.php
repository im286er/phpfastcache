<?php
/**
 *
 * This file is part of phpFastCache.
 *
 * @license MIT License (MIT)
 *
 * For full copyright and license information, please see the docs/CREDITS.txt file.
 *
 * @author Khoa Bui (khoaofgod)  <khoaofgod@gmail.com> http://www.phpfastcache.com
 * @author Georges.L (Geolim4)  <contact@geolim4.com>
 *
 */
declare(strict_types=1);

namespace Phpfastcache\Drivers\Devfalse;

use Phpfastcache\Core\Item\ExtendedCacheItemInterface;
use Phpfastcache\Core\Item\ItemBaseTrait;
use Phpfastcache\Core\Pool\ExtendedCacheItemPoolInterface;
use Phpfastcache\Drivers\Devfalse\Driver as DevfalseDriver;
use Phpfastcache\Exceptions\{
  phpFastCacheInvalidArgumentException, phpFastCacheInvalidArgumentTypeException
};

/**
 * Class Item
 * @package phpFastCache\Drivers\Devfalse
 */
class Item implements ExtendedCacheItemInterface
{
    use ItemBaseTrait{
        ItemBaseTrait::__construct as __BaseConstruct;
    }

    /**
     * Item constructor.
     * @param \Phpfastcache\Drivers\Devfalse\Driver $driver
     * @param $key
     * @throws phpFastCacheInvalidArgumentException
     */
    public function __construct(DevfalseDriver $driver, $key)
    {
        $this->__BaseConstruct($driver, $key);
    }

    /**
     * @param ExtendedCacheItemPoolInterface $driver
     * @throws phpFastCacheInvalidArgumentException
     * @return static
     */
    public function setDriver(ExtendedCacheItemPoolInterface $driver)
    {
        if ($driver instanceof DevfalseDriver) {
            $this->driver = $driver;

            return $this;
        }

        throw new phpFastCacheInvalidArgumentException('Invalid driver instance');
    }
}