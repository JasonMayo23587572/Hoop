<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOOP - Add Profile</title>
    <link rel="icon" type="image/x-icon" href="logo.jpg">
    <link rel="stylesheet" href="profile.css"> 
</head>


<body>
   
    <div class="container">
        <img src="logo.jpg" alt="Logo" class="logo">
        <h1>Add New Profile</h1>
        <form id="profileForm">
            <label for="preferredName">Preferred Name:</label>
            <input type="text" id="preferredName" name="preferredName" required>

            <label for="profileIcon">Profile Icon:</label>
            <input type="file" id="profileIcon" name="profileIcon" accept="image/*" required>
            <small>Select an image file.</small>

            <label>Profile Type:</label>
            <div class="radio-group">
                <input type="radio" id="kids" name="profileType" value="kids" required>
                <label for="kids">Kids</label>
                <input type="radio" id="adult" name="profileType" value="adult" required>
                <label for="adult">Adult</label>
            </div>

            <div class="button-group">
                <button type="submit">Create Profile</button>
                <button type="button" class="cancel-btn">Cancel</button>
            </div>
        </form>
        <div id="message"></div>
    </div>
</body>

</html>
