<?php
    class User {
        public $id;
        public $avatar;
        public $name;
        public $surname;
        public $email;
        public $password;
        public $number_phone;
        public $address;
        public $c_i;
        public $date_of_birth;
        public $birth_place;

        public function __construct($id) {
            $this->id = $id;
        }

        public function setpassword($_password) {
            if(strlen($_password) < 20 || is_numeric($_password)) {
                $this->password = 'Incorrect Password';
            } else {
                $this->password = $_password;
            }
        }
        public function getPassword() {
            return $this->password;
        }
        
        public function setNumberPhone($_number_phone) {
            if(strlen($_number_phone) == 10 && is_numeric($_number_phone)) {
                $this->number_phone = $_number_phone;
            } else {
                $this->number_phone = 'Incorrect Number Phone';
            }
        }
        public function getNumberPhone() {
            return $this->number_phone;
        }

        public function setCI($_c_i) {
            if(strlen($_c_i) == 16) {
                $this->c_i = $_c_i;
            } else {
                $this->c_i = 'Incorrect C.I.';
            }
        }
        public function getCI() {
            return $this->c_i;
        }

    }
    $user1 = new User(1);
    $user1->avatar = 'https://scontent-mxp1-1.xx.fbcdn.net/v/t1.0-9/149038155_216786660165574_5889243031464037395_o.jpg?_nc_cat=106&ccb=1-3&_nc_sid=973b4a&_nc_ohc=ohr6wpYBTPcAX-T04qc&_nc_ht=scontent-mxp1-1.xx&oh=038feacda9146276d83c759ba054a1cf&oe=60761D40';
    $user1->name = 'Alex';
    $user1->surname = 'G.';
    $user1->email = 'alexg@coding.com';
    $user1->setPassword('jhbT-34HSOJs-csa?"&fewfscdshfgd');
    $user1->setNumberPhone('3406758657');
    $user1->address = 'Back-End st. 404';
    $user1->setCI('ALX8952AEFE2978Q');
    $user1->date_of_birth = '01/01/1900';
    $user1->birth_place = 'Saint Petersburg, Russia';

    $user2 = new User(2);
    $user2->avatar = 'http://d3g9pb5nvr3u7.cloudfront.net/authors/539a28913f3c0fd71ed4e43d/2131300937/256.jpg';
    $user2->name = 'Elon';
    $user2->surname = 'Musk';
    $user2->email = 'elonmusk@business.com';
    $user2->setPassword('dww-3jhgeus-fgewg?"&');
    $user2->setNumberPhone('3406758319');
    $user2->address = 'Full-Stack st. 404';
    $user2->setCI('ELM8952YXA12780P');
    $user2->date_of_birth = '28/06/1971';
    $user2->birth_place = 'Pretoria, Sudafrica';

    $user3 = new User(3);
    $user3->avatar = 'https://www.profnews.nl/wp-content/uploads/2021/02/oprichter-jeff-bezos-treedt-dit-jaar-terug-als-ceo-van-amazon.jpg';
    $user3->name = 'Jeff';
    $user3->surname = 'Bezos';
    $user3->email = 'jeffbezos@aws.com';
    $user3->setPassword('cjsdc-asdas-6d5wq-das9');
    $user3->setNumberPhone('3406758319');
    $user3->address = 'Front-End st. 404';
    $user3->setCI('JFB8952KS2780P3U');
    $user3->date_of_birth = '12/01/1964';
    $user3->birth_place = ' Albuquerque, New Mexico, USA';

    $users = [$user1, $user2, $user3]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 2</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
</head>
<body>
    
    <div class="users">
    
    <?php foreach ($users as $user) {?>
        <div class="user">

            <div id="user-id">
                
                <div class="id">
                    <i class="fas fa-user"></i>
                    <!-- ID -->
                    <?= $user->id ?>
                </div>
                <!-- Avatar -->
                <img src="<?= $user->avatar?>" alt="">
            </div>

            <!-- Name & Surname -->
            <h1><?= $user->name .' ' . $user->surname ?></h1>
            
            <div class="user-info">

                <!-- EMail -->
                <p><i class="far fa-envelope"></i> <small><?= $user->email ?></small></p>

                <!-- Password -->
                <p><i class="fas fa-key"></i> <small><?= $user->getPassword() ?></small></p>

                <!-- Number Phone -->
                <p><i class="fas fa-phone"></i> <small><?= $user->getNumberPhone() ?></small></p>

                <!-- Address -->
                <p><i class="fas fa-map-marker-alt"></i> <small><?= $user->address ?></small></p>

                <!-- C I -->
                <p><i class="far fa-address-card"></i> <small><?= $user->getCI() ?></small></p>

                <!-- Birth's date & place -->
                <p><i class="fas fa-birthday-cake"></i> <small><?= $user->date_of_birth ?></small> - <small><?= $user->birth_place ?></small></p>

            </div>

        </div>
    <?php } ?>

    </div>
    
    <!-- Database (sketch) -->
    <img src="database.png" alt="">

</body>
</html>