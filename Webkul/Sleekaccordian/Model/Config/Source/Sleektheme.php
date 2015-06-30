<?php
/**
 * My own options
 *
 */
 namespace Webkul\Sleekaccordian\Model\Config\Source
 use Magento\Framework\Data\OptionSourceInterface;
class Sleektheme implements OptionSourceInterface
{
	 
	 public function toOptionArray()
    {
        return [
            ['value' => 'UPS', 'label' => __('United Parcel Service')],
            ['value' => 'UPS_XML', 'label' => __('United Parcel Service XML')]
        ];
    }
	 
	

}


?>
