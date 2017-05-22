<?php
/**
 * Project: laradoo.
 * User: Edujugon
 * Email: edujugon@gmail.com
 * Date: 18/5/17
 * Time: 10:18
 */

use PHPUnit\Framework\TestCase;

class GlobalHelpersTest extends TestCase
{
    /** @test */
    public function remove_char_from_string()
    {
        $text = 'http://myurl.com/';

        $this->assertEquals('http://myurl.com',laradooRemoveCharacter($text,'/'));
    }
}