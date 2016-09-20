<?php
/**
 *  This file is part of the Yasumi package.
 *
 *  Copyright (c) 2015 - 2016 AzuyaLabs
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 *  @author Sacha Telgenhof <stelgenhof@gmail.com>
 */

namespace Yasumi\tests\Australia\Victoria;

use PHPUnit_Framework_TestCase;
use Yasumi\tests\Australia\AustraliaBaseTestCase;
use Yasumi\tests\YasumiBase;

/**
 * Base class for test cases of the Victoria holiday provider.
 */
abstract class VictoriaBaseTestCase extends AustraliaBaseTestCase
{
    use YasumiBase;

    /**
     * Name of the region (e.g. country / state) to be tested
     */
    public $region = 'Australia\Victoria';

    /**
     * Timezone in which this provider has holidays defined
     */
    public $timezone = 'Australia/Melbourne';
}
