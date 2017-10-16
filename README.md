# CakeDC User Permissions Issue

Steps to reproduce locally....

    #!/bin/bash
    git clone https://github.com/CakePHPKitchen/CakeDC-Users-Permissions-Example.git
    cd CakeDC-Users-Permissions-Example
    git checkout Permissions
    composer install

Then 

    bin/cake server -p 9001

You should see the 'Users' config output to the console at this point, otherwise, for a print_r, Navigate to

    http://localhost:9001/
    
