<?php
/**
 * 一个电脑接口
 */
interface Computer {
    public function name();
    public function work();
}

/**
 * 笔记本电脑类
 */
class NoteComputer implements Computer {
    public function name() {
        echo '笔记本电脑';
    }
    public function work(){
        echo '可以手提着。';
    }
}

/**
 * 台式电脑类
 */
class DeskComputer implements Computer {
    public function name() {
        echo '台式电脑';
    }
    public function work() {
        echo '只能放在家里用';
    }
}

/**
 * 一个人类
 */
class Peper {
    public function run($obj){
        $obj -> name();
        $obj -> work();
    }
}

//实例化笔记本电脑类
$noet = new NoteComputer();
//实例化台式电脑类
$desk = new DeskComputer();;
//实例化人类
$peper = new Peper();
$peper ->run($desk);

$clone = clone $noet;

function demo() {

}
    )
}





















