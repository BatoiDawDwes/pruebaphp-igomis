<?php
/**
 * Created by PhpStorm.
 * User: igomis
 * Date: 2020-03-30
 * Time: 23:11
 */
include_once __DIR__ . '/../functions/strings.php';


use PHPUnit\Framework\TestCase;

class phpRepasTest extends TestCase
{
    public function testMakeListWorks()
    {
        $this->assertEquals(makeList(['index'=>'index.php']),"<ul><li><a href='index.php'>index</a></li></ul>");
    }
}


