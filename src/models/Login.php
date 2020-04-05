<?php
loadModel('User');


class Login extends Model{

    public function validate(){ //valida os daddos individualmente

            $errors = [];

            if(!$this->email){
                $errors['email'] = '>Insire o E-Mail';
            }
            if(!$this->password){
                $errors['password'] = 'Insire a Password';
            }

            if(count($errors) > 0){

                throw new ValidacionException($errors);

            }

    }

    public function checkLogin(){//recebe apartir do POST do form

        $this->validate();

        $user = User::getOne(['email' => $this->email]);
        if($user){
            if($user->end_date){
                throw new AppException('Utilizador Desligado');
            }
            if(password_verify($this->password, $user->password)){
                return $user;

            }
        }
        throw new AppException('Email/Password invalídos');


    }



}