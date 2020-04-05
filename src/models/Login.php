<?php
loadModel('User');


class Login extends Model{

    public function validate(){
        $errors = [];

        if(!$this->email){
            $errors['email'] = 'E-Mail é um campo obrigatório';
        
        }
        if(!$this->password){
            $errors['password'] = 'E-Mail é um campo obrigatório';
        
        }
        if(count($errors) > 0){
            throw new ValidacionException($errors);
        }
        
    }

    public function checkLogin(){//recebe apartir do POST do form

        $user = User::getOne(['email' => $this->email]);
        if($user){
            if($user->end_date){
                throw new AppException('Utilizador Banido');
            }
            if(password_verify($this->password, $user->password)){
                return $user;

            }
        }
        throw new AppException('Email/Password invalídos');


    }



}