<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Halaman Pendaftaran</title>
  </head>
  <body>
    <h1>Buat Account Baru</h1>
    <h2>Sign Up Form</h2>
    <form action="/welcome" method="post">
      @csrf
      <p>First Name</p>
      <input type="text">
      <p>Last Name</p>
      <input type="text">
      <p>Gender</p>

      <input type="radio" name="gender" value="1">Male <br>
      <input type="radio" name="gender" value="2">Female <br>
      <input type="radio" name="gender" value="3">Other

      <p>Nationality</p>

      <select name="nationality">
        <option value="1">Indonesian</option>
        <option value="2">Malaysian</option>
        <option value="3">Singapore</option>
        <option value="4">Thailand</option>
      </select>
      <p>Language Spoken:</p>
      <input type="checkbox" name="language" value="1">Bahasa Indonesia <br>
      <input type="checkbox" name="language" value="2">English <br>
      <input type="checkbox" name="language" value="3">Other <br>
      <p>Bio:</p>
      <textarea name="bio" rows="8" cols="80"></textarea> <br>
      <button type="submit" name="Sign Up">Sign Up</button>
    </form>
  </body>
</html>
