<html>
    <body>
        <?php

      //Encapsulation
      class BankAccount{
        private $balance;

        public function setBalance($amount){
            if($amount>0){
                $this->balance = $amount;
            }
        }
        public function getBalance(){
            return $this->balance;
        }
      }

      $account = new BankAccount();
      $account->setBalance(20000);
      echo "Account Balance :" . $account->getBalance();
      

        ?>
        </body>
        </html>