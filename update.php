<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lights ON</title>
</head>
<link rel="stylesheet" href="update.css">
<script src="updates.js"></script>
<?php
    include "navigation.php";

    // Assuming you have a database connection
    $db = new PDO("mysql:host=localhost;dbname=lights_on", "root", "");

    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Get the content from the form
        $content = $_POST["content"];

        // Validate the content
        if (!empty($content)) {
            $editable = isset($_POST["editable"]) ? 1 : 0;

            // Insert the update into the database
            $query = $db->prepare("INSERT INTO updates (content, editable) VALUES (:content, :editable)");
            $query->bindParam(":content", $content);
            $query->bindParam(":editable", $editable);
            $query->execute();

            // Redirect to a different page to avoid resubmission
            header("Location: updates.php");
            exit();
        }
    }

    // Check if a delete request was made
    if (isset($_GET["delete"]) && is_numeric($_GET["delete"]) && isset($_SESSION["special_user"]) && $_SESSION["special_user"] === true) {
        $deleteId = $_GET["delete"];

        // Delete the update from the database
        $query = $db->prepare("DELETE FROM updates WHERE id = :id");
        $query->bindParam(":id", $deleteId);
        $query->execute();

        // Redirect to a different page to avoid resubmission
        header("Location: updates.php");
        exit();
    }

    // Check if an edit request was made
    if (isset($_GET["edit"]) && is_numeric($_GET["edit"])) {
        $editId = $_GET["edit"];

        // Retrieve the update from the database
        $query = $db->prepare("SELECT * FROM updates WHERE id = :id");
        $query->bindParam(":id", $editId);
        $query->execute();
        $update = $query->fetch(PDO::FETCH_ASSOC);
    }

    // Check if an update request was made
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["updatedContent"]) && isset($_POST["updateId"])) {
        $updatedContent = $_POST["updatedContent"];
        $updateId = $_POST["updateId"];

        // Update the content in the database
        $query = $db->prepare("UPDATE updates SET content = :content WHERE id = :id");
        $query->bindParam(":content", $updatedContent);
        $query->bindParam(":id", $updateId);
        $query->execute();

        // Redirect to a different page to avoid resubmission
        header("Location: updates.php");
        exit();
    }

    // Retrieve updates from the database
    $query = $db->prepare("SELECT * FROM updates");
    $query->execute();
    $updates = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<body>
    <table>
        <tr>
            <td>
                <h1>Updates</h1>
            </td>
        </tr>
        <tr>
            <td>
                <div id="output">
                    <!-- Display updates from the database -->
                    <?php
                        foreach ($updates as $update) {
                            if (isset($_GET["edit"]) && $_GET["edit"] == $update["id"]) {
                                // Display the update in an edit form
                                echo "<form method='POST' action=''>";
                                echo "<input type='text' name='updatedContent' value='" . $update["content"] . "'>";
                                echo "<input type='submit' value='Update'>";
                                echo "<a href='updates.php'>Cancel</a>";
                                echo "<input type='hidden' name='updateId' value='" . $update["id"] . "'>";
                                echo "</form>";
                            } else {
                                // Display the update text
                                echo "<p>" . $update["content"];

                                if (isset($_SESSION["special_user"]) && $_SESSION["special_user"] === true) {
                                echo "<a href='?edit=" . $update["id"] . "'> Edit</a>";
                                echo "<a href=\"?delete=" . $update["id"] . "\"> Delete</a>";
                                }

                                echo "</p>";
                            }
                        }                        
                    ?>
                </div>
            </td>
        </tr>
        <?php if (isset($_SESSION["special_user"]) && $_SESSION["special_user"] === true): ?>
    <tr>
        <td>
            <!-- Create a form to add updates -->
            <form method="POST" action="">
                <input type="text" spellcheck="false" placeholder="Type here the updates" name="content" id="input">
                <input type="submit" value="Add">
            </form>
        </td>
    </tr>
<?php endif; ?>

    </table>
</body>
<?php
    include "footer.php";
?>
</html>