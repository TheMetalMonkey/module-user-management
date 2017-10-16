<?php

use webvimark\modules\UserManagement\UserManagementModule;
use yii\bootstrap\Html;

/**
 * @var yii\web\View $this
 */

$this->title = UserManagementModule::t('back', 'Change own password');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="change-own-password-success">

	<div class="alert alert-success text-center">
		<?= UserManagementModule::t('back', 'Password has been changed') ?>
	</div>
	<?php 
	if(Yii::$app->user->isGuest) {
	    echo Html::a('Login', ['/user-management/auth/login'], ['class' => 'btn btn-primary']);
	}
	?>

</div>
