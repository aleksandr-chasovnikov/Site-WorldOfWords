<?php

/**
 * Контроллер ProductController
 * Статья
 */
class ProductController
{

    /**
     * Action для страницы просмотра статьи
     * @param integer $productId <p>id товара</p>
     */
    public function actionView($productId)
    {
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();

        // Получаем инфомрацию о статье
        $product = Product::getProductById($productId);

        // Подключаем вид
        require_once(ROOT . '/views/site/once.php');
        return true;
    }

}
