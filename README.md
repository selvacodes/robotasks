# Robo Task runner

Steps to use robo cli for bundling / minification for linox

1) Install **composer** globally

2) The below commands install the php packages necessary for handling css and js files 

```
    composer require consolidation/robo

    composer require natxet/CssMin

    composer require patchwork/jsqueeze

```
 3) Initilize robo. The command creates RoboFile.php
 
 ```
   ./vendor/bin/robo init
   
 ```
 
 4) Add tasks to the file
 
 5) Execute tasks with the below command
 
 ```
   ./vendor/bin/robo <function_name>
 
 ```
 
  *Sample functions for minification and bundling provided in the repo*
 
