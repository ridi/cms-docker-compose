<?php

use Phinx\Seed\AbstractSeed;

class UserMenu extends AbstractSeed
{
    public function run()
    {
        $menus = $this->fetchAll('
            select *
            from tb_admin2_menu
            where tb_admin2_menu.menu_url like "/super%"
        ');

        $user_menus = $this->table('tb_admin2_user_menu');
        array_map(function($menu) use($user_menus) {
            $data = [
                [
                    'user_id' => 'admin',
                    'menu_id' => $menu['id'],
                    'reg_date' => date('Y-m-d H:i:s'),
                ],
            ];
            $user_menus->insert($data);

        }, $menus);
        $user_menus->save();
    }
}
