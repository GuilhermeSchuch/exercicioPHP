<?php
    /**
     * <b>Documentation</b>
     * @author Guilherme Schuch
     * @version 1.0
     */

    class Person{
        private $name;
        private $birthday;
        private $SSN; // Social Security Number (CPF)
        private $IdCard; // Identity Card (RG)

        /** 
         * Set name function 
         * @param String
         * */
        public function setName($name){
            $this->name = $name;
        }
        /** 
         * Get name function 
         * @return String*/
        public function getName(){
            return $this->name;
        }

        /** 
         * Set birthday function 
         * @param String*/
        public function setBirthday($birthday){
            $this->birthday = $birthday;
        }
        /** 
         * Get birthday function 
         * @return String*/
        public function getBirthday(){
            return $this->birthday;
        }

        /** 
         * Set SSN function 
         * @param String*/
        public function setSSN($SSN){
            $this->SSN = $SSN;
        }
        /** 
         * Get SSN function 
         * @return String*/
        public function getSSN(){
            return $this->SSN;
        }

        /** 
         * Set ID Card function 
         * @param String*/
        public function setIdCard($IdCard){
            $this->IdCard = $IdCard;
        }
        /** 
         * Get ID Card function 
         * @return String*/
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
        private $CREA;

        /** 
         * Set CREA function 
         * @param String*/
        public function setCrea($CREA){
            $this->CREA = $CREA;
        }
        /** 
         * Get CREA function 
         * @return String*/
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
        private $CRM;

        /** 
         * Set CRM function 
         * @param String*/
        public function setCrm($CRM){
            $this->CRM = $CRM;
        }
        /** 
         * Get CRM function 
         * @return String*/
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