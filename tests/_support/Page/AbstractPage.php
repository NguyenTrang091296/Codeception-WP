<?php
namespace page;

/**
 * Class AbstractPage
 * @package pag
 */
class AbstractPage extends \AcceptanceTester
{
	/**
	 * @var string
	 */
	public static $url = '/wp-admin';

	/**
	 * @var string
	 */
	public static $userLoginInput = '//input[@id=\'user_login\']';

	/**
	 * @var string
	 */
	public static $passPassInput = "//input[@id='user_pass']";

	/**
	 * @var string
	 */
	public static $loginButton = "//input[@id='wp-submit']";

	/**
	 * @var string
	 */
	public static $addNewButton = "//a[@class='page-title-action']";

	/**
	 * @var string
	 */
	public static $searchInput = "//input[@id='post-search-input']";

	/**
	 * @var string
	 */
	public static $searchButton = "//input[@id='search-submit']";

	/**
	 * @var string
	 */
	public static $applyButton = "//input[@id='doaction']";

	/**
	 * @var string
	 */
	public static $addNewCategoryButton = "//input[@id='submit']";

	/**
	 * @var string
	 */
	public static $nameInput = "//input[@id='tag-name']";

	/**
	 * @var string
	 */
	public static $slugInput = "//input[@id='tag-slug']";

	/**
	 * @var string
	 */
	public static $descriptionInput = "//textarea[@id='tag-description']";

	/**
	 * @var string
	 */
	public static $itemFirst = "//tbody[@id='the-list']/tr/td[@data-colname=\"Name\"]";

	/**
	 * @var string
	 */
	public static $editButton = "//span[@class='edit']//a[contains(text(),'Edit')]";

	/**
	 * @var string
	 */
	public static $updateButton = "//input[@value=\"Update\"]";

	/**
	 * @var string
	 */
	public static $dashboardTitle = "Dashboard";
}
