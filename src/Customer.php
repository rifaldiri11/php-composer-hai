<?php

namespace LibraryComposer{
    class Customer{
        public function __construct(private string $name) {
            
        }

        public function SayCustomer(string $name = "Guest"): string{
            return "hai customer $name i am $this->name";
        }
    }
}

?>