<?php
class InternalExample {
    public function say() {
        return "Hello world\n";
    }
}
class Example {
    public function run() {
        $internal = new InternalExample();
        return $internal->say();
    }
}
$ex = new Example();
header("Content-Type: text/plain");
echo $ex->run();
