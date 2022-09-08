<?php

namespace App\View\Components\Ui;

use Illuminate\View\Component;

class Alert extends Component
{
    public $type;

    // PHP optional paramater
    // public function __construct($message, $type = null)
    public function __construct($type)
    {
        // $this->message = $message;
        $this->type = $type;
    }

    public function typeClass(){
        if($this->type === 'danger'){
            return 'danger';
        }
        return 'sucess';
    }

    public function render()
    {
        return view('components.ui.alert');
    }
}
