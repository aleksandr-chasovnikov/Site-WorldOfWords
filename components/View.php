<?php
/**
 * Шабллонизатор
 * 
 */

class View
{
	protected $data = [];

	// Подключает шаблон
	public function display($name, $template)
	{
		$this->data[$name] = $name;

		// Преобразуем: $this->data['$name'] ==> $name
		foreach ($this->data as $key => $val) {
			$key = $val; // $name = $val;
		}

		include ROOT . '/views/' . $template;
	}
}