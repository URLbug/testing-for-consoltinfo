<?php

class CSV
{
    public function read_csv()
    {
        if (($handle = fopen($_FILES["file"]['tmp_name'], "r")) !== false) 
        {
            while (($data = fgetcsv($handle, 1000, "\n")) !== false) 
            {
                foreach($data as $rows)
                {
                    $row = "";

                    $rows = explode(",", $rows);

                    foreach($rows as $val) 
                        $row .= "<td>" . $val . "</td> ";

                    echo "<tr><td>" . $row . "</td><tr>";
                }
            }
        }

        fclose($handle);
    }
}

?>
