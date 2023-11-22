<?php

namespace BiffBangPow\Element;

use BiffBangPow\Element\Control\HeroElementController;
use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextareaField;
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
    private static $inline_editable = false;
    private static $controller_class = HeroElementController::class;

    /**
     * @config
     * @var string
     */
    private static $upload_directory = 'Hero';

    /**
     * @var array
     */
    private static $db = [
        'Subtitle' => 'Text',
        'Content' => 'Text'
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
                TextareaField::create('Content', 'Additional Content'),
                UploadField::create('BackgroundImage', 'Background Image')
                    ->setAllowedFileCategories('image/supported')
                    ->setFolderName($this->config()->get('upload_directory'))
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
        return 'bbp-hero-element';
    }
}
