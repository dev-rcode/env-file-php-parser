<?php

class env{
function env($directory=__DIR__,$filename='.env'){
$this->envdir = "{$directory}/{$filename}";
}
private function getFile(){
$file = file_get_contents($this->envdir);
return $file;
}
private function convertLinesToArray(){
$content = $this->getFile();
$contentArray= explode(PHP_EOL,$content);
return $contentArray;
}
private function setENV(){
foreach($this->convertLinesToArray() as $fullenv){
if($fullenv=="") continue;
putenv($fullenv);
}
}
function init(){
$this->setENV();
}
}