<?php
namespace Mageplaza\LazySpeaker\Block;

use Magento\Framework\Data\Form\FormKey;
use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;

class ProcessForm extends Template
{

    protected $formKey;

    public function __construct(
        Context $context,
        FormKey $formKey
    )
    {
        $this->formKey = $formKey;
        parent::__construct($context);
    }

    public function getFormAction()
    {
        return $this->getUrl('lazyspeaker/index/save', ['_secure' => true]);
    }

    public function getFormKey()
    {
        return $this->formKey->getFormKey();
    }

    public function getOptionWordClass() {
        $arrOption = [
            ['label' => __('~ Select Type ~'), 'value' => 'none'],
            ['label' => __('Nouns'), 'value' => 'n'],
            ['label' => __('Verb'), 'value' => 'v'],
            ['label' => __('Adjective'), 'value' => 'adj'],
            ['label' => __('Adverb'), 'value' => 'adv'],
            ['label' => __('Prepositions'), 'value' => 'pre'],
            ['label' => __('Others'), 'value' => 'others'],
        ];

        return $arrOption;
    }
}
