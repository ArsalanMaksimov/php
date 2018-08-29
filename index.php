<?php
$message = 'hello my name is arsalan';
$message1="привет меня зовут арсалан";
echo $message1."<br/>";
echo "<br/>";
//work_with_ifelse();
//sakura();
function work_with_ifelse()
{
    $a = 15;
    $b = 10;
    if ($a < $b) {
        echo "15 больше, чем 10" . "<br/>";
    } else {
        echo "нет, 15 больше, чем 10" . "<br/><br/>";
    }
}
function sakura()
{
	$x=0;
	echo " вызвал функцию sakura {"."<br/>";
	while ($x++<10)
	{
		echo $x."<br/s>";
	}
    echo "}"."<br/>";
}
function sakura2() // возвращает целое число
{
	return 2018;
}
/*echo "вызвал функцию sakura2 {"."<br/>".sakura2()."<br/>";
echo "}"."<br/>";
*/
//__________________________________________________________________________

class Book
{
	function function_1()
	{
		$x=0;
		echo "<br/>"."вызвал функцию function_1 ";
		while ($x++<10)
		{
			echo "<br/>".$x." О..";
		}
        echo "<br/>";
	}
	var $name;
	function get_name()
	{
		echo "<br/>"."О..."."<br/>";
        $this->function_1();
    }
	
}

class  A extends B
{
    private static function A1(){echo " это функция A1"."<br/>";}
    private function A2(){echo " это функция A2"."<br/>";}
    public static function A3(){echo " это функция A3"."<br/>";}
    public function A4 (){echo " это функция A4"."<br/>";}
    protected static function A5 (){echo " это функция A5"."<br/>";}
    protected function A6 (){echo " это функция A6"."<br/>";}
    public function A7()
    {
        return "это функция A7 return любые типы";
    }
}
class B
{
    private static function B1(){echo " это функция B1"."<br/>";}
    private function B2(){echo " это функция B2"."<br/>";}
    public static function B3(){echo " это функция B3"."<br/>";}
    public function B4 (){echo " это функция B4"."<br/>";}
    protected static function B5 (){echo " это функция B5"."<br/>";}
    protected function B6 (){echo " это функция B6"."<br/>";}
    public function B7()
    {
        return "это функция B7 return любые типы";
    }
    public function B8()
    {
        return 2+3;
    }
    public function B9()
    {
        return 20-3;
    }
    public function B10()
    {
        return 2*3;
    }
    public function B11()
    {
        return 30/3;
    }
    public function B12($num1, $num2)
    {
        return $num1+$num2;
    }
    public function B13($num1, $num2)
    {
        return $num1-$num2;
    }
    public function B14($num1, $num2)
    {
        return $num1*$num2;
    }
    public function B15($num1, $num2)
    {
        return $num1/$num2;
    }
}
class Employers extends A
{
    private static function E1(){echo " это функция E1"."<br/>";}
    private function E2(){echo " это функция E2"."<br/>";}
    public static function E3(){echo " это функция E3"."<br/>";}
    public function E4 (){echo " это функция E4"."<br/>";}
    protected static function E5 (){echo " это функция E5"."<br/>";}
    protected function E6 (){echo " это функция E6"."<br/>";}
    public function E7()
    {
        return "это функция E7 return любые типы";
    }
}

    $ob = new Book;
    echo $ob->name = "текст";
    $ob->get_name();

    //$ClassEmployers = new Employers;
    //$ClassEmployers->B3();

    Employers::A3();// вызов статической функции A3 унаследованного от класса A
    Employers::A4();// вызов функции A4 унаследованного от класса A
    echo Employers::A7()."<br/>";// вызов функции A7 унаследованного от класса A
    Employers::B3();// вызов статической функции B3 унаследованного от класса B
    Employers::B4();// вызов функции B4 унаследованного от класса B
    echo Employers::B7()."<br/>";// вызов функции B7 унаследованного от класса B
    Employers::E3();// вызов статической функции E3 класса E
    Employers::E4();// вызов функции E4 класса E
    echo Employers::E7()."<br/>";// вызов функции E7 класса E
    echo "<br/>";
    B::B3();// вызов статической функции B3 класса B
    B::B4();// вызов функции B4 класса B
    echo B::B7()."<br/>";// вызов функции B7 класса B
    echo B::B8()."<br/>";// вызов функции B8 (СЛОЖЕНИЕ)
    echo B::B9()."<br/>";// вызов функции B9 (ВЫЧИТАНИЕ)
    echo B::B10()."<br/>";// вызов функции B10 (УМНОЖЕНИЕ)
    echo B::B11()."<br/>";// вызов функции B11 (ДЕЛЕНИЕ)
    echo B::B12(50,55)."<br/>";// вызов функции B12 (СЛОЖЕНИЕ)
    echo B::B13(100,23)."<br/>";// вызов функции B13 (ВЫЧИТАНИЕ)
    echo B::B14(10,50)."<br/>";// вызов функции B14 (УМНОЖЕНИЕ)
    echo B::B15(99,2)."<br/>";// вызов функции B15 (ДЕЛЕНИЕ)
    echo "<br/>";
    A::A3();// вызов статической функции A3 класса A
    A::A4();// вызов функции A4 класса A
    echo A::A7()."<br/>";// вызов функции A7 унаследованного от класса A
    A::B3();// вызов статической функции B3 унаследованного от класса B
    A::B4();// вызов функции B4 унаследованного от класса B
    echo A::B7()."<br/>";// вызов функции B7 унаследованного от класса B
    echo "<br/>";

    $Employers=new Employers();// создаем объект класса Employers
    echo $Employers->B7()."<br/>";//получаем доступ к члену класса Employers функции B7
    echo $Employers->B8()."<br/>";// получаем доступ к члену класса Employers функции B8 (СЛОЖЕНИЕ)
    echo $Employers->B9()."<br/>";// получаем доступ к члену класса Employers функции B9 (ВЫЧИТАНИЕ)
    echo $Employers->B10()."<br/>";// получаем доступ к члену класса Employers функции B10 (УМНОЖЕНИЕ)
    echo $Employers->B11()."<br/>";// получаем доступ к члену класса Employers функции B11 (ДЕЛЕНИЕ)
    echo $Employers->B12(50,55)."<br/>";// получаем доступ к члену класса Employers функции B12 (СЛОЖЕНИЕ)
    echo $Employers->B13(100,23)."<br/>";// получаем доступ к члену класса Employers функции B13 (ВЫЧИТАНИЕ)
    echo $Employers->B14(10,50)."<br/>";// получаем доступ к члену класса Employers функции B14 (УМНОЖЕНИЕ)
    echo $Employers->B15(99,2)."<br/>";// получаем доступ к члену класса Employers функции B15 (ДЕЛЕНИЕ)


