<?php

class CSV
{
    private const PATH_CSV = "./csv";
    
    private $path;

    private function download_csv(): bool
    {
        $this->path = CSV::PATH_CSV . "/" . $_FILES["file"]['name'];
            
        return @copy($_FILES["file"]['tmp_name'], $this->path);
    }
    
    public function read_csv()
    {
        if($this->download_csv())
        {
            if (($handle = fopen($this->path, "r")) !== false) 
            {
                while (($data = fgetcsv($handle, 1000, "\n")) !== false) 
                {
                    foreach($data as $rows)
                    {
                        $row = "";

                        $rows = explode(",", $rows);

                        foreach($rows as $val) 
                            $row .= "<td>" . $val . "</td> ";

                        echo "<tr><td>" . $row . "</td><tr><br>\n";
                    }
                }
            }

            fclose($handle);
        }
    }
}

?>
