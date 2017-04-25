<?php

/**
 * Класс Cart
 * Компонент для работы с закладками
 */
class Cart
{

    /**
     * Добавление поста в закладки (сессию)
     * @param int $id <p>id поста</p>
     * @return integer <p>Количество постов в закладках</p>
     */
    public static function addProduct($id)
    {
        // Приводим $id к типу integer
        $id = intval($id);

        // Пустой массив для постов в закладках
        $productsInCart = array();

        // Если в закладках уже есть закладки (они хранятся в сессии)
        if (isset($_SESSION['products'])) {
            // То заполним наш массив постами
            $productsInCart = $_SESSION['products'];
        }

    }

    /**
     * Возвращает массив с идентификаторами и количеством постов в закладках<br/>
     * Если постов нет, возвращает false;
     * @return mixed: boolean or array
     */
    public static function getProducts()
    {
        if (isset($_SESSION['products'])) {
            return $_SESSION['products'];
        }
        return false;
    }

    /**
     * Очищает закладки
     */
    public static function clear()
    {
        if (isset($_SESSION['products'])) {
            unset($_SESSION['products']);
        }
    }

    /**
     * Удаляет пост с указанным id из закладок
     * @param integer $id <p>id поста</p>
     */
    public static function deleteProduct($id)
    {
        // Получаем массив с идентификаторами и количеством постов в закладках
        $productsInCart = self::getProducts();

        // Удаляем из массива элемент с указанным id
        unset($productsInCart[$id]);

        // Записываем массив постов с удаленным элементом в сессию
        $_SESSION['products'] = $productsInCart;
    }

}
