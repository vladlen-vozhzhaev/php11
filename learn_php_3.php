<?php
    /*$login = 'admin';
    $pass = '123';
    if($login == 'admin' and $pass =='123'){
        echo "Доступ разрешен";
    }else{
        echo "Доступ запрещен";
    }*/

    /*$cars = ["bmw", "audi", "kia"];
    for($i=0; $i<count($cars); $i++){
        if($i==1) continue;
        echo $cars[$i]."<br>";
    }*/
    /*$nums = [5,5,3,4,4,3,5,5,];
    $summ = 0;
    for($i=0; $i<count($nums); $i++){
        $summ = $summ + $nums[$i];
    }
    echo $summ/count($nums);*/

    /*$nums = [-22, -31, -27, -245, -387, -340, -56];
    $min = INF;
    for ($i=0; $i<count($nums); $i++){
        if($min>$nums[$i] and $nums[$i]%2!=0){
            $min = $nums[$i];
        }
    }
    echo $min;*/
    /*$num = 67;

    function f($num){
        if($num>=10){
            echo "10<br>";
            f($num-10);
        }
    }*/

    class Person{
        private $name;
        private $lastname;
        private $age;
        private $sex;
        private $mother;
        private $father;

        /**
         * @param $name
         * @param $lastname
         * @param $age
         * @param $sex
         */
        public function __construct($name, $lastname, $age, $sex, $mother=null, $father=null)
        {
            $this->name = $name;
            $this->lastname = $lastname;
            $this->age = $age;
            $this->sex = $sex;
            $this->mother = $mother;
            $this->father = $father;
        }

        /**
         * @return mixed
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * @param mixed $name
         */
        public function setName($name)
        {
            $this->name = $name;
        }

        /**
         * @return mixed
         */
        public function getLastname()
        {
            return $this->lastname;
        }

        /**
         * @param mixed $lastname
         */
        public function setLastname($lastname)
        {
            $this->lastname = $lastname;
        }

        /**
         * @return mixed
         */
        public function getAge()
        {
            return $this->age;
        }

        /**
         * @param mixed $age
         */
        public function setAge($age)
        {
            if($age<$this->age)
                return;
            else
                $this->age = $age;
        }

        /**
         * @return mixed
         */
        public function getSex()
        {
            return $this->sex;
        }

        /**
         * @return mixed|null
         */
        public function getMother()
        {
            return $this->mother;
        }

        /**
         * @return mixed|null
         */
        public function getFather()
        {
            return $this->father;
        }
        public function info(){
            $info = "Имя: ".$this->getName()."<br>".
                "Фамилия: ".$this->getLastname()."<br>".
                "Пол: ".$this->getSex()."<br>".
                "Возраст".$this->getAge()."<br>";
            if($this->getMother() != null){
                $info .=  "Имя мамы: ".$this->getMother()->getName()."<br>";
                if($this->getMother()->getFather() != null){
                    $info .= "Имя дедушки по маминой линии: ".$this->getMother()->getFather()->getName();
                }
            }
            if($this->getFather() != null){
                $info .= "Имя папы: ".$this->getFather()->getName()."<br>";
            }
            return $info;
        }

    }
    $igor = new Person("Игорь", "Петров", 70, true);
    $olga = new Person("Ольга", "Иванова", 46, false, null, $igor);
    $oleg = new Person("Олег", "Иванов", 47, true);
    $alex = new Person("Алекс", "Иванов", 16, true, $olga, $oleg);
    $alex->setAge(10);
    echo $oleg->info();
    /*
     * У Алекса должны быть 2 бабушки, 2 дедушки
     * Реализовать метод info() который возвращает информацию
     * Имя: Алекс
     * Фамилия: Иванов
     * Пол: М
     * Возраст 16
     * Имя мамы: Ольга
     * Имя папы: Олег
     * Имя дедушки по маминой линии: Игорь
     * ИТД
     *
     * Метод info() должен корректно работать с любым объектом класса Person
     * Если родственник отсутствует, то строку с информацией не выводить
     *
     *
     * */
