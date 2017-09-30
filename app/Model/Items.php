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


		return $this->find('all',compact('fields','conditions','order','limit'));
	}

	public $validate = [
		'Name' => [
			[
				'rule' => 'notBlank',
				'message' => '名前いれろ',
			],
			[
				'rule' => ['maxLength', 20],
				'message' => '名前長い！20文字以下！'
			],
		],
		'Kana' => [
			[
				'rule' => 'notBlank',
				'message' => 'カナいれろ',
			],
			[
				'rule' => ['maxLength', 20],
				'message' => 'カナ長い！20文字以下！'
			],
		],
		'Tanka' => [
			[
				'rule' => 'notBlank',
				'message' => '価格いれろ',
			],
			[
				'rule' => ['maxLength', 20],
				'message' => '価格長い！20文字以下！'
			],
		],
		'Tax_rate' => [
			[
				'rule' => 'notBlank',
				'message' => '税いれろ',
			],
			[
				'rule' => ['maxLength', 20],
				'message' => '税長い！20文字以下！'
			],
		],
		'Country' => [
			[
				'rule' => 'notBlank',
				'message' => '産地いれろ',
			],
			[
				'rule' => ['maxLength', 20],
				'message' => '産地長い！20文字以下！'
			],
		],
		'Material' => [
			[
				'rule' => 'notBlank',
				'message' => '原料いれろ',
			],
			[
				'rule' => ['maxLength', 20],
				'message' => '原料長い！20文字以下！'
			],
		],
		'Maker' => [
			[
				'rule' => 'notBlank',
				'message' => 'メーカーいれろ',
			],
			[
				'rule' => ['maxLength', 20],
				'message' => 'メーカー長い！20文字以下！'
			],
		],
		'Category_flg' => [
			[
				'rule' => 'notBlank',
				'message' => 'フラグいれろ',
			],
		],
		'Txt' => [
			[
				'rule' => 'notBlank',
				'message' => '説明いれろ',
			],
			[
				'rule' => ['maxLength', 300],
				'message' => '説明長い！300文字以下！'
			],
		],
		'Img_data'=>[
			'rule1' => [
			 	//拡張子の指定
			 	'rule' => ['extension', ['jpg','jpeg','gif','png']],
			 	'message' => '画像ではありません。',
				 'allowEmpty' => true,
			],
     		'rule2' => [
         		//画像サイズの制限
         		'rule' => ['fileSize', '<=', '500000'],
         		'message' => '画像サイズは500KB以下でお願いします',
      		]
   		],
	];
}