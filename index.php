<?php
    /**
     * <b>Documentation</b>
     * @author Guilherme Schuch
     */

    class Person{

        /**
         * <b>Constructor</b>
         * This is the constructor of the class.
         * @param string $name The name of the person.
         * @param string $birthday The $irthday of the person.
         * @param int $SSN The Social Security Number of the person.
         * @param int $IdCard The ID Card of the person.
         */

        public $name;
        public $birthday;
        public $SSN; // Social Security Number (CPF)
        public $IdCard; // Identity Card (RG)

        public function setName($name){
            $this->name = $name;
        }
        public function getName(){
            return $this->name;
        }

        public function setBirthday($birthday){
            $this->birthday = $birthday;
        }
        public function getBirthday(){
            return $this->birthday;
        }

        public function setSSN($SSN){
            $this->SSN = $SSN;
        }
        public function getSSN(){
            return $this->SSN;
        }

        public function setIdCard($IdCard){
            $this->IdCard = $IdCard;
        }
        public function getIdCard(){
            return $this->IdCard;
        }
    }


    $person = new Person();
    $person->setName("John");
    $person->setBirthday("01/01/2000");
    $person->setSSN("123.456.789-00");
    $person->setIdCard("123456789");


    class Engeneer extends Person{

        /**
         * <b>Constructor</b>
         * This is the constructor of the class.
         * @param string $name The name of the person.
         * @param string $birthday The $irthday of the person.
         * @param int $SSN The Social Security Number of the person.
         * @param int $IdCard The ID Card of the person.
         * @param int $CREA The CREA of the engeneer.
         */

        public $CREA;

        public function setCrea($CREA){
            $this->CREA = $CREA;
        }
        public function getCrea(){
            return $this->CREA;
        }
    }

    $engeneer = new Engeneer();
    $engeneer->setName("Jonas");
    $engeneer->setBirthday("03/11/2000");
    $engeneer->setSSN("971.436.189-00");
    $engeneer->setIdCard("987654321");
    $engeneer->setCrea("Electrical Engineering");


    class Doctor extends Person{

        /**
         * <b>Constructor</b>
         * This is the constructor of the class.
         * @param string $name The name of the person.
         * @param string $birthday The $irthday of the person.
         * @param int $SSN The Social Security Number of the person.
         * @param int $IdCard The ID Card of the person.
         * @param int $CRM The CRM of the doctor.
         */
        
        public $CRM;

        public function setCrm($CRM){
            $this->CRM = $CRM;
        }
        public function getCrm(){
            return $this->CRM;
        }
    }


    $doctor = new Doctor();
    $doctor->setName("Jane");
    $doctor->setBirthday("11/03/1982");
    $doctor->setSSN("321.654.987-00");
    $doctor->setIdCard("238543789");
    $doctor->setCrm("853190437");
?>

<? echo "PERSON:"; ?>
<table border=3>
    <thead>
        <tr>
            <th>Name</th>
            <th>Birthday</th>
            <th>SSN</th>
            <th>IdCard</th>
        </tr>
    </thead>
    <tbody>
        <?php
            echo "<tr>";
            echo "<td>" . $person->getName() . "</td>";
            echo "<td>" . $person->getBirthday() . "</td>";
            echo "<td>" . $person->getSSN() . "</td>";
            echo "<td>" . $person->getIdCard() . "</td>";
            echo "</tr>";
        ?>
    </tbody>
</table>

<? echo "<br>ENGENEER:"; ?>
<table border=3>
    <thead>
        <tr>
            <th>Name</th>
            <th>Birthday</th>
            <th>SSN</th>
            <th>IdCard</th>
            <th>CREA</th>
        </tr>
    </thead>
    <tbody>
        <?php
            echo "<tr>";
            echo "<td>" . $engeneer->getName() . "</td>";
            echo "<td>" . $engeneer->getBirthday() . "</td>";
            echo "<td>" . $engeneer->getSSN() . "</td>";
            echo "<td>" . $engeneer->getIdCard() . "</td>";
            echo "<td>" . $engeneer->getCrea() . "</td>";
            echo "</tr>";
        ?>
    </tbody>
</table>

<? echo "<br>DOCTOR:"; ?>
<table border=3>
    <thead>
        <tr>
            <th>Name</th>
            <th>Birthday</th>
            <th>SSN</th>
            <th>IdCard</th>
            <th>CRM</th>
        </tr>
    </thead>
    <tbody>
        <?php
            echo "<tr>";
            echo "<td>" . $doctor->getName() . "</td>";
            echo "<td>" . $doctor->getBirthday() . "</td>";
            echo "<td>" . $doctor->getSSN() . "</td>";
            echo "<td>" . $doctor->getIdCard() . "</td>";
            echo "<td>" . $doctor->getCrm() . "</td>";
            echo "</tr>";
        ?>
    </tbody>