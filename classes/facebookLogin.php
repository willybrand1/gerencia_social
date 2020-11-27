<?php

class FaceApp{
    public $ini;
    public $msg;
    public $arr;

    public function __clone(){}

    public function __construct(){
        $this->ini        = $ini;
        $this->msg        = $msg;
        $this->fp         = $fp;
        $this->fb         = $fb;
        $this->dataToSave = $dataToSave;
        $this->arr        = $arr;
    }

    public function addApp($appId,$appSecret,$name){
        $this->appId     = $appId;
        $this->appSecret = $appSecret;
        $this->name      = $name;

        $this->ini = parse_ini_file('config/addApp.ini',true);

        try{
            if($this->ini[$this->name]){
                $this->msg        = "App já existe";
                $this->arr['msg'] = $this->msg;

                echo json_encode($this->arr,JSON_UNESCAPED_UNICODE);
            }else{
                $this->dataToSave = "[".$this->name."]\n"."appId = '".$this->appId."'\n"."appSecret = '".$this->appSecret."'\n";
                $this->fp = fopen('config/addApp.ini', 'w');
                fwrite($this->fp, $this->dataToSave);
                flock($this->fp, LOCK_UN);
                fclose($this->fp);
            }
        }catch(Exception $e){
            return $e->getMessage();
        }
    }

    public function faceLogin($name){
        $this->name = $name;
        $this->ini  = parse_ini_file('config/addApp.ini',true);

        try{
            if($this->ini[$this->name]){
                $this->fb = [
                    'app_id' => $this->ini[$this->name]['appId'],
                    'app_secret' => $this->ini[$this->name]['appSecret'],
                    'default_graph_version' => 'v2.10',
                ];

                return $this->fb;
            }else{
                $this->msg        = "Erro ao abrir arquivo de configuração. Favor reportar o erro ao administrador do sistema.";
                $this->arr['msg'] = $this->msg;

                echo json_encode($this->arr,JSON_UNESCAPED_UNICODE);
            }
        }catch(Exception $e){
            return $e->getMessage();
        }
    }
}