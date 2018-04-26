<?php 


header ("Content3-type: text/xml");

require "./config/init.php";


        $query5 = "SELECT * FROM cars"; 
        
        $result = mysqli_query($mysqli_conn,$query5) or die ("Error in query: $query5. ".mysql_error()); 
        
        $xml_output = "<?xml version=\"1.0\"?>\n"; 
        
        $xml_output .= "<entries>\n"; 
        
        for($x = 0 ; $x < mysqli_num_rows($result) ; $x++){ 
            $row = mysqli_fetch_assoc($result); 
            $xml_output .= "\t<entry>\n"; 
            $xml_output .= "\t\t<reg_num>" . $row['reg_num'] . "</reg_num>\n | "; 
            $xml_output .= "\t\t<Make>" . $row['Make'] . "</Make>\n | ";
            $xml_output .= "\t\t<Model>" . $row['Model'] . "</Model>\n | ";
            $xml_output .= "\t\t<reg_year>" . $row['reg_year'] . "</reg_year>\n | ";
            $xml_output .= "\t\t<fuel_type>" . $row['fuel_type'] . "</fuel_type>\n | ";
            $xml_output .= "\t\t<no_of_doors>" . $row['no_of_doors'] . "</no_of_doors>\n <br>";
            
                // Escaping illegal characters 
                $row['text'] = str_replace("&", "&", $row['text']); 
                $row['text'] = str_replace("<", "<", $row['text']); 
                $row['text'] = str_replace(">", "&gt;", $row['text']); 
                $row['text'] = str_replace("\"", "&quot;", $row['text']); 
        
            $xml_output .= "\t</entry>\n"; 
        } 
        
        $xml_output .= "</entries>"; 
        
        echo $xml_output; 
?>