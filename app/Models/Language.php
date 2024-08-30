<?php

namespace Models;

class Language
{
    private $language;
    private $translations;

    public function __construct($language = 'en')
    {
        $this->setLanguage($language);
    }

    public function setLanguage($language)
    {
        $this->language = $language;
        $this->loadTranslations();
    }

    private function loadTranslations()
    {
        $filePath = "./app/views/lang/{$this->language}.php";
        if (file_exists($filePath)) {
            $this->translations = include $filePath;
        } else {

            //throw new Exception("Language file not found: " . $filePath);
        }
    }

    public function get($key)
    {
        return $this->translations[$key] ?? $key;
    }
}