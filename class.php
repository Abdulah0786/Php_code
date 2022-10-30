<?php

class teacher {
    // properties
    public $name;
    public $age;
    public $address;
    public $phone;
    public $email;
    // methods
   public function set_name($name,$age,$address,$phone,$email)
   {
  $this->name=$name;
  $this->age=$age;
  $this->address=$address;
  $this->phone=$phone;
  $this->email=$email;
   }
   public function get_name()
   {
      echo $this->name;
      echo $this->age;
      echo $this->address;
      echo $this->phone;
      echo $this->email;
   }
}
$apple=new teacher();
$apple->set_name("Mirhusen Ansari,","\t"."25,","\t"."kalaiya,","\t"."9823809,","mirhusen@gmail.com"."<br>");
$apple->get_name();

//Student class
class student{
   // properties
   public $name;
   public $age;
   public $address;
   public $phone;
   public $email;
   // methods
  public function set_name($name,$age,$address,$phone,$email)
  {
 $this->name=$name;
 $this->age=$age;
 $this->address=$address;
 $this->phone=$phone;
 $this->email=$email;
  }
  public function get_name()
  {
     echo $this->name;
     echo $this->age;
     echo $this->address;
     echo $this->phone;
     echo $this->email;
  }
}
$apple=new teacher();
$apple->set_name("Abdulah Ansari,","\t"."19","\t"."Rangpur,","\t"."9887623798,","\t"."abdulah@gmail.com"."<br>");
$apple->get_name();

//Laptop class
class laptop{
   // properties
   public $color;
   public $brand_name;
   public $price;
   public $manufacture_date;
   public $RAM;
   // methods
  public function set_name($color,$brand_name,$price,$manufacture_date,$RAM,$weight)
  {
 $this->color=$color;
 $this->brand_name=$brand_name;
 $this->price=$price;
 $this->manufacture_date=$manufacture_date;
 $this->RAM=$RAM;
 $this->weight=$weight;
  }
  public function get_name()
  {
     echo $this->color;
     echo $this->brand_name;
     echo $this->price;
     echo $this->manufacture_date;
     echo $this->RAM;
     echo $this->weight;
  }
}
$apple=new laptop();
$apple->set_name("Black,","\t"."Dell,","\t"."(50000),","\t"."2015,","\t"."8GB,","\t"."3kg"."<br>");
$apple->get_name();

//Mobile class
class mobile{
   // properties
   public $color;
   public $brand_name;
   public $price;
   public $manufacture_date;
   public $RAM;
   // methods
  public function set_name($color,$brand_name,$price,$manufacture_date,$RAM,$weight)
  {
 $this->color=$color;
 $this->brand_name=$brand_name;
 $this->price=$price;
 $this->manufacture_date=$manufacture_date;
 $this->RAM=$RAM;
 $this->weight=$weight;
  }
  public function get_name()
  {
     echo $this->color;
     echo $this->brand_name;
     echo $this->price;
     echo $this->manufacture_date;
     echo $this->RAM;
     echo $this->weight;
  }
}
$apple=new mobile();
$apple->set_name("Gold,","\t"."Apple,","\t"."\t"."(100000),","\t"."2013,","\t"."8GB,","\t"."300g");
$apple->get_name();

?>