<?php
    /**
     * Summary of User
     * const
     * Scope
     */
    class User {
        public $name, $password;

        function __construct()
        {
            // Construct instruction
        }

        function save_user()
        {
            echo "User's data" . "<br>";
        }

        function __destruct()
        {
        // Descruct code
        }

        function get_password()
        {
            return $this->password;
        }
        
    }

    $object = new User;
    print_r($object); echo "<br>";
    $object->name = "Joe";
    $object->password = "mypass";
    print_r($object); echo "<br>";
    $object->save_user();

    $object1 = new User();
    $object1->name = "Alice";
    $object2 = clone $object1;
    $object2->name = "Amy";
    echo "object1 name = " . $object1->name . "<br>";
    echo "object2 name = " . $object2->name . "<br>";

    $object->password = "secret";
    echo $object->get_password() . "<br>";

    echo $object->about_me = 'Location: This';


    ################################################################

    class Translate
    {
        const ENGLISH = 0;
        const SPANISH = 1;
        const FRENCH = 2;
        //.....
        static function lookup()
        {
            echo "<br>" . self::SPANISH . "<br>";
        }
    }

    Translate::lookup();


    #######################################################

    class Example
    {
        public $name = "Michael";
        var $age = 23;  # ==public
        protected $usercount;

        private function admin()
        {}

        static function pwd_string()
        {
            echo "Please, input your password" . "<br>";
        }
    }

    Example::pwd_string();
    
    ######################################

    class Test
    {
        static $static_property = "This is static property";

        function get_sp()
        {
            return self::$static_property;
        }
    }

    $temp = new Test();
    echo "Test A: " . Test::$static_property . "<br>";
    echo "Test B: " . $temp->get_sp() . "<br>";
    echo "Test C: " . $temp->$static_property . "<br>";
