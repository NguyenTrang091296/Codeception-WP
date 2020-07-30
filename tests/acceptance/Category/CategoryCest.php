<?php

use Step\AbstractStep;
use Step\CategoriesStep;

/**
 * Class CategoryCest
 */
class CategoryCest
{
	/**
	 * @var \Faker\Generator
	 */
	protected $faker;

	/**
	 * @var string
	 */
	protected $userName;

	/**
	 * @var string
	 */
	protected $passWord;

	/**
	 * @var string
	 */
	protected $categoryName;

	/**
	 * @var string
	 */
	protected $categorySlug;

	/**
	 * @var string
	 */
	protected $categoryDescription;

	/**
	 * @var string
	 */
	protected $categoryEditName;

	/**
	 * CategoryCest constructor.
	 */
	public function __construct()
	{
		$this->faker               = Faker\Factory::create();
		$this->userName = "admin";
		$this->passWord = "admin";
		$this->categoryName = $this->faker->bothify('Category demo ?##?');
		$this->categorySlug = $this->faker->bothify('/category-demo?##?');
		$this->categoryDescription = $this->faker->bothify('Lorem Ipsum is simply dummy text of the printing and typesetting industry ?##?');
		$this->categoryEditName = $this->faker->bothify('Category demo update ?##?');
	}

	/**
	 * @param AbstractStep $I
	 * @param $scenario
	 * @throws Exception
	 */
	public function loginAdmin(AbstractStep $I, $scenario)
	{
		$I->wantTo('Login on admin');
		$I->loginAsAdmin();

		$I = new CategoriesStep($scenario);
		$I->createCategory($this->categoryName, $this->categorySlug, $this->categoryDescription);
		$I->editCategory($this->categoryName, $this->categoryEditName);
	}
}
