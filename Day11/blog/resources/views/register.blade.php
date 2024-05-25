<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/dashboard" method="POST">
        @csrf
        <label for="first">First Name:</label><br><br>
        <input type="text" name="first" id="" required><br><br>

        <label for="last">Last Name:</label><br><br>
        <input type="text" name="last" id="" required><br><br>

        <label for="gender">Gender:</label><br><br>
        <input type="radio" name="gender" id="male" required>
        <label for="male">Male</label><br>
        <input type="radio" name="gender" id="female" required>
        <label for="female">Female</label><br>
        <input type="radio" name="gender" id="other" required>
        <label for="other">Other</label><br><br>

        <label for="nationality">Nationality:</label><br><br>
        <select name="nationality" id="">
            <option value="Indonesia">Indonesian</option>
            <option value="Other">Other</option>
        </select><br><br>

        <label for="language">Language Spoken:</label><br><br>
        <input type="checkbox" name="language" id="indonesia">
        <label for="indonesia">Indonesia</label><br>
        <input type="checkbox" name="language" id="english">
        <label for="english">English</label><br>
        <input type="checkbox" name="language" id="other">
        <label for="other">Other</label><br><br>

        <label for="bio">Bio:</label><br><br>
        <textarea name="bio" id="" cols="30" rows="10" required></textarea><br>
        <button type="submit">Sign Up</button>
    </form>
</body>

</html>
