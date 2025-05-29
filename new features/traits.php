<?php
// ✅ Logger Trait
trait LoggerTrait
{
    public function log($msg)
    {
        $time = date("Y-m-d H:i:s");
        echo "[LOG][$time]: $msg\n";
    }
}

// ✅ Auth Trait
trait AuthTrait
{
    protected $users = [
        "bholu" => "1234",
        "chhotu" => "5678"
    ];

    public function login($username, $password)
    {
        if (!isset($this->users[$username])) {
            $this->log("Login failed for user '$username': User not found.");
            return "❌ User not found!";
        }

        if ($this->users[$username] !== $password) {
            $this->log("Login failed for user '$username': Incorrect password.");
            return "❌ Incorrect password!";
        }

        $this->log("User '$username' logged in successfully.");
        return "✅ Welcome, $username!";
    }
}

// ✅ Final class that uses traits
class LoginSystem
{
    use LoggerTrait, AuthTrait;
}

// ✅ Usage
$login = new LoginSystem();

echo $login->login("bholu", "1234");     // ✅ Correct
echo "\n";
echo $login->login("bholu", "wrong");    // ❌ Wrong password
echo "\n";
echo $login->login("someone", "1234");   // ❌ User not found
