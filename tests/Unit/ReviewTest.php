<?php

namespace Tests\Unit;

use App\Library\Classes\Review;
use PHPUnit\Framework\TestCase;

class ReviewTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_review_creation()
    {
        $rev = new Review ("Hola");
        $this->assertTrue($rev->getName()=="Hola");
    }
}
