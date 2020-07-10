<?php

namespace Step;

use page\CategoryPage;

/**
 * Class CategoriesStep
 * @package Step
 */
class CategoriesStep extends AbstractStep
{
	/**
	 * @param $nameCategory
	 * @param $slugCategory
	 * @param $descriptionCategory
	 * @throws \Exception
	 */
	public function createCategory($nameCategory, $slugCategory, $descriptionCategory)
	{
		$I = $this;
		$I->amOnPage(CategoryPage::$url);
		$I->waitForText(CategoryPage::$categoryTitle, 10);
		$I->waitForElementVisible(CategoryPage::$nameInput, 30);
		$I->fillField(CategoryPage::$nameInput, $nameCategory);
		$I->waitForElementVisible(CategoryPage::$slugInput, 30);
		$I->fillField(CategoryPage::$slugInput, $slugCategory);
		$I->waitForElementVisible(CategoryPage::$descriptionInput, 30);
		$I->fillField(CategoryPage::$descriptionInput, $descriptionCategory);
		$I->click(CategoryPage::$addNewCategoryButton);
	}

	/**
	 * @param $nameCategory
	 * @throws \Exception
	 */
	public function searchButton($nameCategory)
	{
		$I = $this;
		$I->amOnPage(CategoryPage::$url);
		$I->waitForText(CategoryPage::$categoryTitle, 10);
		$I->waitForElementVisible(CategoryPage::$searchInput, 30);
		$I->fillField(CategoryPage::$searchInput, $nameCategory);
		$I->waitForElementVisible(CategoryPage::$searchButton);
		$I->click(CategoryPage::$searchButton);
		$I->waitForText($nameCategory, 30, CategoryPage::$itemFirst);
	}

	/**
	 * @param $nameCategory
	 * @param $nameCategoryEdit
	 * @throws \Exception
	 */
	public function editCategory ($nameCategory, $nameCategoryEdit)
	{
		$I = $this;
		$I->searchButton($nameCategory);
		$I->moveMouseOver(CategoryPage::$itemFirst);
		$I->waitForElementVisible(CategoryPage::$editButton, 30);
		$I->click(CategoryPage::$editButton);
		$I->waitForElementVisible(CategoryPage::$nameEditInput, 30);
		$I->fillField(CategoryPage::$nameEditInput, $nameCategoryEdit);
		$I->waitForElementVisible(CategoryPage::$updateButton, 30);
		$I->click(CategoryPage::$updateButton);
	}
}
