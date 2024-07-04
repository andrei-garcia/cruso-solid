<?php

use PHPUnit\Framework\TestCase;
use  Admin\CursoSolid\Item;

class itemTest extends TestCase
{
    public function testGetNome()
    {
        $item = new Item('Mouse', 100.00);
        $this->assertEquals('Mouse', $item->getDescricao());
    }

    public function testGetValor()
    {
        $item = new Item('Mouse', 100.00);
        $this->assertEquals(100.00, $item->getValor());
    }
}