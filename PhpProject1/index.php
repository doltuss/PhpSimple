<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
<body>
<?php
    $connect = mysqli_connect("localhost", "root", "", "phpprojectbase");
    
    
    if(isset($_POST['edit'])){       
        $query = " UPDATE persons SET First_name='$_POST[First_name]',Last_name='$_POST[Last_name]', Start_date='$_POST[Start_date]', End_date='$_POST[End_date]' WHERE ID='$_POST[ID]' ";
        mysqli_query($connect, $query);
    }
    
    if(isset($_POST['delete'])){
        $query = " DELETE FROM persons WHERE ID='$_POST[ID]' ";
        mysqli_query($connect, $query);
    }
    
    
    
    
    if(isset($_POST['insert'])){
        $query = "INSERT INTO persons (ID, First_name, Last_name, Start_date, End_date) VALUES (NULL, '$_POST[fname]', '$_POST[lname]', '$_POST[sdate]', '$_POST[edate]'); ";
        mysqli_query($connect, $query);
    }
    
    
    $table = mysqli_query($connect, "SELECT * FROM `persons`");
    echo "<table>
          <tr>
          <th></th>
          <th>Imię</th>
          <th>Nazwisko</th>
          <th>Data od</th>
          <th>Data do</th>
          </tr>";
    
    while($row = mysqli_fetch_array($table)){
        echo "<form action=index.php method=post>";
        echo "<tr>";
        echo "<td>" . "<input type=hidden name=ID value=" . $row['ID'] . " </td>";
        echo "<td>" . "<input type=text name=First_name value=" . $row['First_name'] . " </td>";
        echo "<td>" . "<input type=text name=Last_name value=" . $row['Last_name']. " </td>";
        echo "<td>" . "<input type=text name=Start_date value=" . $row['Start_date']. " </td>";
        echo "<td>" . "<input type=text name=End_date value=" . $row['End_date']. " </td>";
        echo "<td>" . "<input type=submit name=edit value=edytuj" . " </td>";
        echo "<td>" . "<input type=submit name=delete value=usuń" . " </td>";
        echo "</tr>";
        echo "</form>";
    }
    echo "<form action=index.php method=post>";
    echo "<tr>";
    echo "<td>" . "<input type=hidden name=ID value=" . $row['ID'] . " </td>";
    echo "<td>" . "<input type=text name=fname value=''" . " </td>";
    echo "<td>" . "<input type=text name=lname value=''" . " </td>";
    echo "<td>" . "<input type=text name=sdate value=''" . " </td>";
    echo "<td>" . "<input type=text name=edate value=''" . " </td>";
    echo "<td>" . "<input type=submit name=insert value='dodaj'" . " </td>";
    echo '</tr>';
    echo "</form>";
    echo "</table>";
    mysqli_close($connect);
?>

</body>
</html>
