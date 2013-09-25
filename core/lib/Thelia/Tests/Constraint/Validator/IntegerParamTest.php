<?php
/**********************************************************************************/
/*                                                                                */
/*      Thelia	                                                                  */
/*                                                                                */
/*      Copyright (c) OpenStudio                                                  */
/*      email : info@thelia.net                                                   */
/*      web : http://www.thelia.net                                               */
/*                                                                                */
/*      This program is free software; you can redistribute it and/or modify      */
/*      it under the terms of the GNU General Public License as published by      */
/*      the Free Software Foundation; either version 3 of the License             */
/*                                                                                */
/*      This program is distributed in the hope that it will be useful,           */
/*      but WITHOUT ANY WARRANTY; without even the implied warranty of            */
/*      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             */
/*      GNU General Public License for more details.                              */
/*                                                                                */
/*      You should have received a copy of the GNU General Public License         */
/*	    along with this program. If not, see <http://www.gnu.org/licenses/>.      */
/*                                                                                */
/**********************************************************************************/

namespace Thelia\Coupon;

use InvalidArgumentException;
use Thelia\Constraint\Validator\IntegerParam;

/**
 * Created by JetBrains PhpStorm.
 * Date: 8/19/13
 * Time: 3:24 PM
 *
 * Unit Test IntegerParam Class
 *
 * @package Constraint
 * @author  Guillaume MOREL <gmorel@openstudio.fr>
 *
 */
class IntegerParamTest extends \PHPUnit_Framework_TestCase
{

    public function testSomething()
    {
        // Stop here and mark this test as incomplete.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
//    /**
//     * Sets up the fixture, for example, opens a network connection.
//     * This method is called before a test is executed.
//     */
//    protected function setUp()
//    {
//    }
//
//    /**
//     *
//     * @covers Thelia\Coupon\Parameter\IntegerParam::compareTo
//     *
//     */
//    public function testInferiorInteger()
//    {
//        $adapter = new BaseAdapter();
//        $intValidator = 42;
//        $intToValidate = 41;
//
//        $integerParam = new IntegerParam($adapter, $intValidator);
//
//        $expected = 1;
//        $actual = $integerParam->compareTo($intToValidate);
//        $this->assertEquals($expected, $actual);
//    }
//
//    /**
//     *
//     * @covers Thelia\Coupon\Parameter\IntegerParam::compareTo
//     *
//     */
//    public function testEqualsInteger()
//    {
//        $adapter = new BaseAdapter();
//        $intValidator = 42;
//        $intToValidate = 42;
//
//        $integerParam = new IntegerParam($adapter, $intValidator);
//
//        $expected = 0;
//        $actual = $integerParam->compareTo($intToValidate);
//        $this->assertEquals($expected, $actual);
//    }
//
//    /**
//     *
//     * @covers Thelia\Coupon\Parameter\IntegerParam::compareTo
//     *
//     */
//    public function testSuperiorInteger()
//    {
//        $adapter = new BaseAdapter();
//        $intValidator = 42;
//        $intToValidate = 43;
//
//        $integerParam = new IntegerParam($adapter, $intValidator);
//
//        $expected = -1;
//        $actual = $integerParam->compareTo($intToValidate);
//        $this->assertEquals($expected, $actual);
//    }
//
//    /**
//     * @covers Thelia\Coupon\Parameter\IntegerParam::compareTo
//     * @expectedException InvalidArgumentException
//     */
//    public function testInvalidArgumentException()
//    {
//        $adapter = new BaseAdapter();
//        $intValidator = 42;
//        $intToValidate = '42';
//
//        $integerParam = new IntegerParam($adapter, $intValidator);
//
//        $expected = 0;
//        $actual = $integerParam->compareTo($intToValidate);
//        $this->assertEquals($expected, $actual);
//    }
//
//    /**
//     * Test is the object is serializable
//     * If no data is lost during the process
//     */
//    public function isSerializableTest()
//    {
//        $adapter = new BaseAdapter();
//        $intValidator = 42;
//
//        $param = new IntegerParam($adapter, $intValidator);
//
//        $serialized = base64_encode(serialize($param));
//        /** @var IntegerParam $unserialized */
//        $unserialized = base64_decode(serialize($serialized));
//
//        $this->assertEquals($param->getValue(), $unserialized->getValue());
//        $this->assertEquals($param->getInteger(), $unserialized->getInteger());
//
//        $new = new IntegerParam($adapter, $unserialized->getInteger());
//        $this->assertEquals($param->getInteger(), $new->getInteger());
//    }
//
//    /**
//     * Tears down the fixture, for example, closes a network connection.
//     * This method is called after a test is executed.
//     */
//    protected function tearDown()
//    {
//    }

}
