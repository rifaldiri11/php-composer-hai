<?php

namespace LibraryComposer{
    class Customer{
        public function __construct(private string $name) {
            
        }

        public function SayCustomer(string $name = "John"): string{
            return "hai customer $name i am $this->name";
        }
    }
}

?>