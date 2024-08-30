<?php
class TemplateEngine
{
    private $templateDir;

    public function __construct($templateDir)
    {
        $this->templateDir = $templateDir;
    }

    public function render($templateFile, $data = [])
    {
        $templatePath = $this->templateDir . '/' . $templateFile;

        if (!file_exists($templatePath)) {
            throw new Exception("Template file '$templateFile' not found.");
        }

        ob_start();
        extract($data);
        include $templatePath;
        return ob_get_clean();
    }
}
?>
