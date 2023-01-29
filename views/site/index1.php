<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Nishan-e-Haider Holder</h1>
<ul>
<?php foreach ($nishanehaiderholder as $nishanehaiderholders): ?>
    <li>
        <?= Html::encode("{$nishanehaiderholders->id} 
         ({$nishanehaiderholders->name})
        ({$nishanehaiderholders->regiment})
        ({$nishanehaiderholders->rank})
        ({$nishanehaiderholders->Battle})
       
        ") ?>:
        <?= $nishanehaiderholders->year ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>