<?php

namespace elmanth\togel;

use yii\helpers\Html;
use pheme\grid\ToggleColumn;

/**
 * This is just an example.
 */
class Togel extends ToggleColumn
{
    public $colorOn = 'green';
    public $colorOff = 'red';

    public function init()
    {
        parent::init();
    }


    /**
     * @inheritdoc
     */
    protected function renderDataCellContent($model, $key, $index)
    {
        $url = [$this->action, 'id' => $model->{$this->primaryKey}];

        $attribute = $this->attribute;
        $value = $model->$attribute;

        if ($value === null || $value == true) {
            $icon = $this->iconOn;
            $color = $this->colorOn;
            $title = $this->offText;
            $valueText = $this->onValueText;
        } else {
            $icon = $this->iconOff;
            $color = $this->colorOff;
            $title = $this->onText;
            $valueText = $this->offValueText;
        }
        return Html::a(
            '<span class="glyphicon glyphicon-' . $icon . '" style="color: ' . $color . ';"></span>',
            $url,
            [
                'title' => $title,
                'class' => 'toggle-column',
                'data-method' => 'post',
                'data-pjax' => '0',
            ]
        ) . ( $this->displayValueText ? " {$valueText}" : "" );
    }
    
}
