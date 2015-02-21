<?php
namespace minphp\Html;

use \PHPUnit_Framework_TestCase;

/**
 * @coversDefaultClass \minphp\Html\Html
 */
class HtmlTest extends PHPUnit_Framework_TestCase
{
    public function testConstruct()
    {
        $this->assertInstanceOf('\minphp\Html\Html', new Html());
    }
}
