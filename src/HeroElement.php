<?php

namespace BiffBangPow\Element;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;

class HeroElement extends BaseElement
{
    /**
     * @var string
     */
    private static $table_name = 'ElementHero';

    private static $singular_name = 'hero element';

    private static $plural_name = 'hero elements';

    private static $description = 'Displays a large background image with text across it, designed for the top of page';

    /**
     * @var array
     */
    private static $db = [
        'Subtitle' => 'Text',
    ];

    /**
     * @var array
     */
    private static $has_one = [
        'BackgroundImage' => Image::class,
    ];

    /**
     * @var array
     */
    private static $owns = [
        'BackgroundImage',
    ];

    /**
     * @return FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab(
            'Root.Main',
            [
                TextField::create('Subtitle'),
                UploadField::create('BackgroundImage', 'Background Image')->setAllowedMaxFileNumber(1)
            ]
        );

        return $fields;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return 'Hero';
    }

    public function getSimpleClassName()
    {
        return 'hero-element';
    }
}
