<?php
// Adam James theme for Datenstrom Yellow

class YellowAdamjames {
    const VERSION = "0.1.0";
    public $yellow;

    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("githubUrl", "");
        $this->yellow->system->setDefault("twitterUrl", "");
        $this->yellow->system->setDefault("linkedinUrl", "");
        $this->yellow->system->setDefault("mastodonUrl", "");
        $this->yellow->system->setDefault("sourceUrl", "");
    }

    public function onUpdate($action) {
        $fileName = $this->yellow->system->get("coreExtensionDirectory").$this->yellow->system->get("coreSystemFile");
        if ($action=="install") {
            $this->yellow->system->save($fileName, array("theme" => "adamjames"));
        } elseif ($action=="uninstall" && $this->yellow->system->get("theme")=="adamjames") {
            $this->yellow->system->save($fileName, array("theme" => $this->yellow->system->getDifferent("theme")));
        }
    }
}
