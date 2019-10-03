<?php

namespace Training\TestOM\Model;

class Test
{
    private $manager;
    private $arrayList;
    private $name;
    private $number;
    private $managerFactory;
    private $managerCustomImplementation;

    public function __construct(
            ManagerInterface $manager,
            $name,
            int $number,
            array $arrayList,
            ManagerInterfaceFactory $managerFactory,
            ManagerInterface $managerCustomImplementation
        ) {
        $this->manager = $manager;
        $this->name = $name;
        $this->number = $number;
        $this->arrayList = $arrayList;
        $this->managerFactory = $managerFactory;
        $this->managerCustomImplementation = $managerCustomImplementation;
    }

    public function log()
    {
        echo '<hr>';
        print_r(get_class($this->manager));
        echo '<br>';
        print_r($this->name);
        echo '<br>';
        print_r($this->number);
        echo '<br>';
        print_r($this->arrayList);
        echo '<br>';
        
       
        //that will not be working because we don't have method create implemented
//        $newManager = $this->manager->create();
        
        //intead of this we can use factory directly and it will return Training\TestOM\Model\ManagerInterfaceFactory
        print_r(get_class($this->managerFactory));
        
        
        // 1.6
        echo '<br>';
        print_r(get_class($this->managerCustomImplementation));
    }


}
