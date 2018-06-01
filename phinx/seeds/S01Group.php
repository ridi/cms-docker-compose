<?php 
declare(strict_types=1); 
 
use Phinx\Seed\AbstractSeed; 
 
class S01Group extends AbstractSeed 
{ 
    public function run() 
    { 
        $data = [ 
            [ 
                'name' => 'example_team', 
                'is_use' => 1, 
                'creator' => 'admin', 
            ], 
        ]; 
 
        $posts = $this->table('tb_admin2_group'); 
        $posts->insert($data)->save(); 
    } 
} 
