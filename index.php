<?php


namespace TassFlow\Main
{
    class TassFlow
    {
        private $twig;
        private $session;
        private $rootDir;

        private function getTwig()
        {
            require_once 'vendor/autoload.php';

            $loader = new \Twig\Loader\FilesystemLoader('src/templates/');
            return $twig = new \Twig\Environment($loader, [
                'cache' => 'cache',
                'auto_reload' => true
            ]);
        }

        private function createSession()
        {
            session_start();

            return $_SESSION;
        }

        public function __construct()
        {
            $this->twig = $this->getTwig();
            $this->session = $this->createSession();
            $this->rootDir = dirname(__FILE__);

            if (!is_null($_SERVER['PATH_INFO']))
            {
                var_dump('not home');
            }

            var_dump("dzfef");
        }
    }
}

namespace 
{
    $tassFlow = new TassFlow\TassFlow();
}
