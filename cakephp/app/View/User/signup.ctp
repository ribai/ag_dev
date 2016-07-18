<h2>新規登録</h2>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
<div class="testbox">

<h1>登録フォーム</h1>
<?php echo $this -> Form ->create('User');  ?>
<?php  echo $this->Form->input('mail', array(
    'label' => array(
        'class' =>'icon-envelope',// labelタグに付与するclass
				'id' => 'icon',
				'for' => 'name',
        'text' => false,
    ),
    'div'=> array(
      'name' => 'name',
      'id' => 'name',
      'type' => 'text'
    ),
));?>


<?php  echo $this->Form->input('name', array(
    'label' => array(
      'class' =>'icon-user',// labelタグに付与するclass
      'id' => 'icon',
      'for' => 'name',
      'text' => false,
    ),
    'div'=> array(
      'name' => 'name',
      'id' => 'name',
      'type' => 'text'
    ),
));?>

<?php  echo $this->Form->input('password', array(
    'label' => array(
      'class' =>'icon-shield',// labelタグに付与するclass
      'id' => 'icon',
      'for' => 'name',
      'text' => false,
    ),
    'div'=> array(
      'name' => 'name',
      'id' => 'name',
      'type' => 'text'
    ),
));?>


	<?php echo $this->Form->end('登録');?>

	</div>
