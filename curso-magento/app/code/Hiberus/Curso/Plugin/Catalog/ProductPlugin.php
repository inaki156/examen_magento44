<?php

namespace Hiberus\Curso\Plugin\Catalog;

class ProductPlugin
{
    /**
     * @param \Magento\Catalog\Model\Product $subject
     * @param $result
     * @return string
     */
    public function afterGetName(
        \Magento\Catalog\Model\Product $subject,
        $result
    ):string
    {
        $nombreGeneral = $this->scopeConfig->getValue('hiberus_nombre/general/nombre_general');

        $result= $result.' '.$nombreGeneral;
    }

}
