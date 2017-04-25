<?php

/**
 * Контроллер CartController
 * Закладки
 */
class CartController
{

    /**
     * Action для добавления поста в закладки синхронным запросом<br/>
     * (для примера, не используется)
     * @param integer $id <p>id поста</p>
     */
    public function actionAdd($id)
    {
        // Добавляем пост в закладки
        Cart::addProduct($id);

        // Возвращаем пользователя на страницу с которой он пришел
        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");
    }

    /**
     * Action для добавления поста в закладки при помощи асинхронного запроса (ajax)
     * @param integer $id <p>id поста</p>
     */
    public function actionAddAjax($id)
    {
        // Добавляем пост в закладки и печатаем результат: количество постов в закладках
        echo Cart::addProduct($id);
        return true;
    }
    
    /**
     * Action для добавления поста в закладки синхронным запросом
     * @param integer $id <p>id поста</p>
     */
    public function actionDelete($id)
    {
        // Удаляем заданный пост из закладок
        Cart::deleteProduct($id);

        // Возвращаем пользователя в закладки
        header("Location: /user/cart");
    }

    /**
     * Action для страницы "Закладки"
     */
    public function actionIndex()
    {
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();

        // Получим идентификаторы и количество постов в закладках
        $productsInCart = Cart::getProducts();

        if ($productsInCart) {
            // Если в закладках есть посты, получаем полную информацию о постах для списка
            // Получаем массив только с идентификаторами постов
            $productsIds = array_keys($productsInCart);

            // Получаем массив с полной информацией о необходимых постах
            $products = Product::getProdustsByIds($productsIds);

            // Получаем общую стоимость постов
            // $totalPrice = Cart::getTotalPrice($products);
        }

        // Подключаем вид
        require_once(ROOT . '/views/user/cart.php');
        return true;
    }

}
