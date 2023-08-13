<!DOCTYPE html>
<html>
<head>
    
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Our Team</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="styles/style.css" />
        <link href="css/aboutUs.css" rel="stylesheet">
</head>
<body>
    <!-- Our Team Start-->
    <div class="container py-5">
        <h1 align="center">Our <span class="text-red">Team</span></h1><br>
        <div class="row">
            <?php
                // Define team members' information as an array
                $teamMembers = array(
                    array("Sakuni Nikeshala", "Full Stack Developer", "img/team/Sa.jpg"),
                    array("Dharani Gunasekara", "Full Stack Developer", "img/team/dharani.jpeg"),
                    array("P. Kekajan ", "Full Stack Developer", "img/team/kekajan.jpeg"),
                    array("S. Navaneethan", "Full Stack Developer", "img/team/navaneethan.jpeg"),
                    array("Kavindu Fernando ", "Full Stack Developer", "img/team/geethanjana.jpeg")
                );

                // Loop through the team members and generate the HTML code for each member
                foreach ($teamMembers as $member) {
                    echo '<div class="col">';
                    echo '<div class="card shadow-sm border-0 rounded">';
                    echo '<div class="card-body p-0"><img src="' . $member[2] . '" alt="" class="w-100 card-img-top">';
                    echo '<div class="p-4">';
                    echo '<h5 class="mb-0">' . $member[0] . '</h5>';
                    echo '<p class="small text-muted">' . $member[1] . '</p>';
                    echo '</div></div></div></div>';
                }
            ?>
        </div>
    </div>
    <!-- Include your footer and other scripts here -->
</body>
</html>
