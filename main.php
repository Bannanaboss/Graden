<?php
    include("header.php");

    $messages = array();

    if (!isset($_GET["graden"])) {
        $messages[] = "Ful eerst het formulier in";
    }

    if (count($messages) > 0) {
        $html = "<ul>";
        foreach ($messages as $message) {
            $html .= "<li>" . $message . "</li>";
        }
        $html .= "</ul>";
        echo $html;

    } else {
        echo '<ul><li>Fahrenheit: '.($_GET["graden"] * 9/5 + 32).'</li></ul>';
    }

?>

<?php
    include("footer.php");
?>