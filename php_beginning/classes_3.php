<?php
    class Record
    {
        public string $username;
        public string $email;

        public function __construct(
            string $username,
            string $email,
        ) {
            $this->username = $username;
            $this->email = $email;
        }
    }

    #        EQUAL TO

    class newRecord 
    {
        public function __construct(
            public string $username,
            public string $email,
        ) {}
    }

