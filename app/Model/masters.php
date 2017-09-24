<?php  
class Masters extends Model{
	public $useTable = 'items,users,Reviews,Blogs,Orders,OrderLogs';	

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
}