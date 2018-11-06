<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="reset.css">
  <link rel="stylesheet" type="text/css" href="mystyle.css">
   <title>Calendar</title>
  
</head>
 <body>
 	 
  <h1>Food calendar</h1>
  <?php require_once ("menu.php"); ?>

  <table>
      <tr>
	    <th><span>Mon</span></th>
		<th><span>Tues</span></th>
		<th><span>Wed</span></th>
		<th><span>Thurs</span></th>
		<th><span>Fri</span></th>
		<th><span>Sat</span></th>
		<th><span>Sun</span></th>
	  </tr>
	  
	  <tr>
	  <td><span>1</span></td>
	  <td><span>2</span></td>
	  <td><span>3</span></td>
	  <td><span>4</span><a href="Sweetsourchicken.php"> <img class="spanbild" src="http://natashaskitchen.com/wp-content/uploads/2014/12/Sweet-and-Sour-Chicken-13.jpg" height="70" width="70" alt="bild"></a> </td>
	  <td><span>5</span></td>
	  <td><span>6</span></td>
	  <td><span>7</span></td>
	  </tr>
	 
	 <tr>
	  <td><span>8</span></td>
	  <td><span>9</span></td>
	  <td><span>10</span></td>
	  <td><span>11</span></td>
	  <td><span>12</span><a href="brownies.php"> <img class="spanbild" src="http://www.taste.com.au/images/recipes/tm/2015/04/classic-chewy-brownie-32467_l.jpeg" height="70" width="70" alt="bild"></a></td>
	  <td><span>13</span></td>
	  <td><span>14</span></td>
	  </tr>
	  
	  <tr>
	  <td><span>15</span></td>
	  <td><span>16</span></td>
	  <td><span>17</span></td>
	  <td><span>18</span></td>
	  <td><span>19</span></td>
	  <td><span>20</span></td>
	  <td><span>21</span></td>
	  </tr>
	  
	  <tr>
	  <td><span>22</span></td>
	  <td><span>23</span></td>
	  <td><span>24</span></td>
	  <td><span>25</span></td>
	  <td><span>26</span></td>
	  <td><span>27</span></td>
	  <td><span>28</span></td>
	  </tr>
	  
	  <tr>
	  <td><span>29</span></td>
	  <td><span>30</span></td>
	  <td><span>31</span></td>
	  <td></td>
	  <td></td>
	  <td></td>
	  <td></td>
	  </tr>
   </table>
 </body>
</html>
