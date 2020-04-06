<form action="submit" method="POST">
@csrf
<input type="number" name="id" placeholder="ID"><br>
<input type="text" name="name" placeholder="Employee name">
<br>
<input type="text" name="email" placeholder="Email Id"><br>
<input type="text" name="address" placeholder="Address"><br>
<input type="number" name="Rating" placeholder="Performance Rating"><br>
<button type="submit">Insert</button>
</form>
