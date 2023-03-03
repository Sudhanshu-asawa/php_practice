<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <style>
    body{
      margin: 5% 5% 5% 5%;
      text-align: center;
      
    }
    table {
  width: 100%;
  margin-top: 5%;
  
}
    table, th, td {
  border: 1px solid;
  text-align: center;
}
tr:hover {background-color: coral;}
tr:nth-child(even) {background-color:lightgrey;}
h1{
  margin-top: 5%;
  background-color:lightslategray;
  padding: 2%;
}

  </style>
</body>
</html>
<?php

class FileUploader
{
    private $phpFile;
    private $phpFileTmp;

    public function __construct($phpFile, $phpFileTmp)
    {
        $this->phpFile = $phpFile;
        $this->phpFileTmp = $phpFileTmp;
    }

    public function displayTable()
    {
        echo '<table border="1">';
        $start_row = 1;
        if (($csv_file = fopen($this->phpFileTmp, "r")) !== FALSE) {
            while (($read_data = fgetcsv($csv_file, 1000, ",")) !== FALSE) {
                $column_count = count($read_data);
                echo '<tr>';
                $start_row++;
                for ($c = 0; $c < $column_count; $c++) {
                    echo "<td>".$read_data[$c] . "</td>";
                }
                echo '</tr>';
            }
            fclose($csv_file);
        }
        echo '</table>';
    }

    public function updateCsv($newData)
    {
        $fp = fopen($this->phpFileTmp, 'a');
        fputcsv($fp, $newData);
        fclose($fp);
    }
}

if (isset($_POST['submit'])) {
    $phpFile = $_FILES['php-file']['name'];
    // var_dump($phpFile);
    $phpFileTmp = $_FILES['php-file']['tmp_name'];

    $fileUploader = new FileUploader($phpFile, $phpFileTmp);
    echo "<h1>Uploaded CSV File</h1>";
    $fileUploader->displayTable();

    $newData = array(4, 4, 4, 'Y', 1, 1, 1, 'M', 'AddedText');
    $fileUploader->updateCsv($newData);

    $fileUploader = new FileUploader($phpFile, $phpFileTmp);
    echo "<h1>Updated CSV File</h1>";
    $fileUploader->displayTable();

}
?>
