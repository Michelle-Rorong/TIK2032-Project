            <?php
            $sql = "SELECT JUDUL, LINK FROM blog";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<article>";
                    echo "<h3>" . $row["JUDUL"] . "</h3>";
                    echo "<p><a href='" . $row["LINK"] . "'>" . $row["JUDUL"] . "</a></p>";
                    echo "</article>";
                }
            } else {
                echo "<p>No blog posts found.</p>";
            }
            ?>
