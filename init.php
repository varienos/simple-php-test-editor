<?php

$output = '';
$code   = '<?php
            class Foo
            {
                /** @var string **/
                private $helloString = \'Hello world!\';
            
                public function printString(): void
                {
                    echo $this->helloString;
                }
            }
            
            $foo = new Foo();
            $foo->printString();
            
            ?>';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['code'])) {
  $code = $_POST['code'];

  ob_start();

  try {
    eval('?>' . $code);
  } catch (Exception $e) {
    echo "Error: " . $e->getMessage();
  }

  $output = ob_get_clean();
}
