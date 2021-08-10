<?php

namespace App\Util;

use Jenssegers\Blade\Blade;

class View
{
    protected $blade;

    private function getInstance()
    {
        if ($this->blade == null) {
            $this->blade = new Blade(__DIR__ . '/../../resources/views', '../cache');
        }

        return $this->blade;
    }

    public function render(string $file, array $params)
    {

        $this->blade = $this->getInstance();

        echo $this->blade->make($file, $params)->render();
    }
}