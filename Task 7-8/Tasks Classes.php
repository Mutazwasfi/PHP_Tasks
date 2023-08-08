<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
</head>
<body>
  <?php

  echo "Task 1<br><br>";

  class outputMsg{
    public function __construct() {
   echo "MyClass class has initialized !";
    }
  }
  $display = new outputMsg;

  echo "<hr>";
  echo "Task 2<br><br>";
  
  class greeting {
    public $msg2 ="Hello All, I am ";

    function greet($name) {
       return " $this->msg2.$name";
    }
 }

  $newPerson = new greeting();
  echo $newPerson->greet("scott");

  
  echo "<hr>";
  echo "Task 3<br><br>";

  class factorial_of_a_number {
  protected $_n;

  function __construct($n)
   {
     if (!is_int($n))
	   {
	      throw new InvalidArgumentException('Not a number or missing argument');
      }
    $this->_n = $n;
	}
  function result()
    {
     $factorial = 1;
     for ($i = 1; $i <= $this->_n; $i++)
	  {
	    $factorial *= $i;
    }
	   return $factorial;
	 }
 }

  $newfactorial = New factorial_of_a_number(6);
  echo $newfactorial->result();

  
  echo "<hr>";
  echo "Task 4<br><br>";

  class array_sort {
    protected $_asort;
    
    function __construct(array $asort)
     {
        $this->_asort = $asort;
     }

    function sortedarr()
     {
        $sorted = $this->_asort;
        sort($sorted);
        return $sorted;
      }
  }
  $sortarray = new array_sort(array(11, -2, 4, 35, 0, 8, -9));
  print_r($sortarray->sortedarr());


  echo "<hr>";
  echo "Task 5<br><br>";

  $startDate = new DateTime("1981-11-03");
  $endDate = new DateTime("2013-09-04");
  $timePassed = $startDate->diff($endDate);
  echo "Difference : " . $timePassed->y . " years, " . $timePassed->m." months, ".$timePassed->d." days ";

  echo "<hr>";
  echo "Task 6<br><br>";

  $dt = DateTime::createFromFormat('m-d-Y', '12-08-2004')->format('Y-m-d');
  echo $dt;

  ?>
</body>
</html>