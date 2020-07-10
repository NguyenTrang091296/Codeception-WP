<?php

namespace page;

/**
 * Class CategoryPage
 * @package page
 */
class CategoryPage extends AbstractPage
{
	/**
	 * @var string
	 */
	public static $url = "/wp-admin/edit-tags.php?taxonomy=category";

	/**
	 * @var string
	 */
	public static $nameEditInput = "//input[@id='name']";

	/**
	 * @var string
	 */
	public static $searchInput = "//input[@id='tag-search-input']";

	/**
	 * @var string
	 */
	public static $categoryTitle = "Categories";

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
}