class Konstructor// работа с конструктором
{
    var $login;
    var $password;
    /*function Konstructor($buf)
    {
        $this->login=$buf;
    }
    function Get_login()
    {
        echo $this->login;
    }*/
    function Get_login_full()
    {
        echo $this->login." ".$this->password;
    }
    function Konstructor($buf,$buf_2)
    {
        $this->login=$buf;
        $this->password=$buf_2;
    }
}

    $sakura=new Konstructor("29.08.","2018");
    $sakura->Get_login_full();



Class M_arrays // работа с массивами
{
    static function M1()
    {
        $mas=array(1,2,3,4,5);
        foreach ($mas as $buf)
        {
            echo  "<br>".$buf;
        }
        $mas_2=array(понедельник, вторник, среда, четверг, пятница, суббота, воскресенье);
        foreach ($mas_2 as $buf)
        {
            echo  "<br>".$buf;
        }
        return $mas;
    }
    /*static function Get_massiv()
    {
        return $this->mas;
    }*/
    static function M2()
    {
        $mas = array(1, 2, 3, 4, 5);
        foreach ($mas as $buf)
        {
            echo "<br>" . $buf;
        }
    }
    static function M3()
    {
        echo "<br>Выполняется функция M3<br>";
        for($i=0;$i<10;$i++)
        {
            echo $i;
        }
        $mas_2=array(понедельник, вторник, среда, четверг, пятница, суббота, воскресенье);
        for($i=0;$i<7;$i++)
        {
            echo "<br>".$mas_2[$i];
        }
    }
}

    $sakura2=M_arrays::M1();
    foreach ($sakura2 as $buf)
    {
        echo  "<br>".$buf;
    }
    M_arrays::M3();

class DB_mysql
{

    //var $result;
    static function D1_connect()
    {
        echo "<br><br> Подключение к базе данных <br>";
        $link=mysql_connect("127.0.0.1","root","")
        or die("не удалось соединиться".mysql_error());
        echo "1. соединение установлено";
        mysql_select_db("sakura") or die("не удалось найти базу данных");
        echo "<br> 2. подключились к sakura";
    //{
        $query="SELECT name
        FROM table_1";
        $result=mysql_query($query) or die("запрос не удался".mysql_error());
        echo "<br> 3. запрос удался<br><br>";
    //
        echo "SELECT name FROM table_1<br>";
        while ($line=mysql_fetch_array($result,MYSQL_ASSOC))
        {
            foreach ($line as $item)
            {
                echo $item."<br>";
            }
        }
        mysql_free_result($result);
        mysql_close($link);
    }
}
DB_mysql::D1_connect();


?>