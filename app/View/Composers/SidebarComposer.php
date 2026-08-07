<?php

namespace App\View\Composers;

use App\Models\User;
use Illuminate\View\View;

class SidebarComposer {

    public function compose(View $view): void {

        $user = auth()->user();

        $menu = [
            ['label' => 'Dashboard', 'route' => 'dashboard'],
        ];

        if ($user && $user->isAdmin()) {
            $menu[] = [
                'label' => 'Administrador',
                'children' => [
                    ['label' => 'Cadastrar Usuário', 'route' => null],
                    ['label' => 'Cadastrar Empresa/Centro de Custo', 'route' => null],
                ],
            ];
        }

        $menu[] = [
            'label' => 'Ordem de Serviço',
            'children' => [
                ['label' => 'Monitor de OS', 'route' => null],
            ],
        ];

        $view->with('menu', $menu);

    }

}