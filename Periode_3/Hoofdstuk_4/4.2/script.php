<p>
    <?php
    $courseName = "Nederlands";
    switch ($courseName)
    {
        case "Digitale Vaardigheden":
            echo "Voor het vak $courseName krijg je les van mevrouw Pielage";
            break;
        case "Computertekenen":
            echo "Voor het vak $courseName krijg je les van meneer Van Den Berg";
            break;
        case "HTML/CSS":
        case "Rekenen":
        case "SQL":
            echo "Voor het vak $courseName krijg je les van meneer Van De Wetering";
            break;
        case "PHP":
        case "Hardware":
            echo "Voor het vak $courseName krijg je les van meneer Saebu";
            break;
        case "Javascriot":
            echo "Voor het vak $courseName krijg je les van meneer Evers";
            break;
        case "Usability":
        case "ASP":
            echo "Voor het vak $courseName krijg je les van meneer Gijsbrechts";
            break;
        case "Modelleren":
            echo "Voor het vak $courseName krijg je les van meneer Van Bijnen";
            break;
        case "Nederlands":
            echo "Voor het vak $courseName krijg je les van meneer Van Den Ende";
            break;
        case "Engels":
            echo "Voor het vak $courseName krijg je les van mevrouw Mitrovich";
            break;
        case "Studievaardigheden":
        case "Burgerschap":
            echo "Voor het vak $courseName krijg je les van meneer Vissers";
            break;
    }
    ?>
</p>
