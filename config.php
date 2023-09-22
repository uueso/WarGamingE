<?php

    $token = "6372603872:AAHTWwQ-PCthRkQXHNkg04dYN3V1E_elLSw";
    $chat_id = "5986409484";

    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $ip = $_SERVER['REMOTE_ADDR'];

    function getOS() {
        global $user_agent;

        $os_platform = "Unknown OS Platform";
        $os_array = array(
            '/Windows NT 10.0/i' => 'Windows 10',
            '/macintosh|mac os x/i' =>  'Mac OS X',
            '/linux/i' => 'Linux',
            '/ubuntu/i' => 'Ubuntu',
            '/iphone/i' => 'iPhone',
            '/android/i' => 'Android',
            '/blackberry/i' => 'BlackBerry',
            '/webos/i' => 'Mobile'
        );

        foreach ($os_array as $regex => $value) { 
            if (preg_match($regex, $user_agent)) {
                $os_platform = $value;
            }
        }   
        return $os_platform;
    }

    function getIP() {
        global $ip;
        
        $data = json_decode(file_get_contents("http://ip-api.com/json/{$ip}?lang=ru"), true);
        $country = $data["country"];
        $region = $data["regionName"];
        $city = $data["city"];

		return [$ip, $country, $region, $city];
    }
?>