<html>

<head>
    <title>Buat Account Baru!</title>
    <meta charset="UTF-8">
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form method="POST" action="/welcome">
        @CSRF
        <label for="firstName">First Name</label><br><br>
        <input type="text" name="firstName" id="firstName"><br><br>

        <label for="lastName">Last Name</label><br><br>
        <input type="text" name="lastName" id="lastName"><br>

        <p>Gender:</p>
        <input type="radio" name="gender" id="male" value="male">
        <label for="male">Male</label><br>
        <input type="radio" name="gender" id="female" value="female">
        <label for="female">Female</label><br>
        <input type="radio" name="gender" id="other" value="other">
        <label for="other">Other</label><br><br>

        <label for="nationality">Nationality</label><br><br>
        <select name="nationality" id="nationality">
            <option value="0">Indonesian</option>
            <option value="1">Malaysian</option>
            <option value="2">Singaporean</option>
            <option value="3">Australian</option>
        </select> <br>

        <p>Language Spoken</p>
        <input type="checkbox" name="language" id="id_lang" value="id">
        <label for="id_lang">Bahasa Indonesia</label><br>
        <input type="checkbox" name="language" id="en_lang" value="en">
        <label for="en_lang">English</label><br>
        <input type="checkbox" name="language" id="other_lang" value="other">
        <label for="other_lang">Other</label><br><br>

        <label for="bio">Bio</label><br><br>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br><br>


        <button type="submit" name="submits">Sign Up</button>
        <!-- <input type="submit" value="Sign Up"> -->
    </form>
</body>

</html>