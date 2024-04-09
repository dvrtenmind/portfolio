<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;
use function url;
use function view;

class Portfolio extends Component
{
    public array $items = [];

    public array $tabs = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Python', 'MongoDB', 'Postgresql'],
                'title' => 'ChatBot Automatizado para Skype',
                'image' => url('/img/php-mvc-framework.png'),
                'github' => 'https://github.com/dvrtenmind'
            ],
            [
                'category' => ['Laravel', 'PHP', 'mySQL','Setor Elétrico'],
                'title' => 'Gerador de XML SIGET',
                'image' => url('/img/php-mvc-framework.png'),
                'github' => 'https://github.com/dvrtenmind'
            ],
            [
                'category' => ['Laravel', 'PHP', 'Jetstream'],
                'title' => 'Sistema Web de Time-Sheets',
                'image' => url('/img/php-mvc-framework.png'),
                'github' => 'https://github.com/dvrtenmind'
            ],
            [
                'category' => ['Python', 'Pandas'],
                'title' => 'Gerador de Relatório Fotográfico',
                'image' => url('/img/php-mvc-framework.png'),
                'github' => 'https://github.com/dvrtenmind'
            ],
            [
                'category' => ['Python'],
                'title' => 'Ferramentas Diversas - Imagens e Arquivos',
                'image' => url('/img/php-mvc-framework.png'),
                'github' => 'https://github.com/dvrtenmind'
            ],
            [
                'category' => ['Python', 'Setor Elétrico'],
                'title' => 'Ferramentas Diversas - Setor Elétrico',
                'image' => url('/img/php-mvc-framework.png'),
                'github' => 'https://github.com/dvrtenmind'
            ],
            [
                'category' => ['Server', 'PFSense'],
                'title' => 'Firewall, VPN e Infraestrutura de Rede',
                'image' => url('/img/php-mvc-framework.png'),
                'github' =>  'https://github.com/dvrtenmind'
            ],
            [
                'category' => ['Server', 'TrueNas'],
                'title' => 'Servidor de Dados',
                'image' => url('/img/php-mvc-framework.png'),
                'github' =>  'https://github.com/dvrtenmind'
            ],
            [
                'category' => ['Server', 'ProxMox'],
                'title' => 'Ambiente de Virtualização de Servidores',
                'image' => url('/img/php-mvc-framework.png'),
                'github' =>  'https://github.com/dvrtenmind'
            ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
