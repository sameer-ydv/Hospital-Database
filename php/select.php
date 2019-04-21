<?php 
  include_once 'dbh.php';

  error_reporting(E_ALL & ~E_NOTICE);

  $query = $_POST['query'];
  $sql = $query;
  $result = mysqli_query($conn, $sql);

  $output = "";
  $output .= "<table border=1 cellspacing=2 cellpading=2>";

  $temp = 1;

  while ($row = mysqli_fetch_assoc($result))
        {
          while($temp)
          {
          $output .= "<tr>";
          if ($row['P_Code'] != NULL)
          {$output .= "<th>".'P_Code'. "</th>";}
          if ($row['Aadhar_No'] != NULL)
          {$output .= "<th>".'Aadhar_No'. "</th>";}
          if ($row['P_Name'] != NULL)
          {$output .= "<th>".'P_Name'. "</th>";}
          if ($row['Suffering_From'] != NULL)
          {$output .= "<th>".'Suffering_From'. "</th>";}
          if ($row['Status'] != NULL)
          {$output .= "<th>".'Status'. "</th>";}
          if ($row['Doc_Id'] != NULL)
          {$output .= "<th>".'Doc_Id'. "</th>";}
          if ($row['Doc_Name'] != NULL)
          {$output .= "<th>".'Doc_Name'. "</th>";}
          if ($row['Qualification'] != NULL)
          {$output .= "<th>".'Qualification'. "</th>";}
          if ($row['Experience'] != NULL)
          {$output .= "<th>".'Experience'. "</th>";}
          if ($row['Doc_P_Code'] != NULL)
          {$output .= "<th>".'Doc_P_Code'. "</th>";}
          if ($row['Med_Code'] != NULL)
          {$output .= "<th>".'Med_Code'. "</th>";}
          if ($row['Med_Name'] != NULL)
          {$output .= "<th>".'Med_Name'. "</th>";}
          if ($row['Disease'] != NULL)
          {$output .= "<th>".'Disease'. "</th>";}
          if ($row['Quantity'] != NULL)
          {$output .= "<th>".'Quantity'. "</th>";}
          if ($row['Cost'] != NULL)
          {$output .= "<th>".'Cost'. "</th>";}
          if ($row['Room_No'] != NULL)
          {$output .= "<th>".'Room_No'. "</th>";}
          if ($row['Room_Staff_Id'] != NULL)
          {$output .= "<th>".'Room_Staff_Id'. "</th>";}
          if ($row['Department'] != NULL)
          {$output .= "<th>".'Department'. "</th>";}
          if ($row['No_of_Patients'] != NULL)
          {$output .= "<th>".'No_of_Patients'. "</th>";}
          if ($row['Staff_Id'] != NULL)
          {$output .= "<th>".'Staff_Id'. "</th>";}
          if ($row['Staff_Name'] != NULL)
          {$output .= "<th>".'Staff_Name'. "</th>";}
          if ($row['Staff_Doc_Id'] != NULL)
          {$output .= "<th>".'Staff_Doc_Id'. "</th>";}
          if ($row['Staff_P_Code'] != NULL)
          {$output .= "<th>".'Staff_P_Code'. "</th>";}
          $output .= "</tr>";
          $temp = 0;
        }
        }

  $result = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_assoc($result))
        {
          $output .= "<tr>";
          if ($row['P_Code'] != NULL)
            {$output .= "<td>".htmlentities($row['P_Code']). "</td>";}
          if ($row['Aadhar_No'] != NULL)
            {$output .= "<td>".htmlentities($row['Aadhar_No']). "</td>";}
          if ($row['P_Name'] != NULL)
            {$output .= "<td>".htmlentities($row['P_Name']). "</td>";}
          if ($row['Suffering_From'] != NULL)
            {$output .= "<td>".htmlentities($row['Suffering_From']). "</td>";}
          if ($row['Status'] != NULL)
            {$output .= "<td>".htmlentities($row['Status']). "</td>";}
          if ($row['Doc_Id'] != NULL)
            {$output .= "<td>".htmlentities($row['Doc_Id']). "</td>";}
          if ($row['Doc_Name'] != NULL)
            {$output .= "<td>".htmlentities($row['Doc_Name']). "</td>";}
          if ($row['Qualification'] != NULL)
            {$output .= "<td>".htmlentities($row['Qualification']). "</td>";}
          if ($row['Experience'] != NULL)
            {$output .= "<td>".htmlentities($row['Experience']). "</td>";}
          if ($row['Doc_P_Code'] != NULL)
            {$output .= "<td>".htmlentities($row['Doc_P_Code']). "</td>";}
          if ($row['Med_Code'] != NULL)
            {$output .= "<td>".htmlentities($row['Med_Code']). "</td>";}
          if ($row['Med_Name'] != NULL)
            {$output .= "<td>".htmlentities($row['Med_Name']). "</td>";}
          if ($row['Disease'] != NULL)
            {$output .= "<td>".htmlentities($row['Disease']). "</td>";}
          if ($row['Quantity'] != NULL)
            {$output .= "<td>".htmlentities($row['Quantity']). "</td>";}
          if ($row['Cost'] != NULL)
            {$output .= "<td>".htmlentities($row['Cost']). "</td>";}
          if ($row['Room_No'] != NULL)
            {$output .= "<td>".htmlentities($row['Room_No']). "</td>";}
          if ($row['Room_Staff_Id'] != NULL)
            {$output .= "<td>".htmlentities($row['Room_Staff_Id']). "</td>";}
          if ($row['Department'] != NULL)
            {$output .= "<td>".htmlentities($row['Department']). "</td>";}
          if ($row['No_of_Patients'] != NULL)
            {$output .= "<td>".htmlentities($row['No_of_Patients']). "</td>";}
          if ($row['Staff_Id'] != NULL)
            {$output .= "<td>".htmlentities($row['Staff_Id']). "</td>";}
          if ($row['Staff_Name'] != NULL)
            {$output .= "<td>".htmlentities($row['Staff_Name']). "</td>";}
          if ($row['Staff_Doc_Id'] != NULL)
            {$output .= "<td>".htmlentities($row['Staff_Doc_Id']). "</td>";}
          if ($row['Staff_P_Code'] != NULL)
            {$output .= "<td>".htmlentities($row['Staff_P_Code']). "</td>";}
          $output .= "</tr>";
        }
  $output .= "</table>";
  echo $output;

?>
