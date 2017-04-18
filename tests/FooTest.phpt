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

	public function testPhp54()
	{
		$foo = new Foo();
		$foo->php54();
		Assert::true(TRUE);
	}

	public function testPhp55()
	{
		$foo = new Foo();
		$foo->php55();
		Assert::true(TRUE);
	}

	public function testPhp56()
	{
		$foo = new Foo();
		$foo->php56();
		Assert::true(TRUE);
	}

	public function testPhp7()
	{
		$foo = new Foo();
		$foo->php7();
		Assert::true(TRUE);
	}
}

$test = new FooTest();
$test->run();
