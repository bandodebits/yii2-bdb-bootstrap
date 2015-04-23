<?php

namespace bdb\bootstrap;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
 
/**
 * This is just an example.
 */
class Modal extends \yii\bootstrap\Modal {

	/**
     * Renders the close button.
     * @return string the rendering result
     */
    protected function renderCloseButton()
    {
        if ($this->closeButton !== false) {
            $tag = ArrayHelper::remove($this->closeButton, 'tag', 'button');
            $label = ArrayHelper::remove($this->closeButton, 'label', '&times;');
            $class = ArrayHelper::remove($this->closeButton, 'class');

            if ($tag === 'button' && !isset($this->closeButton['type'])) {
                $this->closeButton['type'] = 'button';
            }

            if($class != null) {
            	$this->closeButton['class'] = 'close '.$class;
            }

            return Html::tag($tag, $label, $this->closeButton);
        } else {
            return null;
        }
    }
}