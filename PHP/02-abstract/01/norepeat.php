<?php


abstract class AcheivementType
{
    public function name()
    {
        $class = (new ReflectionClass($this))->getName();
        return trim(preg_replace('/[A-Z]/', ' $0', $class));
    }

    public function icon()
    {
        return strtolower(str_replace(' ', '-', $this->name())) . '.png';
    }

    abstract public function qualifier($user);    
}

class FirstThousandPoints extends AcheivementType
{
    public function qualifier($user)
    {

    }
 }


 class FirstBestAnswer extends AcheivementType
 {
    public function qualifier($user)
    {

    }
 }

 $achievement = new FirstBestAnswer();
 echo $achievement->icon();

