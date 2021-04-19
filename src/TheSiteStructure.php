<?php
namespace kristoffbertram\TheSiteStructure;

class TheSiteStructure
{

    private $thesitestructure                                                                                           = array();

    private function doSiteStructure() {

        $url                                                                                                            = $_SERVER['REQUEST_URI'];
        $parsedUrl                                                                                                      = parse_url($url);

        $path                                                                                                           = $parsedUrl['path'];
        $path                                                                                                           = rtrim($path, '/');
        $parts                                                                                                          = explode('/', ltrim($path, '/'));
        $parts                                                                                                          = array_reverse($parts);

        $this->setUid($parts[0]);

        $classes                                                                                                        = '';

        foreach ($parts as $part) {

            $classes .= $part." ";

        }

        $this->setClasses($classes);

    }

    private function setClasses($Classes) {

        $this->thesitestructure['classes'] = $Classes;

    }

    private function getClasses() {

        $this->doSiteStructure();
        return $this->thesitestructure['classes'];

    }

    public function classes() {

        return $this->getClasses();

    }

    private function setUid($Uid) {

        $this->thesitestructure['uid'] = $Uid;

    }

    private function getUid() {

        $this->doSiteStructure();
        return $this->thesitestructure['uid'];

    }

    public function uid() {

        return $this->getUid();

    }

}