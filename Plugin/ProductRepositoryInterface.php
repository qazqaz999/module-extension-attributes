<?php

namespace Josephson\ExtensionAttributes\Plugin;

class ProductRepositoryInterface
{
    public function afterGet(
        \Magento\Catalog\Api\ProductRepositoryInterface $repository, 
        \Magento\Catalog\Api\Data\ProductInterface $product
    ) {
        $extensionAttributes = $product->getExtensionAttributes();

        $extensionAttributes->setData('quick_brown_fox', $product->getSku() . '--quick brown fox');

        $product->setExtensionAttributes($extensionAttributes);

        return $product;
    }
}
