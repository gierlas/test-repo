<?php

namespace Kora\DataProvider;

use Kora\DataProvider\OperatorDefinition\FilterOperatorDefinitionInterface;
use Kora\DataProvider\OperatorDefinition\OrderOperatorDefinitionInterface;
use Kora\DataProvider\OperatorDefinition\PagerOperatorDefinitionInterface;


/**
 * Interface DataProviderInterface
 * @author Paweł Gierlasiński <gierlasinski.pawel@gmail.com>
 */
interface DataProviderInterface
{
	/**
	 * @return array
	 */
	public function getMapping(): array;

	/**
	 * @return int
	 */
	public function count(): int;

	/**
	 * @param DataProviderOperatorsSetup $setup
	 * @return Result
	 */
	public function fetchData(DataProviderOperatorsSetup $setup): Result;
}