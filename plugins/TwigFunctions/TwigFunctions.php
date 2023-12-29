<?php
class TwigFunctions extends AbstractPicoPlugin
{
    const API_VERSION = 3;
    protected $enabled = false;
    public function onTwigRegistered(Twig_Environment $twig)
    {
        // Add your custom Twig functions here
        $twig->addFunction(new Twig_SimpleFunction('getFilesInGallery', array($this, 'getFilesInGallery')));
    }

    public function getFilesInGallery()
    {
        // Hämta sökvägen från Pico-konfigurationen
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

    /**
     * @deprecated This method is deprecated. Directly call getFilesInFolder() instead.
     */
    public function __call($methodName, $params)
    {
        if ($methodName === 'getFilesInFolder') {
            return call_user_func_array(array($this, $methodName), $params);
        }
        trigger_error('Call to undefined method ' . get_class($this) . '::' . $methodName . '()', E_USER_DEPRECATED);
    }
}
