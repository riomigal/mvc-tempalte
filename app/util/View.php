<?php

namespace App\Util;

use Jenssegers\Blade\Blade;

// Integrates blade template in views
class View
{
    protected $blade;

    private function getInstance()
    {
        if ($this->blade == null) {
            $this->blade = new Blade(root_path('/resources/views'), root_path('/cache'));
        }

        return $this->blade;
    }

    public function render(string $file, array $params)
    {

        $this->blade = $this->getInstance();

        echo $this->blade->make($file, $params)->render();
    }
}