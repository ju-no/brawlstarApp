<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

&lt;?php
require 'webroot' . DIRECTORY_SEPARATOR . 'index.php';

<h1>success or fail</h1>
<h4>Attempting MySQL connection from php...</h4>
<!--?php 
$host = 'mysql';
$user = 'root';
$pass = 'rootpassword';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected to MySQL successfully!";
?-->


$conn = new mysqli("mysql", "root", "${MYSQL_ROOT_PASSWORD}", "${MYSQL_DATABASE}");
// Check connection
 
$sql = "SELECT name FROM users";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo $row['name']."&lt;br>";
	}
} else {
	echo "0 results";
}
$conn->close();