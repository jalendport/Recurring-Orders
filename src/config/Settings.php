<?php
namespace topshelfcraft\recurringorders\config;

use craft\base\Model;

class Settings extends Model
{

	/**
	 * @var bool
	 */
	public $addOrderElementSources = true;

	/**
	 * @var bool
	 */
	public $hideCommerceSubscriptionsNavItem = false;

	/**
	 * @var bool
	 */
	public $hideCommerceSubscriptionsCustomerTables = false;

	/**
	 * @var bool
	 */
	public $hideRecurrenceControlsForGeneratedOrders = true;

	/**
	 * @var bool
	 */
	public $hideRecurrenceControlsForOriginatingOrders = true;

	/**
	 * @var array
	 */
	public $recurrenceIntervalOptions;

	/**
	 * @var bool
	 */
	public $showUserRecurringOrdersTab = true;

	/**
	 * @param bool $addBlankOption
	 *
	 * @return array
	 */
	public function getRecurrenceIntervalOptions($addBlankOption = true)
	{
		return array_merge(['' => ''], $this->recurrenceIntervalOptions);
	}

}
