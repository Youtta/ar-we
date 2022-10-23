<?php

// use App\Category;
// use App\ConfigLanguage;

use App\Models\Category;
use App\Models\ConfigLanguage;
use App\Models\Language;
use App\Models\Menu;
use App\Models\Setting;

// use App\Setting;


/**
 * get data to make dynamic navigation menu.
 *
 * @param void
 * @return array
 */
function navMenu()
{
    return Menu::with('children')
        ->orderBy('sort', 'ASC')
        ->get();
}

/**
 * get generic setting data with key.
 *
 * @param void
 * @return array
 */
function getConfig($key)
{
    return Setting::where('key', $key)->first()->value;
}

/**
 * get generic setting data with key for multi-languages.
 *
 * @param void
 * @return array
 */
function getSettings($key, $language_id)
{
    return ConfigLanguage::where('key', $key)->where('language_id', $language_id)->first()->value;
}

function getCategories()
{
    return Category::with('languages')->orderBy('sort')->get();
}


/**
 * get generic setting data with key.
 *
 *
 * @return array
 */
function getLanguages()
{
    return Language::all();
}


