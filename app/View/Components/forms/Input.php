<?php

namespace App\View\Components\forms;

use Illuminate\View\Component;

class Input extends Component
{
    private $children  = null;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(private string $t, private string $name, private string $p, private bool $r, private string $id, private string $className, $children = null)
    {
        $this->children  = $children;
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {


        return ("  <div class='form-group mb-3' >
        <input type='{$this->t}' 
        placeholder='{$this->p}' 
        id='{$this->id}' 
        class='{$this->className}' 
        name='{$this->name}' 
        required='{$this->r}' />
        
        {$this->children}
       
        </div>");
    }
}
