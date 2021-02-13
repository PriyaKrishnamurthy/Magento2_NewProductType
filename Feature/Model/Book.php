<?php

namespace Custom\Feature\Model;


/**
 * Book product type implementation
 */
class Book extends \Magento\Catalog\Model\Product\Type\AbstractType
{
    /**
     * Product type code
     */
    const TYPE_CODE = 'book';

    /**
     * Delete data specific for Simple product type
     *
     * @param \Magento\Catalog\Model\Product $product
     * @return void
     */
    public function deleteTypeSpecificData(\Magento\Catalog\Model\Product $product)
    {
    }
}
