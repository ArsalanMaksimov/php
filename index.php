<?php
$message = 'hello my name is arsalan';
$message1="������ ���� ����� �������";
echo $message1."<br/>";
echo "<br/>";
//work_with_ifelse();
//sakura();
function work_with_ifelse()
{
    $a = 15;
    $b = 10;
    if ($a < $b) {
        echo "15 ������, ��� 10" . "<br/>";
    } else {
        echo "���, 15 ������, ��� 10" . "<br/><br/>";
    }
}
function sakura()
{
	$x=0;
	echo " ������ ������� sakura {"."<br/>";
	while ($x++<10)
	{
		echo $x."<br/s>";
	}
    echo "}"."<br/>";
}
function sakura2() // ���������� ����� �����
{
	return 2018;
}
/*echo "������ ������� sakura2 {"."<br/>".sakura2()."<br/>";
echo "}"."<br/>";
*/
//__________________________________________________________________________

class Book
{
	function function_1()
	{
		$x=0;
		echo "<br/>"."������ ������� function_1 ";
		while ($x++<10)
		{
			echo "<br/>".$x." �..";
		}
        echo "<br/>";
	}
	var $name;
	function get_name()
	{
		echo "<br/>"."�..."."<br/>";
        $this->function_1();
    }
	
}

class  A extends B
{
    private static function A1(){echo " ��� ������� A1"."<br/>";}
    private function A2(){echo " ��� ������� A2"."<br/>";}
    public static function A3(){echo " ��� ������� A3"."<br/>";}
    public function A4 (){echo " ��� ������� A4"."<br/>";}
    protected static function A5 (){echo " ��� ������� A5"."<br/>";}
    protected function A6 (){echo " ��� ������� A6"."<br/>";}
    public function A7()
    {
        return "��� ������� A7 return ����� ����";
    }
}
class B
{
    private static function B1(){echo " ��� ������� B1"."<br/>";}
    private function B2(){echo " ��� ������� B2"."<br/>";}
    public static function B3(){echo " ��� ������� B3"."<br/>";}
    public function B4 (){echo " ��� ������� B4"."<br/>";}
    protected static function B5 (){echo " ��� ������� B5"."<br/>";}
    protected function B6 (){echo " ��� ������� B6"."<br/>";}
    public function B7()
    {
        return "��� ������� B7 return ����� ����";
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
    private static function E1(){echo " ��� ������� E1"."<br/>";}
    private function E2(){echo " ��� ������� E2"."<br/>";}
    public static function E3(){echo " ��� ������� E3"."<br/>";}
    public function E4 (){echo " ��� ������� E4"."<br/>";}
    protected static function E5 (){echo " ��� ������� E5"."<br/>";}
    protected function E6 (){echo " ��� ������� E6"."<br/>";}
    public function E7()
    {
        return "��� ������� E7 return ����� ����";
    }
}

    $ob = new Book;
    echo $ob->name = "�����";
    $ob->get_name();

    //$ClassEmployers = new Employers;
    //$ClassEmployers->B3();

    Employers::A3();// ����� ����������� ������� A3 ��������������� �� ������ A
    Employers::A4();// ����� ������� A4 ��������������� �� ������ A
    echo Employers::A7()."<br/>";// ����� ������� A7 ��������������� �� ������ A
    Employers::B3();// ����� ����������� ������� B3 ��������������� �� ������ B
    Employers::B4();// ����� ������� B4 ��������������� �� ������ B
    echo Employers::B7()."<br/>";// ����� ������� B7 ��������������� �� ������ B
    Employers::E3();// ����� ����������� ������� E3 ������ E
    Employers::E4();// ����� ������� E4 ������ E
    echo Employers::E7()."<br/>";// ����� ������� E7 ������ E
    echo "<br/>";
    B::B3();// ����� ����������� ������� B3 ������ B
    B::B4();// ����� ������� B4 ������ B
    echo B::B7()."<br/>";// ����� ������� B7 ������ B
    echo B::B8()."<br/>";// ����� ������� B8 (��������)
    echo B::B9()."<br/>";// ����� ������� B9 (���������)
    echo B::B10()."<br/>";// ����� ������� B10 (���������)
    echo B::B11()."<br/>";// ����� ������� B11 (�������)
    echo B::B12(50,55)."<br/>";// ����� ������� B12 (��������)
    echo B::B13(100,23)."<br/>";// ����� ������� B13 (���������)
    echo B::B14(10,50)."<br/>";// ����� ������� B14 (���������)
    echo B::B15(99,2)."<br/>";// ����� ������� B15 (�������)
    echo "<br/>";
    A::A3();// ����� ����������� ������� A3 ������ A
    A::A4();// ����� ������� A4 ������ A
    echo A::A7()."<br/>";// ����� ������� A7 ��������������� �� ������ A
    A::B3();// ����� ����������� ������� B3 ��������������� �� ������ B
    A::B4();// ����� ������� B4 ��������������� �� ������ B
    echo A::B7()."<br/>";// ����� ������� B7 ��������������� �� ������ B
    echo "<br/>";

    $Employers=new Employers();// ������� ������ ������ Employers
    echo $Employers->B7()."<br/>";//�������� ������ � ����� ������ Employers ������� B7
    echo $Employers->B8()."<br/>";// �������� ������ � ����� ������ Employers ������� B8 (��������)
    echo $Employers->B9()."<br/>";// �������� ������ � ����� ������ Employers ������� B9 (���������)
    echo $Employers->B10()."<br/>";// �������� ������ � ����� ������ Employers ������� B10 (���������)
    echo $Employers->B11()."<br/>";// �������� ������ � ����� ������ Employers ������� B11 (�������)
    echo $Employers->B12(50,55)."<br/>";// �������� ������ � ����� ������ Employers ������� B12 (��������)
    echo $Employers->B13(100,23)."<br/>";// �������� ������ � ����� ������ Employers ������� B13 (���������)
    echo $Employers->B14(10,50)."<br/>";// �������� ������ � ����� ������ Employers ������� B14 (���������)
    echo $Employers->B15(99,2)."<br/>";// �������� ������ � ����� ������ Employers ������� B15 (�������)


class Konstructor// ������ � �������������
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



Class M_arrays // ������ � ���������
{
    static function M1()
    {
        $mas=array(1,2,3,4,5);
        foreach ($mas as $buf)
        {
            echo  "<br>".$buf;
        }
        $mas_2=array(�����������, �������, �����, �������, �������, �������, �����������);
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
        echo "<br>����������� ������� M3<br>";
        for($i=0;$i<10;$i++)
        {
            echo $i;
        }
        $mas_2=array(�����������, �������, �����, �������, �������, �������, �����������);
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
        echo "<br><br> ����������� � ���� ������ <br>";
        $link=mysql_connect("127.0.0.1","root","")
        or die("�� ������� �����������".mysql_error());
        echo "1. ���������� �����������";
        mysql_select_db("sakura") or die("�� ������� ����� ���� ������");
        echo "<br> 2. ������������ � sakura";
    //{
        $query="SELECT name
        FROM table_1";
        $result=mysql_query($query) or die("������ �� ������".mysql_error());
        echo "<br> 3. ������ ������<br><br>";
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