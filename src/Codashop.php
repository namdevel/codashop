<?php
namespace Namdevel;

class Codashop
{
    const API_URL = "https://public-api.namdevel.rest";
    
    public function checkUser($game_code, $user_id, $zone_id = null)
    {
        
        $field = array(
            'game_code' => (string) $game_code,
            'user_id' => (string) $user_id,
            'zone_id' => (string) $zone_id
        );
        
        return self::request(self::API_URL . "/v1/init/username", $field);
    }
    
    public function gameList()
    {
        return self::request(self::API_URL . "/v1/game_list/explore");
    }
    
    protected function request($url, $post = false, $headers = false)
    {
        $ch = curl_init();
        
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0
        ));
        
        if ($post) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
        }
        
        if ($headers) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }
        
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}
