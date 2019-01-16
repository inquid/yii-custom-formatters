<?php

namespace inquid\customformatters;

use yii\helpers\Html;

class InquidCustomFormatters extends \yii\i18n\Formatter
{
    /**
     * @param $sex
     * @return string
     */
    public function asSex($sex)
    {
        return $sex ? \Yii::t('app', 'Mujer') : \Yii::t('app', 'Hombre');
    }

    /**
     * TODO check this
     * @param $phone
     * @return string
     */
    public function asWhatsapp($phone)
    {
        return Html::a($phone, null, ['onClick' => "window.open('" . \Yii::getAlias("@web/module/components/whatsapp?phone=") . "' + $phone)"]);
    }

    /**
     * @param $value
     * @return string
     */
    public function asType($value)
    {
        // translate your int value to something else...
        switch (strtoupper($value)) {
            case 'I':
                return 'Factura';
            case 'P':
                return 'Complemento de Pago';
            case 'E':
                return 'Nota de Crédito';
            default:
                return 'NO DISPONIBLE';
        }
    }
}