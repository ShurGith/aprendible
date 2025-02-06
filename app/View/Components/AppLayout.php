<?php
    
    namespace App\View\Components;
    
    use Illuminate\View\Component;
    use Illuminate\View\View;
    
    class AppLayout extends Component
    {
        /*public $metaTitle = "Titulo por Defecto";
        public $metaDescription = "Descripción por defecto";*/
        
        public function __construct(
          public string $metaTitle = "Titulo por Defecto",
          public string $metaDescription = "Descripción por defecto"
        ) {
            $this->metaTitle = $metaTitle;
            $this->metaDescription = $metaDescription;
        }
        
        public function render(): View
        {
            return view('layouts.app');
        }
    }
