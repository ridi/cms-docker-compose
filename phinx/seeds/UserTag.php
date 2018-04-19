<?php

use Phinx\Seed\AbstractSeed;

class UserTag extends AbstractSeed
{
    public function run()
    {
        $tags = $this->fetchAll('
            select *
            from tb_admin2_tag
        ');

        $user_tags = $this->table('tb_admin2_user_tag');
        array_map(function($tag) use($user_tags) {
            $data = [
                [
                    'user_id' => 'admin',
                    'tag_id' => $tag['id'],
                ],
            ];
            $user_tags->insert($data);

        }, $tags);
        $user_tags->save();
    }
}
