<?php
   class Candidate {
      /* Member variables */
      var $fname;
      var $lname;
      var $email;
      var $phone;
      var $gender;
      var $addr;
      var $bday;
      var $quali;
      
      /* Member functions */
      function setFname($fname){
         $this->fname = $fname;
      }
      
      function getFname(){
         echo $this->fname ."<br>";
      }
      
      function setLname($lname){
         $this->lname = $lname;
      }
      
      function getLname(){
         echo $this->lname ."<br>";
      }

      function setEmail($email){
        $this->email = $email;
     }

     function getEmail()
     {
         echo $this->email ."<br>";
     }

     function setPhone($phone){
        $this->phone = $phone;
     }

     function getPhone()
     {
         echo $this->phone ."<br>";
     }
    }
     $obj=new Candidate;
    $obj->setFname("vrush");
    $obj->getFname();

    $obj->setLname("Bhosale");
    $obj->getLname();

    $obj->setEmail("gcwhkvabs");
    $obj->getEmail();

    $obj->setPhone("6589340r9213");
    $obj->getPhone();
   

   

   

