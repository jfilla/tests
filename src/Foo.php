<?php

namespace Tests;

class Foo
{

	public function bar()
	{
		return 'bar';
	}

	public function php54()
	{
		$a = [];
	}

	public function php55()
	{
		Foo::class;
		/*try {
			$s = 2 + 2;
		} catch (\Exception $e) {
			//
		} finally {
			//
		}*/
	}

	public function php56()
	{
		$op = [1, 2];
		$this->add(...$op);
	}

	public function php7()
	{
		(1 <=> 2) === -1;
	}

	private function add($a, $b)
	{
	}
}