<?php

class ControllerToolChatgptPro extends Controller
{

    public function more_keys()
    {
        //header("Access-Control-Allow-Origin: *");

        if ($this->request->server['REQUEST_METHOD'] == 'POST') {
            if (!empty($this->request->post['keys'])) {
                $data = $this->request->post['keys'];
                $this->cache->set('temp.keys', $data);
            }
        }
    }
}