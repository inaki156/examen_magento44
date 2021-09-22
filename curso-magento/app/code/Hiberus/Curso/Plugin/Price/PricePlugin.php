<?php

namespace Hiberus\Curso\Plugin\Price;

class PricePlugin
{
    public function afterFormatCurrency(
        \Magento\Framework\Pricing\Render\Amount $subject,
        $result
    ){
        $result .= " /por unidad";
        return $result;
    }

}
