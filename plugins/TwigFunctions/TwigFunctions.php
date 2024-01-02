<?php
class TwigFunctions extends AbstractPicoPlugin
{
    const API_VERSION = 3;
    protected $enabled = false;
    public function onTwigRegistered(Twig_Environment $twig)
    {
        $twig->addFunction(new Twig_SimpleFunction('getFilesInGallery', array($this, 'getFilesInGallery')));
    }

    public function getFilesInGallery()
    {
        $folderPath = "./assets/img/gallery";

        $files = glob($folderPath . '/*');
        $file_names = [];
        
        foreach ($files as $file) {
            $fileName = basename($file);
            if (str_contains($fileName, ".png")) {
                array_push($file_names, $fileName);
            }
        }

        return $file_names;
    }



}
