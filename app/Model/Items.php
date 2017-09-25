<?php  

class Items extends Model{
	public $useTable = 'items';	

	public function getItemsNew() {

		$fields = [
			'itemsID',
			'Name',
			'Kana',
			'Tanka',
			'Tax_rate',
			'Country',
			'Material',
			'Maker',
			'Category_flg',
			'Txt',
			'Img',
		];

		$conditions = [
			'delete_flg'   => 1,
		];

		$order = [
		    'BizDate' => 'ASC',
		];

		$limit = 5;

		return $this->find('all',compact('fields','conditions', 'order','limit'));

	}

	public function getJapaneaseV() {

		$fields = [
			'itemsID',
			'Name',
			'Kana',
			'Tanka',
			'Tax_rate',
			'Country',
			'Material',
			'Maker',
			'Category_flg',
			'Txt',
			'Img',
		];

		$conditions = [
			'delete_flg'   => 1,
			'Category_flg' => 1,
		];

		$order = [
		    'BizDate' => 'ASC',
		];

		$limit = 2;

		return $this->find('all',compact('fields','conditions','order','limit'));
	}

	public function getForeignCountriesV() {

		$fields = [
			'itemsID',
			'Name',
			'Kana',
			'Tanka',
			'Tax_rate',
			'Country',
			'Material',
			'Maker',
			'Category_flg',
			'Txt',
			'Img',
		];

		$conditions = [
			'delete_flg'   => 1,
			'Category_flg' => 2,
		];

		$order = [
		    'BizDate' => 'ASC',
		];

		$limit = 2;

		return $this->find('all',compact('fields','conditions','order','limit'));
	}

	public function getAllItems(){
		$fields = [
			'itemsID',
			'Name',
			'Kana',
			'Tanka',
			'Tax_rate',
			'Country',
			'Material',
			'Maker',
			'Category_flg',
			'Txt',
			'Img',
			'Modified',
			'BizDate',
		];

		$conditions = [
			'delete_flg'   => 1,
		];

		$order = [
		    'itemsID' => 'ASC',
		];

		$limit = 10;

		return $this->find('all',compact('fields','conditions','order','limit'));
	}
}