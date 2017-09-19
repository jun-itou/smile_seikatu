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
			'BizDate',
			'Modified',
		];

		$conditions = [
			'delete_flg' => 1,
		];

		$order = [
		    'BizDate' => 'ASC',
		];

		$limit = 5;



		return $this->find('all',compact('fields','conditions', 'order','limit'));

	}

	public function saishin() {
		$order = [
			'created' => 'desc',
		];

		$limit = 5;

		return $this->find('all',compact('order','limit'));
	}
}