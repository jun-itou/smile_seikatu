<?php  

class Items extends Model{
	public $useTable = 'items';	

	public function getItemsAll($data) {
		// $fields = [
		// 	'id',
		// 	'item_name'
		// ];

		$conditions = [
			'dateted' => 0,
			'sanchi' => $data['sanchi'],
		];

		$order = [
		    'id' => 'desc',
		];

		// $joins = [
		// 	'join1' => [

		// 	],
		// 	'join2' => [

		// 	]
		// ];

		return $this->find('all',compact('fields','conditions', 'order'));

		// return $this->find('all',[$field,$conditions, $order]);
	}

	public function saishin() {
		$order = [
			'created' => 'desc',
		];

		$limit = 5;

		return $this->find('all',compact('order','limit'));
	}
}