<?php
namespace Webkul\Sleekaccordian\Block;
class Sleekaccordian extends \Magento\Framework\View\Element\Template
{
	protected $_scopeConfig;
	public function __construct(
		\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
		\Magento\Framework\View\Element\Template\Context $context,
		array $data = []
	) {
		parent::__construct($context,$data);
		$this->_scopeConfig = $scopeConfig;
	}
    
  public function getSliderImages(){
	  $scope=\Magento\Store\Model\ScopeInterface::SCOPE_STORE;
	  $basepath='sleekaccordian/parameters/';
	  $folderName = \Webkul\Sleekaccordian\Model\Saveimage::UPLOAD_DIR;
	  $urlBuilder=$this->_urlBuilder;
	  return array(
				 array(
					'slider_image'=>$urlBuilder->getBaseUrl(['_type' => \Magento\Framework\UrlInterface::URL_TYPE_MEDIA]) . $folderName.'/'.$this->_scopeConfig->getValue($basepath.'slider_image_1',$scope),
					'image_caption'=>$this->_scopeConfig->getValue($basepath.'image_caption_1',$scope),
					'slide_caption'=>$this->_scopeConfig->getValue($basepath.'slide_caption_1',$scope)
				 ),
				 array(
					'slider_image'=>$urlBuilder->getBaseUrl(['_type' => \Magento\Framework\UrlInterface::URL_TYPE_MEDIA]) . $folderName.'/'.$this->_scopeConfig->getValue($basepath.'slider_image_2',$scope),
					'image_caption'=>$this->_scopeConfig->getValue($basepath.'image_caption_2',$scope),
					'slide_caption'=>$this->_scopeConfig->getValue($basepath.'slide_caption_2',$scope)
				 ),
				 array(
					'slider_image'=>$urlBuilder->getBaseUrl(['_type' => \Magento\Framework\UrlInterface::URL_TYPE_MEDIA]) . $folderName.'/'.$this->_scopeConfig->getValue($basepath.'slider_image_3',$scope),
					'image_caption'=>$this->_scopeConfig->getValue($basepath.'image_caption_3',$scope),
					'slide_caption'=>$this->_scopeConfig->getValue($basepath.'slide_caption_3',$scope)
				 ),
				 array(
					'slider_image'=>$urlBuilder->getBaseUrl(['_type' => \Magento\Framework\UrlInterface::URL_TYPE_MEDIA]) . $folderName.'/'.$this->_scopeConfig->getValue($basepath.'slider_image_4',$scope),
					'image_caption'=>$this->_scopeConfig->getValue($basepath.'image_caption_4',$scope),
					'slide_caption'=>$this->_scopeConfig->getValue($basepath.'slide_caption_4',$scope)
				 ),
				 array(
					'slider_image'=>$urlBuilder->getBaseUrl(['_type' => \Magento\Framework\UrlInterface::URL_TYPE_MEDIA]) . $folderName.'/'.$this->_scopeConfig->getValue($basepath.'slider_image_5',$scope),
					'image_caption'=>$this->_scopeConfig->getValue($basepath.'image_caption_5',$scope),
					'slide_caption'=>$this->_scopeConfig->getValue($basepath.'slide_caption_5',$scope)
				 )
			);
  }
	public function getSleekaccordianConfig(){
		$scope=\Magento\Store\Model\ScopeInterface::SCOPE_STORE;
		$basepath='sleekaccordian/parameters/';
		return array(
					'rounded'=> $this->_scopeConfig->getValue($basepath.'rounded',$scope),
					'auto_play'=> $this->_scopeConfig->getValue($basepath.'auto_play',$scope),
					'enumerate_slides'=> $this->_scopeConfig->getValue($basepath.'enumerate_slides',$scope),
					'pause_on_hover'=> $this->_scopeConfig->getValue($basepath.'pause_on_hover',$scope),
					'image_caption'=> $this->_scopeConfig->getValue($basepath.'image_caption',$scope),
					'slide_caption'=> $this->_scopeConfig->getValue($basepath.'slide_caption',$scope),
					'slide_speed'=> $this->_scopeConfig->getValue($basepath.'slide_speed',$scope),
					'cycle_speed'=> $this->_scopeConfig->getValue($basepath.'cycle_speed',$scope),
					'container_width'=> $this->_scopeConfig->getValue($basepath.'container_width',$scope),
					'header_width'=> $this->_scopeConfig->getValue($basepath.'header_width',$scope),
					'container_height'=> $this->_scopeConfig->getValue($basepath.'container_height',$scope),
				);
	}
}
?>
