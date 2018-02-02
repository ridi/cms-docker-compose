<?php

use Phinx\Seed\AbstractSeed;

class TagMenu extends AbstractSeed
{
    public function run()
    {
        $tag = $this->fetchRow('
            select *
            from tb_admin2_tag
            where id = 1
        ');

        $menus = $this->fetchAll('
            select *
            from tb_admin2_menu
            where tb_admin2_menu.menu_url like "/example%"
        ');

        $tag_menus = $this->table('tb_admin2_tag_menu');
        array_map(function($menu) use($tag_menus, $tag) {
            $data = [
                [
                    'tag_id' => $tag['id'],
                    'menu_id' => $menu['id'],
                ],
            ];
            $tag_menus->insert($data);

        }, $menus);
        $tag_menus->save();
    }
}
