<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Mvc_Router
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */

/**
 * @namespace
 */
namespace ZendTest\Mvc\Router\Http\TestAsset;

use Zend\Mvc\Router\Http\Route,
    Zend\Mvc\Router\Http\RouteMatch,
    Zend\Stdlib\RequestDescription as Request;

/**
 * Dummy route.
 *
 * @category   Zend
 * @package    Zend_Mvc_Router
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class DummyRoute implements Route
{
    /**
     * match(): defined by Route interface.
     *
     * @see    Route::match()
     * @param  Request $request
     * @param  integer $pathOffset
     * @return RouteMatch
     */
    public function match(Request $request, $pathOffset = null)
    {
        return new RouteMatch(array('offset' => $pathOffset), -4);
    }

    /**
     * assemble(): defined by Route interface.
     *
     * @see    Route::assemble()
     * @param  array $params
     * @param  array $options
     * @return mixed
     */
    public function assemble(array $params = null, array $options = null)
    {
        return '';
    }

    /**
     * factory(): defined by Route interface
     * 
     * @param  array|Traversable $options 
     * @return DummyRoute
     */
    public static function factory($options = array())
    {
        return new static();
    }
    
    /**
     * getAssembledParams(): defined by Route interface.
     * 
     * @see    Route::getAssembledParams
     * @return array
     */
    public function getAssembledParams()
    {
        return array();
    }
}
