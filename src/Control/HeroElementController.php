<?php

namespace BiffBangPow\Element\Control;

use DNADesign\Elemental\Controllers\ElementController;
use SilverStripe\View\Requirements;
use SilverStripe\View\ThemeResourceLoader;

class HeroElementController extends ElementController
{
    protected function init()
    {
        parent::init();
        $themeCSS = ThemeResourceLoader::inst()->findThemedCSS('client/dist/css/elements/hero');
        if ($themeCSS) {
            Requirements::css($themeCSS, '', ['inline' => true]);
        }
    }
}
