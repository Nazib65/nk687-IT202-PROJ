<?
// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase03Assigment
// Email: nk687@njit.edu
?>
<style>
 form[name="login"] {
   display: grid;
   grid-template-columns: 100px 1fr;
   gap: 10px 5px;
   align-items: center;
   max-width: 300px;
 }
 form[name="login"] label {
   text-align: right;
   padding-right: 5px;
 }
 form[name="login"] input[type="text"],
 form[name="login"] input[type="password"] {
   width: 100%;
 }
 form[name="login"] input[type="submit"] {
   grid-column: 2;
   justify-self: start;
 }
</style>

<?php
if (!isset($_SESSION['login'])) {
?>
  <h2>Please log in</h2><br>
  <form name="login" action="index.php" method="post">
    <label>Email:</label>
    <input type="text" name="emailAddress" size="20">
    <!-- <br> -->
    <!-- <br> -->
     <label>Password:</label>
    <input type="password" name="password" size="20">
    <!-- <br> -->
    <!-- <br> -->
     <input type="submit" value="Login">
    <input type="hidden" name="content" value="validate">
  </form>
  <?php
}