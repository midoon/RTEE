<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    public function testLoginPage(){
        $this->get("/login")->assertSeeText("Login");
    }
    
    public function testLoginPageForMember(){
           $this->withSession([
               "user"=>"admin"
           ])->get("/login")
                ->assertRedirect("/");
    }
    
       public function testLoginSucces(){
           $this->post("/login",[
               "user" => "admin",
               "password" => "admin"
           ])->assertRedirect("/")
                ->assertSessionHas("user", "admin");
       }
    
       public function testLoginForUserAlreadyLogin(){
           $this->withSession([
               "user"=>"admin"
           ])
            ->post("/login",[
                "user" => "admin",
                "password" => "admin"
            ])->assertRedirect("/");
                
        }
    
    
       public function testValidationError(){
        $this->post("/login",[
            
        ])->assertSeeText("User or Password is required");
        }
    
        public function testLoginVailed(){
            $this->post("/login",[
                "user" => "salah",
                "password" => "salah"
            ])->assertSeeText("User or Password wrong");
        }
    
        public function testLogout(){
            $this->withSession([
                "user" => "admin"
            ])->post("/logout")
                ->assertRedirect("/")
                ->assertSessionMissing("user");
        }
       
        public function testLogoutGuest(){
            $this->post("/logout")
                ->assertRedirect("/");
        }
}
