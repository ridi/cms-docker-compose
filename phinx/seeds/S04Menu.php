<?php

use Phinx\Seed\AbstractSeed;

class S04Menu extends AbstractSeed
{
    public function run()
    {
        $data = [
            [
                'menu_title' => '예제',
                'menu_url' => '#',
                'menu_order' => 0,
                'menu_deep' => 0,
                'is_use' => 1,
                'is_show' => 1,
                'is_newtab' => 0,
                'reg_date' => date('Y-m-d H:i:s'),
            ],
            [
                'menu_title' => 'APP',
                'menu_url' => '/example/home',
                'menu_order' => 1,
                'menu_deep' => 1,
                'is_use' => 1,
                'is_show' => 1,
                'is_newtab' => 0,
                'reg_date' => date('Y-m-d H:i:s'),
            ],
            [
                'menu_title' => '메뉴',
                'menu_url' => '/example/user/menus',
                'menu_order' => 4,
                'menu_deep' => 1,
                'is_use' => 1,
                'is_show' => 0,
                'is_newtab' => 0,
                'reg_date' => date('Y-m-d H:i:s'),
            ],
            [
                'menu_title' => 'CMS 관리 - 퍼포먼스팀',
                'menu_url' => '#',
                'menu_order' => 5,
                'menu_deep' => 0,
                'is_use' => 1,
                'is_show' => 1,
                'is_newtab' => 0,
                'reg_date' => date('Y-m-d H:i:s'),
            ],
            [
                'menu_title' => '어드민유저 관리',
                'menu_url' => '/super/users',
                'menu_order' => 6,
                'menu_deep' => 1,
                'is_use' => 1,
                'is_show' => 1,
                'is_newtab' => 0,
                'reg_date' => date('Y-m-d H:i:s'),
            ],
            [
                'menu_title' => '권한 태그 관리',
                'menu_url' => '/super/tags',
                'menu_order' => 7,
                'menu_deep' => 1,
                'is_use' => 1,
                'is_show' => 1,
                'is_newtab' => 0,
                'reg_date' => date('Y-m-d H:i:s'),
            ],
            [
                'menu_title' => '메뉴 관리',
                'menu_url' => '/super/menus',
                'menu_order' => 8,
                'menu_deep' => 1,
                'is_use' => 1,
                'is_show' => 1,
                'is_newtab' => 0,
                'reg_date' => date('Y-m-d H:i:s'),
            ],
            [
                'menu_title' => '변경 이력',
                'menu_url' => '/super/logs',
                'menu_order' => 9,
                'menu_deep' => 1,
                'is_use' => 1,
                'is_show' => 1,
                'is_newtab' => 0,
                'reg_date' => date('Y-m-d H:i:s'),
            ],
            [
                'menu_title' => '그룹 관리',
                'menu_url' => '/super/groups',
                'menu_order' => 10,
                'menu_deep' => 1,
                'is_use' => 1,
                'is_show' => 1,
                'is_newtab' => 0,
                'reg_date' => date('Y-m-d H:i:s'),
            ],
        ];

        $posts = $this->table('tb_admin2_menu');
        $posts->insert($data)->save();
    }
}
