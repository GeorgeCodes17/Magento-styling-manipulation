<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Learning\Material\Model\Attribute\Source;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class Material extends AbstractSource
{
    /**
     * Get all options
     * @return array
     */
    public function getAllOptions()
    {
        if (!$this->_options) {
            $this->_options = [
                ['label' => __('Cardboard'), 'value' => 'cardboard'],
                ['label' => __('Leather'), 'value' => 'leather'],
                ['label' => __('Silk'), 'value' => 'silk'],
                ['label' => __('Denim'), 'value' => 'denim'],
                ['label' => __('Nylon'), 'value' => 'nylon'],
                ['label' => __('Paper'), 'value' => 'paper'],
            ];
        }
        return $this->_options;
    }
}
