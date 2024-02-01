</section>
    </div>

    <footer>

        <p>&copy; 2024 Learn PHP. All rights reserved.</p>
        <p></p>
         <?php
        $fileName = basename(__FILE__);
        $modificationTime = date("F d Y H:i:s.", filemtime(__FILE__));
        echo "<p>Last modified time of $fileName: $modificationTime</p>";
        ?>
    </footer>
</body>

</html>
