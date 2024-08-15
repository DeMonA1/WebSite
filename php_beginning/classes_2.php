<?php
    /**
     * Inharitance
     */
    class User
    {
        public $name, $password;

        function save_user()
        {
            echo "User's data";
        }
    }


    class Subscriber extends User
    {
        public $phone, $email;
        
        function display()
        {
            echo "Name: " . $this->name . "<br>";
            echo "Pass: " . $this->password . "<br>";
            echo "Phone: " . $this->phone . "<br>";
            echo "Email: " . $this->email . "<br>";
        }
    }

    $object = new Subscriber();
    $object->name = "Fred";
    $object->password = 'pword';
    $object->phone = '012 123 13441';
    $object->email = "fred@abstract.com";
    $object->display();

    ######################################

    class Dad
    {
        function test()
        {
            echo "[Class Dad} I am your father";
        }
    }


    class Son extends Dad
    {   static $name=1;
        function test()
        {
            echo "[Class Son] I'm Luck<br>";
        }

        function test2()
        {
            parent::test();
        }
        
    }

    $object = new Son();
    $object->test();
    $object->test2();

    #####################################

    class Wildcat
    {
        public $fur;    // wild cats have fur;

        function __construct()
        {
            $this->fur = "TRUE";
        }
    }


    class Tiger extends Wildcat
    {
        public $stripes; // Tigers have strips

        function __construct()
        {
            parent::__construct();
            $this->stripes = "TRUE";
        }
    }

    $object = new Tiger();
    echo "Tigers have ...<br>";
    echo "Fur: " . $object->fur . "<br>";
    echo "Stripes: " . $object->stripes . "<br>";

    
