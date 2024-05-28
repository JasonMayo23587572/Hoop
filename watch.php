<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Days+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/index.css">
    <title>Woop</title>
</head>

<body>
    <?php include './components/header.php'; ?>


    <div class="PlayerContainer">
        <video width="90%" controls>
            <source src="https://www.imdb.com/video/vi3948911129/?playlistId=tt0945513&ref_=ext_shr_lnk" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <div class="HeroContent">
        <p class="Rating">6.9/10</p>
        <p class="Title">Fast & Furious 9</p>
        <div class="CategoryChipsContainer">
            <div class="Chip">
                <p class="ChipText">Action</p>
            </div>
            <div class="Chip">
                <p class="ChipText">Family</p>
            </div>
        </div>
        <p class="Description">
            Dominic Toretto and his crew join forces to battle the most skilled assassin and high-performance driver
            they've ever encountered -- his forsaken brother.
        </p>

        <p class="Description">
            Director: Justin Lin <br>
            Cast: Vin Diesel, Michelle Rodriguez, Jordana Brewster <br>
            Release Date: 2021 <br>
            Duration: 2h 23m
        </p>

    </div>
</body>

</html>