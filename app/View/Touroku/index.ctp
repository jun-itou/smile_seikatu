<h1>お客様情報を入力してください</h1>
<?php 
echo $this->Form->create('Touroku');
echo $this->Form->text('Username',['name'=>'ユーザーめい']);
echo $this->Form->input('Seimei');
echo $this->Form->input('Seimei_kana');
echo $this->Form->input('Namae');
echo $this->Form->input('Namae_kana');
echo $this->Form->password('Password');
echo $this->Form->input('Gender');
echo $this->Form->input('Birth');
echo $this->Form->input('Postcode');
echo $this->Form->input('Address1');
echo $this->Form->input('Address2');
echo $this->Form->input('Tel');
echo $this->Form->input('Mail');
echo $this->Form->input('role',array(
    'type'=>'select',
    'options'=>$option));
    

echo $this->Form->end('送信');
?>