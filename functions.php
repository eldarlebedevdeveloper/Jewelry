<?php

## заменим слово «записи» на «статьи»
//$labels = apply_filters( "post_type_labels_{$post_type}", $labels );
add_filter('post_type_labels_post', 'rename_posts_labels');
function rename_posts_labels( $labels ){
	// заменять автоматически не пойдет например заменили: Запись = Статья, а в тесте получится так "Просмотреть статья"



	$new = array(
		'name'                  => 'Товары',
		'singular_name'         => 'Товар',
		'add_new'               => 'Добавить товар',
		'add_new_item'          => 'Добавить товар',
		'edit_item'             => 'Редактировать товар',
		'new_item'              => 'Новый товар',
		'view_item'             => 'Показать товар',
		'search_items'          => 'Поиск продукта',
		'not_found'             => 'Продукт не найден',
		'not_found_in_trash'    => 'В вашей корзине нет товаров',
		'parent_item_colon'     => '',
		'all_items'             => 'Все товары',
		'archives'              => 'Архив товаров',
		'insert_into_item'      => 'Вставить в продукт',
		'uploaded_to_this_item' => 'Скачано для этого продукта',
		'featured_image'        => 'Статья продукта',
		'filter_items_list'     => 'Отфильтровать список продуктов',
		'items_list_navigation' => 'Навигация по списку продуктов',
		'items_list'            => 'Список товаров',
		'menu_name'             => 'Товары',
		'name_admin_bar'        => 'Товар', // пункте "добавить"
	);

	return (object) array_merge( (array) $labels, $new );
}