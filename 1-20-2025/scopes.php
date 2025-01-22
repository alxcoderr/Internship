<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scopes</title>
</head>
<body>
    <?php
    // $satan = "21st Century Devil";

    //     function satan() {

    //      global $satan;
    //      return $satan;

    //     }

    //     echo satan();
        
//Class Scopes
    class MyClass {
        //Define a class variable
     static   public $classVar = "Hello World";

                //Define a class method
                public function myMethod() {
                    echo $this->classVar;

                }
    }

    echo MyClass::$classVar;

    ?>
</body>
</html>