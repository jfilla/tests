<?php

namespace SizeID\OAuth2\Tests;

use Tester\Assert;
use Tester\TestCase;
use Tests\Foo;

require __DIR__ . '/bootstrap.php';

class FooTest extends TestCase
{

	public function testBar()
	{
		$foo = new Foo();
		Assert::equal('bar', $foo->bar());
	}
}

$test = new FooTest();
$test->run();
