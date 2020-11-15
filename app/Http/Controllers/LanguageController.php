<?php

namespace App\Http\Controllers;

/**
 * Class LanguageController.
 */
class LanguageController extends Controller
{
    /**
     * @param $locale
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function swap($locale)
    {
        if (array_key_exists($locale, config('locale.languages'))) {
            session()->put('locale', $locale);
        }

        return redirect()->back();
    }
    // swap2
    public function swap2($locale) 
    {
        if(array_key_exists($locale, config('locale.languages2'))) {
            session()->put('locale', $locale);
        }
        return redirect()->back();
    }
}
