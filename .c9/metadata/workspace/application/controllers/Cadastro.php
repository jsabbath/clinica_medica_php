{"filter":false,"title":"Cadastro.php","tooltip":"/application/controllers/Cadastro.php","undoManager":{"mark":23,"position":23,"stack":[[{"start":{"row":0,"column":0},"end":{"row":23,"column":2},"action":"remove","lines":["<?php","","    require_once '../crud/conexao.class.php';","\trequire_once '../crud/crud.class.php';","\trequire_once '../models/usuarios_model.php';","\t","\t$con = new conexao();","\t$con -> connect();","    ","    ","    if(!(empty($_POST))){","        ","    extract($_POST);","","    $new_user = new usuario ($nome, $senha, $email, $dt_nasc,$instituicao, 1);","\t","\t$new_user->inserir();","","    }","","","","","?>"],"id":2},{"start":{"row":0,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');","","class Groups extends CI_Controller ","{","","    var $data;","","    public function __construct()","    {","        parent::__construct();","    }","    ","    public function homepage($id_usuario)","    {","        $this->load->view('mostratec/grupos/list_groups', $this->data);","    }","}   "]}],[{"start":{"row":2,"column":6},"end":{"row":2,"column":12},"action":"remove","lines":["Groups"],"id":3},{"start":{"row":2,"column":6},"end":{"row":2,"column":7},"action":"insert","lines":["C"]}],[{"start":{"row":2,"column":7},"end":{"row":2,"column":8},"action":"insert","lines":["a"],"id":4}],[{"start":{"row":2,"column":8},"end":{"row":2,"column":9},"action":"insert","lines":["d"],"id":5}],[{"start":{"row":2,"column":9},"end":{"row":2,"column":10},"action":"insert","lines":["a"],"id":6}],[{"start":{"row":2,"column":10},"end":{"row":2,"column":11},"action":"insert","lines":["s"],"id":7}],[{"start":{"row":2,"column":11},"end":{"row":2,"column":12},"action":"insert","lines":["t"],"id":8}],[{"start":{"row":2,"column":12},"end":{"row":2,"column":13},"action":"insert","lines":["r"],"id":9}],[{"start":{"row":2,"column":13},"end":{"row":2,"column":14},"action":"insert","lines":["o"],"id":10}],[{"start":{"row":14,"column":37},"end":{"row":14,"column":43},"action":"remove","lines":["grupos"],"id":11},{"start":{"row":14,"column":37},"end":{"row":14,"column":38},"action":"insert","lines":["c"]}],[{"start":{"row":14,"column":38},"end":{"row":14,"column":39},"action":"insert","lines":["a"],"id":12}],[{"start":{"row":14,"column":39},"end":{"row":14,"column":40},"action":"insert","lines":["d"],"id":13}],[{"start":{"row":14,"column":40},"end":{"row":14,"column":41},"action":"insert","lines":["s"],"id":14}],[{"start":{"row":14,"column":41},"end":{"row":14,"column":42},"action":"insert","lines":["a"],"id":15}],[{"start":{"row":14,"column":41},"end":{"row":14,"column":42},"action":"remove","lines":["a"],"id":16}],[{"start":{"row":14,"column":40},"end":{"row":14,"column":41},"action":"remove","lines":["s"],"id":17}],[{"start":{"row":14,"column":40},"end":{"row":14,"column":41},"action":"insert","lines":["a"],"id":18}],[{"start":{"row":14,"column":41},"end":{"row":14,"column":42},"action":"insert","lines":["s"],"id":19}],[{"start":{"row":14,"column":42},"end":{"row":14,"column":43},"action":"insert","lines":["t"],"id":20}],[{"start":{"row":14,"column":43},"end":{"row":14,"column":44},"action":"insert","lines":["r"],"id":21}],[{"start":{"row":14,"column":44},"end":{"row":14,"column":45},"action":"insert","lines":["o"],"id":22}],[{"start":{"row":14,"column":46},"end":{"row":14,"column":57},"action":"remove","lines":["list_groups"],"id":23},{"start":{"row":14,"column":46},"end":{"row":14,"column":63},"action":"insert","lines":["cadastro_usuarios"]}],[{"start":{"row":12,"column":20},"end":{"row":12,"column":28},"action":"remove","lines":["homepage"],"id":32},{"start":{"row":12,"column":20},"end":{"row":12,"column":25},"action":"insert","lines":["users"]}],[{"start":{"row":12,"column":26},"end":{"row":12,"column":37},"action":"remove","lines":["$id_usuario"],"id":33}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":14,"column":79},"end":{"row":14,"column":79},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1473280953523,"hash":"3d81f5806e019e5f6d44b7c20e75e113b6d16fc2"}