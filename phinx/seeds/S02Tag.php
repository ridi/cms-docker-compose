<?php

use Phinx\Seed\AbstractSeed;

class S02Tag extends AbstractSeed
{
    public function run()
    {
        $data = [
            [
                'name' => 'example',
                'display_name' => '예제',
                'is_use' => 1,
                'creator' => 'admin',
                'reg_date' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        $tags = $this->table('tb_admin2_tag');
        $tags->insert($data)->save();
    }
}
