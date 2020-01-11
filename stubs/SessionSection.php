<?php

namespace Nette\Http;

/**
 * @implements \IteratorAggregate<mixed, mixed>
 * @implements \ArrayAccess<mixed, mixed>
 */
class SessionSection implements \IteratorAggregate, \ArrayAccess
{

	/**
	 * @return \ArrayIterator<mixed, mixed>
	 */
	public function getIterator(): \ArrayIterator
	{
		// nothing
	}

}
