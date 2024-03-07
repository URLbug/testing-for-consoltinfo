<?php

class Submision
{
    private const PATH_DATA = "./data";
    private const PATH_IMG = "./data/img";

    private $username;
    private $email;
    private $messsage;

    public function __construct(
        string $username, 
        string $email, 
        string $messsage
        ) {
            $this->username = $username;
            $this->email = $email;
            $this->messsage = $messsage;
        }
    
    private function write_text(string $text, string $name_file)
    {
        $path = Submision::PATH_DATA . "/" . $name_file;
        
        if (file_exists($path)) 
            $text .= "\n" . file_get_contents($path);

        $file = fopen($path, 'w');
        
        fwrite($file, $text);
        
        fclose($file);
    }
    
    public function upload(): string
    {
        if(filter_var($this->email, FILTER_VALIDATE_EMAIL))
            $this->write_text($this->email, "email.txt");
        else
            return "Неверный Email!";
        
        if($_FILES["file"]["size"] > 0)
        {
            $path = Submision::PATH_IMG . "/" . $_FILES["file"]['name'];
            
            if (!@copy($_FILES["file"]['tmp_name'], $path)) 
                return "Не удалось отправить файл!";

            $this->write_text($path, "image.txt");
        }

        $this->write_text($this->username, "username.txt");
        $this->write_text($this->messsage, "message.txt");

        return "Сообщение отправлено!";
    }
}

?>
