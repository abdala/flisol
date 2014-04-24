<?php
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'flisol\\filtro\\interfacefiltro' => '/../fonte/Filtro/InterfaceFiltro.php',
                'flisol\\filtro\\inteirotest' => '/Filtro/InteiroTest.php',
                'flisol\\filtro\\inteiro' => '/../fonte/Filtro/Inteiro.php',
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    }
);