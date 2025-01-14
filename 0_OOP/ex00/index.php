<?php
    include "TemplateEngine.php";
    $template = new TemplateEngine();
    $template->createFile("generated.html", "book_description.html", [
        "Generated Page",
        "The Lord of the Rings",
        "J.R.R. Tolkien",
        "The Lord of the Rings is an epic high fantasy novel by the English author and scholar J. R. R. Tolkien. Set in Middle-earth, intended to be Earth at some distant time in the past, the story began as a sequel to Tolkien's 1937 children's book The Hobbit, but eventually developed into a much larger work. Written in stages between 1937 and 1949, The Lord of the Rings is one of the best-selling novels ever written, with over 150 million copies sold.",
        "22 euros"
    ]);
?>