<?php
interface forStudent extends forParent
{
  function say_name(): string;
  function say_email(): string;
  function say_age(): int;
};

interface forParent
{
  function get_full_student();
}

trait Say_hi_to_user
{
  function say_hi()
  {
    echo  "hello sir : " . $this->name;
  }
}

class Student implements forStudent
{
  private $name;
  private $email;
  private $age;
  use Say_hi_to_user;
  function __construct($name, $email, $age)
  {
    $this->name = $name;
    $this->email = $email;
    $this->age = $age;
  }

  function say_age(): int
  {
    return $this->age;
  }

  function say_email(): string
  {
    return $this->email;
  }

  function say_name(): string
  {
    return $this->name;
  }
  function get_full_student()
  {
    echo $this->name;
    echo $this->email;
    echo $this->age;
  }
}

$student = new Student("alex", "alew@gmail.com", 12);

echo $student->say_age();
echo $student->say_email();
echo $student->say_name();

$student->get_full_student();
$student->say_hi();